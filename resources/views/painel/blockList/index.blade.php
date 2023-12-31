@include('../layout.header')

<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
    <div id="kt_content_container" class="container-xxl">
        <div class="g-5 gx-xxl-8">

        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <span class="card-label fw-bolder fs-3 mb-1">Bloquear Carteira</span>
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

                    <form action="{{route('blockListCateira.store')}}" method="post">
                        @csrf
                        <div class="form-row p-3">
                            <div class="row">
                                <div class="col-sm row ">
                                    <div class="col-4">
                                        <span class="text-dark fs-4">Endereço da Carteira</span>
                                        <input class="form-control form-control-solid" type="text" name="carteira" id="carteira" >
                                        
                                    </div>
                                    <div class="d-flex col-2 align-self-center">
                                        <button type="submit" id="bloquear" class="btn btn-danger">Bloquear</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>

                </div>
        </div>

            <div class="card mb-5 mb-xl-8">

                <div class="card-header border-0 pt-5">
                    <span class="card-label fw-bolder fs-3 mb-1">Carteiras Bloqueadas</span>
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
                                @if (count($carteirasBloqueadas)>0)
                                @foreach ($carteirasBloqueadas as $carteirasBloqueada)
                                    <tr>
                                        <td>{{$carteirasBloqueada->id}}</td>
                                        <td>{{$carteirasBloqueada->carteira}}</td>
                                        <td class="text-end">
                                            <a class="btn btn-sm btn-success"  id="liberar">
                                            <i class="fas fa-solid fa-file-contract fs-3"></i>
                                                <input type="hidden" id="idCarteira" value="{{$carteirasBloqueada->id}}">
                                                <input type="hidden" id="liberarCarteira" value="{{$carteirasBloqueada->carteira}}">
                                                Liberar Carteira
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                                @else
                                    <tr>
                                        <td>Nenhuma Carteira Bloqueada</td>
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

<script>
    const  bloquear = document.getElementById('bloquear');
    const  liberar = document.getElementById('liberar');

    bloquear.addEventListener('click', () => {
        const carteira = document.getElementById('carteira').value;
        
        contract.methods.addToBlacklist(carteira).send({ from: accounts[0] })
            .then(response => {
            })
            .catch(error => {
                console.error('Erro ao consultar o contrato:', error);
                contractResponseElement.textContent = 'Erro ao consultar o contrato';
            });
    });

    liberar.addEventListener('click', () => {
        const carteira = document.getElementById('liberarCarteira').value;
        
        contract.methods.removeFromBlacklist(carteira).send({ from: accounts[0] })
            .then(response => {
            })
            .catch(error => {
                console.error('Erro ao consultar o contrato:', error);
                contractResponseElement.textContent = 'Erro ao consultar o contrato';
            });
    });
</script>
@include('../layout.footer')
