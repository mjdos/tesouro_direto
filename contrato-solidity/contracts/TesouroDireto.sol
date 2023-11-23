// SPDX-License-Identifier: MIT
pragma solidity ^0.8.7;

import "@openzeppelin/contracts/token/ERC20/ERC20.sol";
import "@openzeppelin/contracts/access/Ownable.sol";

contract TesouroDireto is ERC20, Ownable {

    
    constructor(string memory name, string memory symbol, address initialOwner)
        ERC20(name, symbol)
        Ownable(initialOwner) /// Endereço do proprietário do Contrato
    {
        
    }


/*****************************************************************************************************/
/********* PARTE 1 - TÍTULO

    /*****************************************/
    /********* CRIAÇÃO DE TÍTULO *************/
    /*****************************************/

    // Estrutura para armazenar os detalhes de um título
    struct DetalhesTitulo {
        uint256 idExterno; // ID interno autoincrementado para cada título
        string dados_titulo; // JSON com os dados do título
    }

    // Evento para registrar na blockchain quando um novo título é criado
    event DetalhesTituloCriado(uint256 indexed idTitulo, DetalhesTitulo detalhes);

    // Função para criar um novo título, restrita ao dono do contrato
    function criarDetalhesTitulo(
        uint256 idExterno,
        string memory dados_titulo
    ) public onlyOwner 
    {
        
        ///Após criado os detalhes se torna imutavel
        require(bytes(detalhesTitulos[idExterno].dados_titulo).length == 0, "Detalhes do titulo ja foram definidos.");

        DetalhesTitulo memory novoTitulo = DetalhesTitulo({
            idExterno: idExterno,
            dados_titulo: dados_titulo
        });

        detalhesTitulos[idExterno] = novoTitulo;

        emit DetalhesTituloCriado(idExterno, novoTitulo);
    }



    /****************************************************/
    /********* DETALHES DE UM TÍTULO CRIADO *************/
    /****************************************************/

    // Mapeamento de um ID de título para seus detalhes
    mapping(uint256 => DetalhesTitulo) public detalhesTitulos;

    // Função para visualizar os detalhes de um título por ID
    function getDetalhesTituloCriado(uint256 idTitulo) public view returns (
        uint256 idExterno,
        string memory dados_titulo
    ) {
        
        DetalhesTitulo memory titulo = detalhesTitulos[idTitulo];

        require(titulo.idExterno > 0, "Detalhes nao encontrados para o ID de titulo fornecido.");

        return (
            titulo.idExterno,
            titulo.dados_titulo
        );
    }



/*****************************************************************************************************/
/********* PARTE 2 - EMISSÃO



    /***********************************************************/
    /********* EMISSÃO DE TÍTULO PARA UM COMPRADOR *************/
    /***********************************************************/
    /*
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
        _mint(detentor, quantidade);
        emit TituloEmitido(detentor, idTitulo, quantidade);

    }
    */
    /******************************************************/
    /********* QTD DE TÍTULOS DE UM DETENTOR **************/
    /******************************************************/
    /*
    function getQuantidadeTitulos(address detentor, uint256 idTitulo) public view returns (uint256) {
        return titulosDetentor[detentor][idTitulo];
    }


    /******************************************/
    /********* TRANSFERIR TÍTULO **************/
    /******************************************/
    /*
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
    */

    

    /******************************************/
    /********* RESGATAR TÍTULO **************/
    /******************************************/
    /*
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
    */
}
