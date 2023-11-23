const TesouroDireto = artifacts.require("TesouroDireto");

contract("TesouroDireto", accounts => {

    let instanciaContrato;
    const owner             = accounts[0]; // Proprietário do contrato (geralmente quem faz o deploy)
    const detentor          = accounts[1]; // Endereço do detentor que receberá os títulos
    const detentorDestino   = accounts[2];
    const carteira_b3       = accounts[3];
    const carteira_bacem    = accounts[4];

    // Dados para o titulo
    const idExterno = 1;
    const dados_titulo = JSON.stringify({
        "nome": "Tesouro Prefixado 2026",
        "dataVencimento": "2026-01-01", 
        "rentabilidadeAnual": 10.62, 
        "valorNominal": 803.89, 
        "taxaB3": 0.2, 
        "aliquotaIR": 22.50,
        "isentoIOF": true
    });

    const BigNumber = web3.utils.BN;

    before(async () => {
        
        //Instanciar o Contrato
        instanciaContrato = await TesouroDireto.new("TesouroDiretoToken", "TDT", owner);

        // Chama criarTitulo e espera que a transação seja concluída
        await instanciaContrato.criarDetalhesTitulo(idExterno, dados_titulo, { from: owner });

    });

    
    it("TESTE 1 => deve retornar detalhes corretos de um título criado", async () => {
        
        const idExterno         = 1;
        const detalhesTitulo    = await instanciaContrato.getDetalhesTituloCriado(idExterno);

        console.log(" ");
        console.log("    #######################");
        console.log("    ####### TESTE 1 #######");
        console.log("    #######################");
        console.log("    Id Externo: " + detalhesTitulo.idExterno.toString());
        console.log("    Detalhes do Título: " + detalhesTitulo.dados_titulo);
        console.log("    Owner do Título: " + owner);

        assert.equal(detalhesTitulo.idExterno, idExterno, "O ID do título deve corresponder ao solicitado.");

    });
  

    it("TESTE 2 => deve adicionar carteira de owner, b3 e bacem à lista de autorizações", async () => {

        const owner             = accounts[0];
        const carteira_b3       = accounts[3];
        const carteira_bacem    = accounts[4];

        await instanciaContrato.setCarteiraAutorizada(owner, true, { from: owner });
        await instanciaContrato.setCarteiraAutorizada(carteira_b3, true, { from: owner });
        await instanciaContrato.setCarteiraAutorizada(carteira_bacem, true, { from: owner });

        const enderecosAutorizados = await instanciaContrato.getEnderecosAutorizados();

        assert.equal(enderecosAutorizados.length, 3, "Deveria haver 3 endereços autorizados.");
        assert.equal(enderecosAutorizados[0], owner, "A primeira carteira autorizada não corresponde.");
        assert.equal(enderecosAutorizados[1], carteira_b3, "A segunda carteira autorizada não corresponde.");
        assert.equal(enderecosAutorizados[2], carteira_bacem, "A terceira carteira autorizada não corresponde.");
        
        console.log(" ");
        console.log("    #######################");
        console.log("    ####### TESTE 2 #######");
        console.log("    #######################");
        console.log("    Carteira Owner Autorizada: " + enderecosAutorizados[0]);
        console.log("    Carteira B3 Autorizada: " + enderecosAutorizados[1]);
        console.log("    Carteira Bacem Autorizada: " + enderecosAutorizados[2]);

    });

    
    it("TESTE 3 => deve emitir um título para um detentor específico", async () => {

        // Dados para a emissão do título
        const owner         = accounts[0];
        const detentor      = accounts[1];
        const idTitulo      = 1;
        const quantidade    = new BigNumber(10).mul(new BigNumber(10).pow(new BigNumber(18))); // 10 tokens
    
        // Chamar a função emitirTitulo
        await instanciaContrato.emitirTitulo(idTitulo, detentor, quantidade, { from: owner });
        
        // Verificar se a quantidade de títulos foi adicionada ao registro do detentor
        const quantidadeRegistrada = await instanciaContrato.getQtdTitulosDetentor(detentor, idTitulo);
        assert(quantidadeRegistrada.toString() === quantidade.toString(), "A quantidade de titulos do detentor deve ser atualizada corretamente");

        // Verificar se o evento TituloEmitido foi emitido corretamente
        const log = await instanciaContrato.getPastEvents('TituloEmitido', {
            fromBlock: 'latest',
            toBlock: 'latest'
        });

        console.log(" ");
        console.log("    #######################");
        console.log("    ####### TESTE 3 #######");
        console.log("    #######################");
        console.log("    Id do Titulo: " + log[0].args.idTitulo.toString());
        console.log("    Carteira do Owner: " + owner.toString());
        console.log("    Carteira do Detentor: " + log[0].args.detentor.toString());
        console.log("    Quantidade: " + log[0].args.quantidade.toString());

        assert.equal(log.length, 1, "Deve ter um evento TituloEmitido emitido");
        assert.equal(log[0].args.detentor, detentor, "O evento deve ter o detentor correto");
        assert.equal(log[0].args.idTitulo, idTitulo, "O evento deve ter o ID do título correto");
        assert(log[0].args.quantidade.toString() === quantidade.toString(), "O evento deve ter a quantidade correta");

    });


    it("TESTE 4 => deve permitir que o detentor de destino deposite BNB", async () => {
        
        const detentorDestino   = accounts[2];

        const valorDeposito = web3.utils.toWei("1", "ether"); // 1 ETH em wei
        await instanciaContrato.depositarParaCompra({ from: detentorDestino, value: valorDeposito });
        
        const saldoDepositado = await instanciaContrato.depositos(detentorDestino);
        assert.equal(saldoDepositado.toString(), valorDeposito, "O valor depositado não corresponde ao esperado.");
    
        console.log(" ");
        console.log("    #######################");
        console.log("    ####### TESTE 4 #######");
        console.log("    #######################");
        console.log("    Saldo depositado por Detentor de Destino: " + saldoDepositado.toString());

    });

    it("TESTE 5 => deve permitir a transferência de título com condições adequadas", async () => {

        const detentor          = accounts[1];
        const detentorDestino   = accounts[2];

        const valorTransferencia = web3.utils.toWei("1", "ether"); // 1 ETH em wei
        const idTitulo = 1;
        const quantidade = new BigNumber(5).mul(new BigNumber(10).pow(new BigNumber(18))); // 5 tokens

        // Certifique-se de que o detentor de destino tenha depositado BNB suficiente
        await instanciaContrato.depositarParaCompra({ from: detentorDestino, value: valorTransferencia });

        // Realizar a transferência de título
        await instanciaContrato.compraSecundaria(detentor, detentorDestino, idTitulo, quantidade, valorTransferencia, { from: owner });

        // Verificar os saldos de títulos e BNB após a transação
        const saldoDetentorOrigem = await instanciaContrato.titulosDetentor(detentor, idTitulo);
        const saldoDetentorDestino = await instanciaContrato.titulosDetentor(detentorDestino, idTitulo);

        //assert(saldoDetentorOrigem.toString() === "0", "O detentor de origem deve ter transferido todos os seus títulos");
        assert(saldoDetentorDestino.toString() === quantidade.toString(), "O detentor de destino deve ter recebido a quantidade correta de títulos");

        console.log(" ");
        console.log("    #######################");
        console.log("    ####### TESTE 5 #######");
        console.log("    #######################");
        console.log("    Detentor de Origem: " + detentor.toString());
        console.log("    Saldo do Detentor de Origem: " + saldoDetentorOrigem.toString());
        console.log(" ");
        console.log("    Detentor de Destino: " + detentorDestino.toString());
        console.log("    Saldo do Detentor de Destino: " + saldoDetentorDestino.toString());
    });


/*
    it("TESTE 4 => deve verificar se a função getQuantidadeTitulos retorna a quantidade correta", async () => {

        // Supondo que o título com id 1 foi criado e emitido previamente...
        const idTitulo = 1;
        const quantidadeEmitida = new BigNumber(10).mul(new BigNumber(10).pow(new BigNumber(18))); // A quantidade de títulos que foi emitida para o detentor.
        
        // Chama a função getQuantidadeTitulos para o detentor e id do título
        const quantidadeRetornada = await instanciaContrato.getQuantidadeTitulos(detentor, idTitulo);

        // Verifica se a quantidade retornada é igual à quantidade que foi emitida
        assert(quantidadeRetornada.toString() === quantidadeEmitida.toString(), "A quantidade retornada pela função getQuantidadeTitulos deve ser igual à quantidade emitida.");
    
        console.log(" ");
        console.log("    #######################");
        console.log("    ####### TESTE 4 #######");
        console.log("    #######################");
        console.log("    Quantidade Emitidada: " + quantidadeEmitida.toString());
        console.log("    Quantidade com Detentor: " + quantidadeRetornada.toString());

    });

    it("TESTE 5 => deve listar todos os títulos adquiridos por um detentor", async () => {
        // Adiciona alguns títulos para o detentor antes de executar este teste
    
        const totalTitulos = await instanciaContrato.getTotalTitulos();
        assert(totalTitulos.toNumber() > 0, "Deve existir pelo menos um título emitido");
    
        for (let i = 1; i <= totalTitulos.toNumber(); i++) {
            // Recupera a quantidade de cada título adquirido pelo detentor
            const quantidade = await instanciaContrato.titulosDetentor(detentor, i);
            const quantidadeNum = new BigNumber(quantidade);
    
            if (quantidadeNum.gt(new BigNumber(0))) {
                // Verifica se os detalhes de cada título estão corretos
                assert(quantidadeNum.gt(new BigNumber(0)), "O detentor deve ter uma quantidade positiva de títulos");
    
                console.log(" ");
                console.log("    #######################");
                console.log("    ####### TESTE 5 #######");
                console.log("    #######################");
                console.log("    Detentor: " + detentor);
                console.log("    Quantidade do Detentor: " + quantidadeNum.toString());
            }
        }
    });

    it("TESTE 6 => deve permitir que um detentor transfira títulos para outro detentor", async () => {
        console.log(" ");
        console.log("    #######################");
        console.log("    ####### TESTE 6 #######");
        console.log(" ");
        
        const idTitulo = 1; // Suponha que este seja o ID do título criado
        const quantidadeTransferir = new BigNumber(2).mul(new BigNumber(10).pow(new BigNumber(18))); // Quantidade de títulos a ser transferida
    
        // Consulte a quantidade inicial de títulos do detentorOrigem e detentorDestino
        let saldoInicialDetentorOrigem = new BigNumber(await instanciaContrato.getQuantidadeTitulos(detentor, idTitulo));
        let saldoInicialDetentorDestino = new BigNumber(await instanciaContrato.getQuantidadeTitulos(detentorDestino, idTitulo));
    
        console.log("    Quantidade à transferir: " + quantidadeTransferir.toString());
        console.log(" ");
        console.log("    >> ANTES DA TRANSFERÊNCIA");
        console.log(" ");
        console.log("        Detentor de Origem: " + detentor);
        console.log("        Títuo Id: " + idTitulo);
        console.log("        Quantidade Inicial do Detentor de Origem: " + saldoInicialDetentorOrigem.toString());
        console.log("        -----------------------------------------------------------------");
        console.log("        Detentor de Destino: " + detentorDestino);
        console.log("        Títuo Id: " + idTitulo);
        console.log("        Quantidade Inicial do Detentor de Destino: " + saldoInicialDetentorDestino.toString());
        console.log("        -----------------------------------------------------------------");
    
        // Verifique se o detentorOrigem tem a quantidade suficiente de títulos
        assert(saldoInicialDetentorOrigem.gte(quantidadeTransferir), "O detentor de origem não tem títulos suficientes para transferir.");
    
        // Execute a transferência
        await instanciaContrato.transferirTitulo(detentor, detentorDestino, idTitulo, quantidadeTransferir, { from: detentor });
    
        // Reconsulte os saldos após a transferência
        let saldoFinalDetentorOrigem = new BigNumber(await instanciaContrato.getQuantidadeTitulos(detentor, idTitulo));
        let saldoFinalDetentorDestino = new BigNumber(await instanciaContrato.getQuantidadeTitulos(detentorDestino, idTitulo));
    
        console.log(" ");
        console.log("    >> APÓS TRANSFERÊNCIA");
        console.log(" ");
        console.log("        Detentor de Origem: " + detentor);
        console.log("        Títuo Id: " + idTitulo);
        console.log("        Quantidade Final do Detentor de Origem: " + saldoFinalDetentorOrigem.toString());
        console.log("        -----------------------------------------------------------------");
        console.log("        Detentor de Destino: " + detentorDestino);
        console.log("        Títuo Id: " + idTitulo);
        console.log("        Quantidade Final do Detentor de Destino: " + saldoFinalDetentorDestino.toString());
    
        // Verifique se os saldos finais estão corretos
        assert.equal(
          saldoFinalDetentorOrigem.toString(),
          saldoInicialDetentorOrigem.sub(quantidadeTransferir).toString(),
          "A quantidade de títulos do detentorOrigem deve ser reduzida pela quantidade transferida."
        );
    
        assert.equal(
          saldoFinalDetentorDestino.toString(),
          saldoInicialDetentorDestino.add(quantidadeTransferir).toString(),
          "A quantidade de títulos do detentorDestino deve ser igual à quantidade transferida."
        );
    });
*/
    
});