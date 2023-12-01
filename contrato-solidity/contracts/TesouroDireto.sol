// SPDX-License-Identifier: MIT
pragma solidity ^0.8.19;

import "@openzeppelin/contracts/token/ERC20/ERC20.sol";
import "@openzeppelin/contracts/access/Ownable.sol";
import "@openzeppelin/contracts/security/ReentrancyGuard.sol";

contract TesouroDireto is ERC20, Ownable, ReentrancyGuard {

    
    constructor(
        string memory name, 
        string memory symbol, 
        address initialOwner
        )
        ERC20(name, symbol)
        Ownable(initialOwner) /// Endereço do proprietário do Contrato
    {
        
    }

/*****************************************************************************************************/
/********* PARTE 1 - LIQUIDEZ

    /*************************************************************/
    /********* RESGATAR BNB DA CARTEIRA DE LIQUIDEZ **************/
    /*************************************************************/

    // Variável para rastrear o saldo da carteira de liquidez
    uint256 public saldoCarteiraLiquidez;

    function moverBNBsDaLiquidez(address destino, uint256 valor) public onlyAuthorized nonReentrant {
        require(saldoCarteiraLiquidez >= valor, "Saldo insuficiente na carteira de liquidez");
        saldoCarteiraLiquidez -= valor;
        payable(destino).transfer(valor);
    }

    ///Vê o saldo de BNB do contrato
    function getSaldoTotal() public view returns (uint256) {
        return address(this).balance;
    }

/*****************************************************************************************************/
/********* PARTE 2 - TÍTULO

    /***************************************************/
    /********* CRIAÇÃO DOS DETALHES TÍTULO *************/
    /***************************************************/

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
/********* PARTE 3 - EMISSÃO


    /**********************************************************************/
    /********* LISTA DE CARTEIRAS AUTORIZADAS A EMITIR TÍTULO *************/
    /**********************************************************************/

    // Mapeamento que armazena se uma carteira está autorizada
    mapping(address => bool) public carteirasAutorizadas;

    // Modificador para usar lista de carteiras autorizadas
    modifier onlyAuthorized() {
        require(carteirasAutorizadas[msg.sender], "Apenas carteiras autorizadas podem executar esta funcao");
        _; // Isso indica que o código da função chamada será executado após a verificação do modificador
    }

    // Estrutura para lista
    struct CarteiraAutorizada {
        address carteira;
        bool autorizada;
    }

    // Array de structs para armazenar as carteiras autorizadas
    CarteiraAutorizada[] public carteirasAutorizadasList;

    // Evento para notificar quando uma carteira é adicionada à lista de autorizações
    event CarteiraAutorizadaAdicionada(address carteira, bool autorizada);

    // Função para adicionar ou remover endereços autorizados
    function setCarteiraAutorizada(address carteira, bool autorizada) public onlyOwner {
        carteirasAutorizadas[carteira] = autorizada;
        carteirasAutorizadasList.push(CarteiraAutorizada(carteira, autorizada));
        emit CarteiraAutorizadaAdicionada(carteira, autorizada);
    }

    // Função para obter todas as carteiras autorizadas
    function getEnderecosAutorizados() public view returns (address[] memory) {

      uint256 length = carteirasAutorizadasList.length;
      address[] memory enderecosAutorizados = new address[](length);

      for (uint256 i = 0; i < length; i++) {
        enderecosAutorizados[i] = carteirasAutorizadasList[i].carteira;
      }

      return enderecosAutorizados;

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
    ) public onlyAuthorized {

      require(detalhesTitulos[idTitulo].idExterno != 0, "Titulo nao existe.");
      require(quantidade > 0, "Quantidade deve ser maior que 0.");
      require(carteirasAutorizadas[msg.sender], "Carteira nao autorizada a emitir titulos.");

      // Adiciona a quantidade de títulos ao registro do detentor
      // Isso pode ser um novo mapeamento que associa o detentor e o ID do título à quantidade detida
      titulosDetentor[detentor][idTitulo] += quantidade;

      //Enviar a quantidade para o detentor
      _mint(detentor, quantidade);

      emit TituloEmitido(detentor, idTitulo, quantidade);

    }
    

    /******************************************************/
    /********* QTD DE TÍTULOS DE UM DETENTOR **************/
    /******************************************************/
    
    function getQtdTitulosDetentor(address detentor, uint256 idTitulo) public view returns (uint256) {
        return titulosDetentor[detentor][idTitulo];
    }


/*****************************************************************************************************/
/********* PARTE 4 - COMPRA MERCADO SECUNDÁRIO

    /******************************************/
    /********* DEPÓSITO ANTECIPADO ************/
    /******************************************/
    
    // Mapeamento para rastrear depósitos de BNB
    mapping(address => uint256) public depositos;

    // Função para o detentor de destino depositar BNB no Contrato
    function depositarParaCompra(uint256 valor) public payable {
      require(valor > 0, "Nenhum valor de BNB enviado.");
      require(msg.value >= valor, "Valor enviado insuficiente.");
      depositos[msg.sender] += valor;

      emit DepositoEfetuado(msg.sender, msg.value);
    }

    event DepositoEfetuado(address indexed detentorDestino, uint256 valor);


    /******************************************/
    /********* TRANSFERIR TÍTULO **************/
    /******************************************/
    function comprar(
    address detentorOrigem,
    address detentorDestino,
    uint256 idTitulo,
    uint256 quantidade,
    uint256 valor
    ) public payable nonReentrant {

        // Verifica se o remetente da mensagem é o proprietário do contrato
        require(msg.sender == detentorDestino, "Somente o detentor de destino pode comprar.");

        // Verifica se o detentor de origem possui quantidade suficiente do título
        require(titulosDetentor[detentorOrigem][idTitulo] >= quantidade, "Detentor de origem nao possui quantidade suficiente do titulo.");

        //Depositar BNB no contrato
        depositarParaCompra(valor);

        // Verifica se o detentor de destino depositou BNB suficiente
        require(depositos[detentorDestino] >= valor, "Saldo de deposito insuficiente.");

        // Atualiza o saldo de títulos dos detentores //OK
        titulosDetentor[detentorOrigem][idTitulo] -= quantidade;
        titulosDetentor[detentorDestino][idTitulo] += quantidade;

        // Deduza os tokens do detentor de origem e Adicione os tokens ao detentor de destino
        _transfer(detentorOrigem, detentorDestino, quantidade);

        /********* LIQUIDEZ **************/

        // Calcula a taxa de Liquidez 2%
        uint256 taxa = valor * 2 / 100;

        ///Enviando Saldo para a carteira de liquidez
        saldoCarteiraLiquidez += taxa;

        // Valor a ser transferido para o detentor de origem (valor menos a taxa)
        uint256 valorTransferencia = valor - taxa;

        /********* PAGAMENTO AO DETENTOR DE ORIGEM **************/

        // Transferir BNB para o detentor de origem já com desconto de 2%
        payable(detentorOrigem).transfer(valorTransferencia);

        // Atualiza o saldo de depósito do detentor de destino
        depositos[detentorDestino] -= valor;

    }

}
