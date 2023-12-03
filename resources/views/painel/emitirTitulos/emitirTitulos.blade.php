@include('../layout.header')
<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
    <div id="kt_content_container" class="container-xxl">
        <div class="g-5 gx-xxl-8">

            <div class="card mb-5 mb-xl-8">

                <div class="card-header border-0 pt-5">
                    <div class="p-3">
                        <span class="card-label fw-bolder fs-3 mb-1">Emitir Título</span>
                        
                    </div>
                    <div class="p-3">
                        <td class="text-end">
                            <a href="{{route('emitirTitulos.index')}}"  class="btn btn-sm btn-primary">
                                Voltar
                            </a>
                        </td>
                    </div>
                </div>

                <div class="card-body py-3">
                    <form action="{{route('emitirTitulos.store')}}" method="post">
                        @csrf
                        <div class="form-row p-3">
                        <input type="hidden" id="walletAddress" name="walletAddress">
                            <div class="row pb-3">
                                <div class="col-sm">
                                    <div class="col-4">
                                        <span class="text-dark fs-4">Id Externo</span>
                                        <input class="form-control form-control-solid" type="text" name="idExterno" id="idExterno" >
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3 pb-3">
                                <div class="col-sm">
                                    <div class="col-4">
                                        <span class="text-dark fs-4">Carteira Destino</span>
                                        <input class="form-control form-control-solid" type="text" name="carteiraDestino" id="carteiraDestino">
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-sm">
                                    <div class="col-4">
                                        <span class="text-dark fs-4">Quantidade</span>
                                        <input class="form-control form-control-solid" type="text" name="quantidade" id="quantidade">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex justify-content-end p-3">
                                <button id="emitirButton" class="btn btn-success">Emitir</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>


            </div>
    </div>
</div>

<script>
    const emitirButton = document.getElementById('emitirButton');    
    document.getElementById('walletAddress').value = accounts;
    
    emitirButton.addEventListener('click', () => {
        const idExterno = document.getElementById('idExterno').value;
        const carteiraDestino = document.getElementById('carteiraDestino').value;
        const quantidade = document.getElementById('quantidade').value;
        const valorComZeros = quantidade * Math.pow(10, 18);

        contract.methods.emitirTitulo(idExterno, carteiraDestino, valorComZeros).send({ from: accounts[0] })
            .then(response => {
                // contractResponseElement.textContent = `Resposta do Contrato: ${response.name}, Idade: ${response.age}`;
            })
            .catch(error => {
                console.error('Erro ao consultar o contrato:', error);
                contractResponseElement.textContent = 'Erro ao consultar o contrato';
            });
    });


</script>
@include('../layout.footer')