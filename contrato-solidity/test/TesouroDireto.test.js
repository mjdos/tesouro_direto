const TesouroDireto = artifacts.require("TesouroDireto");

contract("TesouroDireto", accounts => {

    let instanciaContrato;
    const owner = accounts[0]; // Proprietário do contrato (geralmente quem faz o deploy)
    const detentor = accounts[1]; // Endereço do detentor que receberá os títulos
    const detentorDestino = accounts[2];

    // Dados fictícios para o título
    const idExterno = 1;
    const nome = "Tesouro Prefixado 2026";
    const dataVencimento = new Date('2026-01-01T00:00:00Z').getTime() / 1000;
    const rentabilidadeAnual = 1062; // 10.62% representado em pontos base
    const valorNominal = 80389; // R$ 803,89 representado em centavos
    const taxaB3 = 20; // 0.20% representado em pontos base
    const aliquotaIR = 2250; // 22.50% representado em pontos base
    const isentoIOF = true;


    before(async () => {
        // Aqui estamos implantando o contrato manualmente em vez de usar .deployed()
        instanciaContrato = await TesouroDireto.new("TesouroDiretoToken", "TD2026", owner);

        // Exemplo de criação e emissão do título:
        idTitulo = 1; // Suponha que este seja o ID do título criado
        quantidadeInicial = 100; // Suponha que esta seja a quantidade de títulos emitida para o detentorOrigem
        valorTitulo = 1000; // Suponha que este seja o valor do título

        // Chama criarTitulo e espera que a transação seja concluída
        await instanciaContrato.criarTitulo(idExterno, nome, dataVencimento, rentabilidadeAnual, valorNominal, taxaB3, aliquotaIR, isentoIOF, { from: owner });

    });

    it("TESTE 1 => deve criar um título e verificar o total de títulos", async () => {

        // Obter o total de títulos
        const totalTitulos = await instanciaContrato.getTotalTitulos();
    
        console.log(" ");
        console.log("    #######################");
        console.log("    ####### TESTE 1 #######");
        console.log("    #######################");
        console.log("    Total de Títulos Criados: " + totalTitulos.toString());

        assert.equal(totalTitulos.toNumber(), 1, "O total de títulos deve ser 1 após a criação do título.");
    });
    
    it("TESTE 2 => deve retornar detalhes corretos de um título criado", async () => {
        // Usando o ID 1, que foi o primeiro título criado no teste anterior
        const idTitulo = 1;
    
        const detalhesTitulo = await instanciaContrato.getDetalhesTitulo(idTitulo);

        ///Visualizar o resultado no console.log
        console.log(" ");
        console.log("    #######################");
        console.log("    ####### TESTE 2 #######");
        console.log("    #######################");
        console.log("    Id do Título: " + detalhesTitulo.id.toString());
        console.log("    Id Externo: " + detalhesTitulo.idExterno.toString());
        console.log("    Nome do Título: " + detalhesTitulo.nome);
        console.log("    Data de Vencimento: " + new Date(detalhesTitulo.dataVencimento.toNumber() * 1000).toISOString());
        console.log("    Rentabilidade Anual: " + (detalhesTitulo.rentabilidadeAnual.toNumber() / 100).toFixed(2) + '%');
        console.log("    Valor do Título: R$ " + (detalhesTitulo.valorNominal.toNumber() / 100).toFixed(2));
        console.log("    Custo - Taxa B3: " + (detalhesTitulo.taxaB3.toNumber() / 100).toFixed(2) + '%');
        console.log("    Custo - Aliquota de IR: " + (detalhesTitulo.aliquotaIR.toNumber() / 100).toFixed(2) + '%');
        console.log("    Custo - Isento de IOF: " + detalhesTitulo.isentoIOF);

        assert.equal(detalhesTitulo.id, idTitulo, "O ID do título deve corresponder ao solicitado.");
        assert.equal(detalhesTitulo.nome, "Tesouro Prefixado 2026", "O nome do título deve corresponder ao criado.");
        // Verifique os demais campos de `detalhesTitulo` conforme necessário
    });
    
    it("TESTE 3 => deve emitir um título para um detentor específico", async () => {

        const totalTitulos = await instanciaContrato.getTotalTitulos();
        assert.equal(totalTitulos.toNumber(), 1, "Deveria existir um título");
    
        // Dados para a emissão do título
        const idTitulo = 1; // Assumindo que este é o ID do título criado no gancho before
        const quantidade = 10; // Quantidade de títulos a serem emitidos
    
        // Chamar a função emitirTitulo
        await instanciaContrato.emitirTitulo(idTitulo, detentor, quantidade, { from: owner });
    
        // Verificar se a quantidade de títulos foi adicionada ao registro do detentor
        const quantidadeRegistrada = await instanciaContrato.titulosDetentor(detentor, idTitulo);
        assert.equal(quantidadeRegistrada.toNumber(), quantidade, "A quantidade de títulos do detentor deve ser atualizada corretamente");
    
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
        assert.equal(log[0].args.quantidade, quantidade, "O evento deve ter a quantidade correta");
    });

    it("TESTE 4 => deve verificar se a função getQuantidadeTitulos retorna a quantidade correta", async () => {

        // Supondo que o título com id 1 foi criado e emitido previamente...
        const idTitulo = 1;
        const quantidadeEmitida = 10; // A quantidade de títulos que foi emitida para o detentor.
        
        // Chama a função getQuantidadeTitulos para o detentor e id do título
        const quantidadeRetornada = await instanciaContrato.getQuantidadeTitulos(detentor, idTitulo);

        // Verifica se a quantidade retornada é igual à quantidade que foi emitida
        assert.equal(
          quantidadeRetornada.toNumber(),
          quantidadeEmitida,
          "A quantidade retornada pela função getQuantidadeTitulos deve ser igual à quantidade emitida."
        );

        console.log(" ");
        console.log("    #######################");
        console.log("    ####### TESTE 4 #######");
        console.log("    #######################");
        console.log("    Quantidade Emitidada: " + quantidadeEmitida);
        console.log("    Quantidade com Detentor: " + quantidadeRetornada.toNumber());

    });

    it("TESTE 5 => deve listar todos os títulos adquiridos por um detentor", async () => {
        // Adiciona alguns títulos para o detentor antes de executar este teste
    
        const totalTitulos = await instanciaContrato.getTotalTitulos();
        assert(totalTitulos.toNumber() > 0, "Deve existir pelo menos um título emitido");
    
        for (let i = 1; i <= totalTitulos.toNumber(); i++) {
            // Recupera a quantidade de cada título adquirido pelo detentor
            const quantidade = await instanciaContrato.titulosDetentor(detentor, i);
            if (quantidade.toNumber() > 0) {
                // Verifica se os detalhes de cada título estão corretos
                assert(quantidade.toNumber() > 0, "O detentor deve ter uma quantidade positiva de títulos");
                // Outras verificações conforme necessário
                console.log(" ");
                console.log("    #######################");
                console.log("    ####### TESTE 5 #######");
                console.log("    #######################");
                console.log("    Detentor: " + detentor);
                console.log("    Quantidade do Detentor: " + quantidade.toNumber());
            }
        }
    });

    it("TESTE 6 => deve permitir que um detentor transfira títulos para outro detentor", async () => {

        console.log(" ");
        console.log("    #######################");
        console.log("    ####### TESTE 6 #######");
        console.log("    #######################");
        console.log(" ");
        
        const idTitulo = 1; // Suponha que este seja o ID do título criado
        const quantidadeTransferir = 2; // Quantidade de títulos a ser transferida
    
        // Consulte a quantidade inicial de títulos do detentorOrigem e detentorDestino
        let saldoInicialDetentorOrigem = await instanciaContrato.getQuantidadeTitulos(detentor, idTitulo);
        let saldoInicialDetentorDestino = await instanciaContrato.getQuantidadeTitulos(detentorDestino, idTitulo);

        console.log("    Quantidade à transferir: " + quantidadeTransferir);
        console.log(" ");
        console.log("    >> ANTES DA TRANSFERÊNCIA");
        console.log(" ");
        console.log("        Detentor de Origem: " + detentor);
        console.log("        Títuo Id: " + idTitulo);
        console.log("        Quantidade Inicial do Detentor de Origem: " + saldoInicialDetentorOrigem);
        console.log("        -----------------------------------------------------------------");
        console.log("        Detentor de Destino: " + detentorDestino);
        console.log("        Títuo Id: " + idTitulo);
        console.log("        Quantidade Inicial do Detentor de Destino: " + saldoInicialDetentorDestino);
        console.log("        -----------------------------------------------------------------");

        // Verifique se o detentorOrigem tem a quantidade suficiente de títulos
        assert(saldoInicialDetentorOrigem.toNumber() >= quantidadeTransferir, "O detentor de origem não tem títulos suficientes para transferir.");
    
        // Execute a transferência
        await instanciaContrato.transferirTitulo(detentor, detentorDestino, idTitulo, quantidadeTransferir, { from: detentor });
    
        // Reconsulte os saldos após a transferência
        let saldoFinalDetentorOrigem = await instanciaContrato.getQuantidadeTitulos(detentor, idTitulo);
        let saldoFinalDetentorDestino = await instanciaContrato.getQuantidadeTitulos(detentorDestino, idTitulo);
    
        console.log(" ");
        console.log("    >> APÓS TRANSFERÊNCIA");
        console.log(" ");
        console.log("        Detentor de Origem: " + detentor);
        console.log("        Títuo Id: " + idTitulo);
        console.log("        Quantidade Final do Detentor de Origem: " + saldoFinalDetentorOrigem);
        console.log("        -----------------------------------------------------------------");
        console.log("        Detentor de Destino: " + detentorDestino);
        console.log("        Títuo Id: " + idTitulo);
        console.log("        Quantidade Final do Detentor de Destino: " + saldoFinalDetentorDestino);

        // Verifique se os saldos finais estão corretos
        assert.equal(
          saldoFinalDetentorOrigem.toNumber(),
          saldoInicialDetentorOrigem.toNumber() - quantidadeTransferir,
          "A quantidade de títulos do detentorOrigem deve ser reduzida pela quantidade transferida."
        );
    
        assert.equal(
          saldoFinalDetentorDestino.toNumber(),
          saldoInicialDetentorDestino.toNumber() + quantidadeTransferir,
          "A quantidade de títulos do detentorDestino deve ser igual à quantidade transferida."
        );
    });

    
});