const TesouroDireto = artifacts.require("TesouroDireto");

contract("TesouroDireto", accounts => {

    let instanciaContrato;
    const owner = accounts[0]; // Proprietário do contrato (geralmente quem faz o deploy)
    const detentor = accounts[1]; // Endereço do detentor que receberá os títulos
    const detentorDestino = accounts[2];

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
 /*   
    it("TESTE 3 => deve emitir um título para um detentor específico", async () => {

        const totalTitulos = await instanciaContrato.getTotalTitulos();
        assert.equal(totalTitulos.toString(), '1', "Deveria existir um título");
    
        // Dados para a emissão do título
        const idTitulo = 1; // Assumindo que este é o ID do título criado no gancho before
        const quantidade = new BigNumber(10).mul(new BigNumber(10).pow(new BigNumber(18))); // 10 tokens // Quantidade de títulos a serem emitidos
    
        // Chamar a função emitirTitulo
        await instanciaContrato.emitirTitulo(idTitulo, detentor, quantidade, { from: owner });
        
        // Verificar se a quantidade de títulos foi adicionada ao registro do detentor
        const quantidadeRegistrada = await instanciaContrato.titulosDetentor(detentor, idTitulo);
        assert(quantidadeRegistrada.toString() === quantidade.toString(), "A quantidade de títulos do detentor deve ser atualizada corretamente");

        //console.log('>>>>>>>>>>>> '+quantidade);
        //console.log('>>>>>>>>>>>> '+quantidadeRegistrada);

        assert(quantidadeRegistrada.toString() === quantidade.toString(), "A quantidade de títulos do detentor deve ser atualizada corretamente");

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
        console.log("    Carteira do Detentor: " + log[0].args.detentor.toString());
        console.log("    Quantidade: " + log[0].args.quantidade.toString());

        assert.equal(log.length, 1, "Deve ter um evento TituloEmitido emitido");
        assert.equal(log[0].args.detentor, detentor, "O evento deve ter o detentor correto");
        assert.equal(log[0].args.idTitulo, idTitulo, "O evento deve ter o ID do título correto");
        assert(log[0].args.quantidade.toString() === quantidade.toString(), "O evento deve ter a quantidade correta");
    });

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