@include('../layout.header')
<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
    <div id="kt_content_container" class="container-xxl">
        <div class="g-5 gx-xxl-8">

            <div class="card mb-5 mb-xl-8">

                <div class="card-header border-0 pt-5">
                    <span class="card-label fw-bolder fs-3 mb-1">Emitir Título</span>
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
                            <div class="row pb-3">
                                <div class="col-sm">
                                    <div class="col-4">
                                        <span class="text-dark fs-4">Id Externo</span>
                                        <input class="form-control form-control-solid" type="text" name="idExterno" >
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3 pb-3">
                                <div class="col-sm">
                                    <div class="col-4">
                                        <span class="text-dark fs-4">Carteira Destino</span>
                                        <input class="form-control form-control-solid" type="text" name="carteira_destino">
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-sm">
                                    <div class="col-4">
                                        <span class="text-dark fs-4">quatidade</span>
                                        <input class="form-control form-control-solid" type="text" name="quantidade">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex justify-content-end p-3">
                                <button type="submit" class="btn btn-success">Emitir</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>


            </div>
    </div>
</div>

@include('../layout.footer')
