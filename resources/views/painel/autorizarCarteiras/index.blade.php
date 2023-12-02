@include('../layout.header')

<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
    <div id="kt_content_container" class="container-xxl">
        <div class="g-5 gx-xxl-8">

            <div class="card mb-5 mb-xl-8">

                <div class="card-header border-0 pt-5">
                    <span class="card-label fw-bolder fs-3 mb-1">Autorizar Carteira</span>
                    <div class="p-3">
                        <td class="text-end">
                            <a href="{{route('home.index')}}"  class="btn btn-sm btn-light-primary">
                                Voltar
                            </a>
                        </td>
                    </div>
                </div>

                <div class="card-body py-3">
                    <div class="table-responsive">

                    <!-- <form action="{{route('autorizarCateira.store')}}" method="post">
                        @csrf -->
                        <div class="form-row p-3">
                            <div class="row">
                                <div class="col-sm row ">
                                    <div class="col-4">
                                        <span class="text-dark fs-4">Endereço da Carteira</span>
                                        <input class="form-control form-control-solid" type="text" id="carteira" name="carteira" >
                                        
                                    </div>
                                    <div class="d-flex col-2 align-self-center">
                                        <button type="submit" id="autorizar" class="btn btn-success">Autorizar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- </form> -->
                    </div>

                </div>
            </div>

            <div class="card mb-5 mb-xl-8">

                <div class="card-header border-0 pt-5">
                    <span class="card-label fw-bolder fs-3 mb-1">Carteiras Autorizadas</span>
                </div>

                <div class="card-body py-3">
                    <div class="table-responsive">

                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-2" style="font-size: 13px;">

                            <thead>
                                <tr class="fw-bolder text-muted bg-secondary">
                                    <th class="min-w-125px ps-2 rounded-start">Numero</th>
                                    <th class="min-w-125px">Endereço</th>
                                    <th class="min-w-125px rounded-end"></th>
                                </tr>
                            </thead>

                            <tbody>
                                @if (count($carteiras)>0)
                                @foreach ($carteiras as $carteira)
                                    <tr>
                                        <td class="ps-6">{{$carteira->id}}</td>
                                        <td>{{$carteira->carteira}}</td>
                                    </tr>
                                @endforeach

                                @else
                                    <tr>
                                        <td>Nenhuma Carteira Autorizada</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/web3.min.js') }}"></script>

<script>
    
    const  autorizar = document.getElementById('autorizar');
8
    let web3;
    let contract;
    let accounts;

    // Inicialize o Web3 quando a página for carregada
    window.addEventListener('load', async () => {
        if (window.ethereum) {
            web3 = new Web3(window.ethereum);

            const contractABI = '[{"inputs":[{"internalType":"string","name":"name","type":"string"},{"internalType":"string","name":"symbol","type":"string"},{"internalType":"address","name":"initialOwner","type":"address"}],"stateMutability":"nonpayable","type":"constructor"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"allowance","type":"uint256"},{"internalType":"uint256","name":"needed","type":"uint256"}],"name":"ERC20InsufficientAllowance","type":"error"},{"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"uint256","name":"balance","type":"uint256"},{"internalType":"uint256","name":"needed","type":"uint256"}],"name":"ERC20InsufficientBalance","type":"error"},{"inputs":[{"internalType":"address","name":"approver","type":"address"}],"name":"ERC20InvalidApprover","type":"error"},{"inputs":[{"internalType":"address","name":"receiver","type":"address"}],"name":"ERC20InvalidReceiver","type":"error"},{"inputs":[{"internalType":"address","name":"sender","type":"address"}],"name":"ERC20InvalidSender","type":"error"},{"inputs":[{"internalType":"address","name":"spender","type":"address"}],"name":"ERC20InvalidSpender","type":"error"},{"inputs":[{"internalType":"address","name":"owner","type":"address"}],"name":"OwnableInvalidOwner","type":"error"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"OwnableUnauthorizedAccount","type":"error"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"address","name":"carteira","type":"address"},{"indexed":false,"internalType":"bool","name":"autorizada","type":"bool"}],"name":"CarteiraAutorizadaAdicionada","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"detentorDestino","type":"address"},{"indexed":false,"internalType":"uint256","name":"valor","type":"uint256"}],"name":"DepositoEfetuado","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"address","name":"sender","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"}],"name":"DepositoNoContrato","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"uint256","name":"idTitulo","type":"uint256"},{"components":[{"internalType":"uint256","name":"idExterno","type":"uint256"},{"internalType":"string","name":"dados_titulo","type":"string"}],"indexed":false,"internalType":"struct TesouroDireto.DetalhesTitulo","name":"detalhes","type":"tuple"}],"name":"DetalhesTituloCriado","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"detentor","type":"address"},{"indexed":false,"internalType":"uint256","name":"idTitulo","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"quantidade","type":"uint256"}],"name":"TituloEmitido","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"inputs":[{"internalType":"address","name":"_address","type":"address"}],"name":"addToBlacklist","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"carteirasAutorizadas","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"","type":"uint256"}],"name":"carteirasAutorizadasList","outputs":[{"internalType":"address","name":"carteira","type":"address"},{"internalType":"bool","name":"autorizada","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"detentorOrigem","type":"address"},{"internalType":"address","name":"detentorDestino","type":"address"},{"internalType":"uint256","name":"idTitulo","type":"uint256"},{"internalType":"uint256","name":"quantidade","type":"uint256"},{"internalType":"uint256","name":"valor","type":"uint256"}],"name":"comprar","outputs":[],"stateMutability":"payable","type":"function"},{"inputs":[{"internalType":"uint256","name":"idExterno","type":"uint256"},{"internalType":"string","name":"dados_titulo","type":"string"}],"name":"criarDetalhesTitulo","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"depositarNoContrato","outputs":[],"stateMutability":"payable","type":"function"},{"inputs":[{"internalType":"uint256","name":"valor","type":"uint256"}],"name":"depositarParaCompra","outputs":[],"stateMutability":"payable","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"depositos","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"","type":"uint256"}],"name":"detalhesTitulos","outputs":[{"internalType":"uint256","name":"idExterno","type":"uint256"},{"internalType":"string","name":"dados_titulo","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"idTitulo","type":"uint256"},{"internalType":"address","name":"detentor","type":"address"},{"internalType":"uint256","name":"quantidade","type":"uint256"}],"name":"emitirTitulo","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"idTitulo","type":"uint256"}],"name":"getDetalhesTituloCriado","outputs":[{"internalType":"uint256","name":"idExterno","type":"uint256"},{"internalType":"string","name":"dados_titulo","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"getEnderecosAutorizados","outputs":[{"internalType":"address[]","name":"","type":"address[]"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"detentor","type":"address"},{"internalType":"uint256","name":"idTitulo","type":"uint256"}],"name":"getQtdTitulosDetentor","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"getSaldoTotal","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"destino","type":"address"},{"internalType":"uint256","name":"valor","type":"uint256"}],"name":"moverBNBsDaLiquidez","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"_address","type":"address"}],"name":"removeFromBlacklist","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"renounceOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"idTitulo","type":"uint256"},{"internalType":"address","name":"detentor","type":"address"},{"internalType":"uint256","name":"valor","type":"uint256"}],"name":"resgatar","outputs":[],"stateMutability":"payable","type":"function"},{"inputs":[],"name":"saldoCarteiraLiquidez","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"carteira","type":"address"},{"internalType":"bool","name":"autorizada","type":"bool"}],"name":"setCarteiraAutorizada","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"},{"internalType":"uint256","name":"","type":"uint256"}],"name":"titulosDetentor","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"from","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"}]';
            const contractAddress = "0x4252947557f38cD7A9D5a52a0eB38C7AA3Bc3440";
            contract = new web3.eth.Contract(JSON.parse(contractABI), contractAddress);
            
            try {
                accounts = await ethereum.request({ method: 'eth_accounts' });
                if (accounts && accounts.length > 0) {
                    // Conta já conectada
                    
                    // connectButton.classList.add('connected');
                    // connectButton.textContent = 'Carteira Conectada';
                    // connectButton.className = 'btn btn-sm btn-light-success';
                    getBalance(accounts[0]);
                }
            } catch (error) {
                console.error('Erro ao verificar contas:', error);
            }
            
        } else {
            alert('MetaMask não encontrado');
        }
    });

    // connectButton.addEventListener('click', () => {
    //     if (window.ethereum) {
    //         window.ethereum.request({ method: 'eth_requestAccounts' })
    //             .then(accounts => {
    //                 if (accounts.length > 0) {
    //                     connectButton.classList.add('connected');
    //                     connectButton.textContent = 'Carteira Conectada';
    //                     connectButton.className = 'btn btn-sm btn-light-success';
    //                     getBalance(accounts[0]);
    //                 } else {
    //                     connectButton.classList.remove('connected');
    //                     connectButton.textContent = 'Conectar na Carteira';
    //                 }
    //             })
    //             .catch(error => {
    //                 console.error('Erro ao conectar na carteira:', error);
    //                 connectButton.classList.remove('connected');
    //                 connectButton.textContent = 'Conectar na Carteira';
    //             });
    //     } else {
    //         alert('MetaMask não encontrado');
    //     }
    // });

    function getBalance(account) {
        web3.eth.getBalance(account)
            .then(balance => {
                // balanceElement.textContent = `Saldo BNB: ${web3.utils.fromWei(balance, 'ether')}`;
            })
            .catch(error => console.error(error));
    }

    

    autorizar.addEventListener('click', () => {
        const carteira = document.getElementById('carteira').value;
        const autorizada = true;
        contract.methods.setCarteiraAutorizada(carteira, autorizada).send({ from: accounts[0] })
            .then(response => {
                contractResponseElement.textContent = `Resposta do Contrato: ${response.name}, Idade: ${response.age}`;
            })
            .catch(error => {
                console.error('Erro ao consultar o contrato:', error);
                contractResponseElement.textContent = 'Erro ao consultar o contrato';
            });
    });


</script>
@include('../layout.footer')
