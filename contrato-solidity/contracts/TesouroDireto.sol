// SPDX-License-Identifier: MIT
pragma solidity ^0.8.7;

import "@openzeppelin/contracts/token/ERC20/ERC20.sol";
import "@openzeppelin/contracts/access/Ownable.sol";

contract TesouroDireto is ERC20, Ownable {

    // O construtor foi atualizado para incluir os argumentos necessários para o ERC20
    // e para chamar o construtor do Ownable com o endereço do proprietário
    constructor(string memory name, string memory symbol, address initialOwner)
        ERC20(name, symbol)
        Ownable(initialOwner) /// Aqui você passa o endereço do proprietário
    {
        // Código do construtor, se necessário
    }


    /*****************************************/
    /********* CRIAÇÃO DE TÍTULO *************/
    /*****************************************/

    // Estrutura para armazenar os detalhes de um título
    struct DetalhesTitulo {
        uint256 id; // ID interno autoincrementado para cada título
        uint256 idExterno; // ID externo fornecido pelo usuário ou sistema externo
        string nome; // Nome do título
        uint256 dataVencimento; // Data de vencimento do título como timestamp
        uint256 rentabilidadeAnual; // Rentabilidade anual em pontos base
        uint256 valorNominal; // Valor do título em centavos para evitar decimais
        uint256 taxaB3; // Custo - Taxa da B3 em pontos base
        uint256 aliquotaIR; // Custo - IR previsto sobre o rendimento em pontos base
        bool isentoIOF; // Isenção de IOF após 30 dias
    }

    // Evento emitido quando um novo título é criado
    event TituloCriado(uint256 indexed idTitulo, DetalhesTitulo detalhes);

    // Variável para manter o último ID utilizado
    uint256 private _ultimoId = 0; 

    // Função para criar um novo título, restrita ao dono do contrato
    function criarTitulo(
        uint256 idExterno,
        string memory nome,
        uint256 dataVencimento,
        uint256 rentabilidadeAnual,
        uint256 valorNominal,
        uint256 taxaB3,
        uint256 aliquotaIR,
        bool isentoIOF
    ) public onlyOwner 
    {
        _ultimoId++;

        DetalhesTitulo memory novoTitulo = DetalhesTitulo({
            id: _ultimoId,
            idExterno: idExterno,
            nome: nome,
            dataVencimento: dataVencimento,
            rentabilidadeAnual: rentabilidadeAnual,
            valorNominal: valorNominal,
            taxaB3: taxaB3,
            aliquotaIR: aliquotaIR,
            isentoIOF: isentoIOF
        });

        detalhesTitulos[_ultimoId] = novoTitulo;

        emit TituloCriado(_ultimoId, novoTitulo);
    }



    /*************************************************/
    /********* NÚMERO DE TÍTULOS CRIADOS *************/
    /*************************************************/

    // Função para obter o número total de títulos emitidos
    function getTotalTitulos() public view returns (uint256) 
    {
        return _ultimoId;
    }



    /****************************************************/
    /********* DETALHES DE UM TÍTULO CRIADO *************/
    /****************************************************/

    // Mapeamento de um ID de título para seus detalhes
    mapping(uint256 => DetalhesTitulo) public detalhesTitulos;

    // Função para visualizar os detalhes de um título por ID
    function getDetalhesTitulo(uint256 idTitulo) public view returns (
        uint256 id,
        uint256 idExterno,
        string memory nome,
        uint256 dataVencimento,
        uint256 rentabilidadeAnual,
        uint256 valorNominal,
        uint256 taxaB3,
        uint256 aliquotaIR,
        bool isentoIOF
    ) {
        require(idTitulo > 0 && idTitulo <= _ultimoId, "ID de titulo invalido.");
        DetalhesTitulo memory titulo = detalhesTitulos[idTitulo];
        return (
            titulo.id,
            titulo.idExterno,
            titulo.nome,
            titulo.dataVencimento,
            titulo.rentabilidadeAnual,
            titulo.valorNominal,
            titulo.taxaB3,
            titulo.aliquotaIR,
            titulo.isentoIOF
        );
    }


    /***********************************************************/
    /********* EMISSÃO DE TÍTULO PARA UM COMPRADOR *************/
    /***********************************************************/

    // Evento emitido quando um título é emitido para um detentor
    event TituloEmitido(address indexed detentor, uint256 idTitulo, uint256 quantidade);

    // Mapeamento do endereço do detentor para a lista de IDs de títulos que ele possui
    mapping(address => mapping(uint256 => uint256)) public titulosDetentor;

    // Função para emitir um título já criado para um detentor específico com quantidade e valor fracionado
    function emitirTitulo(
        uint256 idTitulo,
        address detentor,
        uint256 quantidade
    ) public onlyOwner {
        require(detalhesTitulos[idTitulo].id != 0, "Titulo nao existe.");
        require(quantidade > 0, "Quantidade deve ser maior que 0.");

        // Adiciona a quantidade de títulos ao registro do detentor
        // Isso pode ser um novo mapeamento que associa o detentor e o ID do título à quantidade detida
        titulosDetentor[detentor][idTitulo] += quantidade;

        emit TituloEmitido(detentor, idTitulo, quantidade);

    }

    /******************************************************/
    /********* QTD DE TÍTULOS DE UM DETENTOR **************/
    /******************************************************/

    function getQuantidadeTitulos(address detentor, uint256 idTitulo) public view returns (uint256) {
        return titulosDetentor[detentor][idTitulo];
    }


    /******************************************/
    /********* TRANSFERIR TÍTULO **************/
    /******************************************/

    function transferirTitulo(
    address detentorOrigem,
    address detentorDestino,
    uint256 idTitulo,
    uint256 quantidade
    ) public {
        
        require(msg.sender == detentorOrigem || msg.sender == owner(), "Remetente nao tem permissao para transferir o titulo.");

        titulosDetentor[detentorOrigem][idTitulo] -= quantidade;
        titulosDetentor[detentorDestino][idTitulo] += quantidade;

        // Emitir evento de transferência (opcional, mas recomendado)
        emit TituloTransferido(detentorOrigem, detentorDestino, idTitulo, quantidade);
    }

    // Evento para registrar a transferência de títulos
    event TituloTransferido(address indexed detentorOrigem, address indexed detentorDestino, uint256 idTitulo, uint256 quantidade);


    

    /******************************************/
    /********* RESGATAR TÍTULO **************/
    /******************************************/

    function resgatarTitulo(uint256 idTitulo) public {

        DetalhesTitulo storage titulo = detalhesTitulos[idTitulo];

        require(titulo.id != 0, "Titulo nao existe.");
        //require(block.timestamp >= titulo.dataVencimento, "Titulo ainda nao venceu.");
        
        uint256 quantidadeDetentor = titulosDetentor[msg.sender][idTitulo];
        require(quantidadeDetentor > 0, "Detentor nao possui titulos deste tipo.");

        // Calcula o valor total a ser pago com base na rentabilidade anual e no valor nominal
        uint256 valorTotalPago = (quantidadeDetentor * titulo.valorNominal * (10000 + titulo.rentabilidadeAnual)) / 10000;

        // Recolhe os títulos da carteira do detentor
        titulosDetentor[msg.sender][idTitulo] = 0;

        // Envia BNB ao detentor (assumindo que o contrato tem saldo suficiente)
        payable(msg.sender).transfer(valorTotalPago);

        // Emitir evento de resgate do título
        emit TituloResgatado(idTitulo, msg.sender, quantidadeDetentor, valorTotalPago);

        // Remove o título da lista de títulos ativos se todos foram resgatados
        if (getQuantidadeTitulos(msg.sender, idTitulo) == 0) {
            delete detalhesTitulos[idTitulo];
        }

    }

    // Evento emitido quando um título é resgatado e o pagamento é feito
    event TituloResgatado(uint256 indexed idTitulo, address indexed detentor, uint256 quantidade, uint256 valorPago);

}
