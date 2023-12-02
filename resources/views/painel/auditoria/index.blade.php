@include('../layout.header')

<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
    <div id="kt_content_container" class="container-xxl">

        <div class="card">
            <div class="card-body pt-0">
                <br>
                <form class="form-inline" method="post" action="{{route('auditoria.index')}}">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-5">
                                <input type="text" class="form-control mb-2 mr-sm-2" id="carteira_origem" name="carteira_origem" placeholder="Carteira de Origem" value="{{$carteira_origem}}">
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control mb-2 mr-sm-2" id="carteira_destino" name="carteira_destino" placeholder="Carteira de Destino" value="{{$carteira_destino}}">
                            </div>
                            <div class="col-1 align-items-center">
                            </div>
                            <div class="col-1 align-items-center">
                                <button type="submit" class="btn btn-primary mb-2">Auditar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <br>
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">

                <!--begin::Card body-->
                <div class="card-body pt-0">
                    @isset($carteira_origem)
                    <p><strong>Auditoria da Carteira de Origem:</strong> {{$carteira_origem}}</p>
                    @endisset
                    @isset($carteira_destino)
                    <p><strong>Auditoria da Carteira de Destino:</strong> {{$carteira_destino}}</p>
                    @endisset
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-125px">Título</th>
                                <th class="min-w-125px">Data</th>
                                <th class="min-w-125px">Carteira de Origem</th>
                                <th class="min-w-125px">Carteira de Destino</th>
                                <th class="min-w-125px">Transação</th>
                                <th class="min-w-125px">Valor</th>
                                <th class="text-end min-w-70px">Quantidade</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            @foreach($mercados as $mercado)
                            <tr>
                                <!--begin::Name=-->
                                <td>
                                    {{$mercado->titulo->titulo}}
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    {{$mercado->data_hora}}
                                </td>
                                <!--end::Email=-->
                                <!--begin::Company=-->
                                <td> {{$mercado->carteira_origem}}
                                </td>
                                <!--end::Company=-->
                                <!--begin::Date=-->
                                <td> {{$mercado->carteira_destino}}</td>
                                <!--end::Date=-->
                                <!--begin::Date=-->
                                <td>#</td>
                                <!--end::Date=-->
                                <!--begin::Date=-->
                                <td> {{$mercado->valor_unitario}}</td>
                                <!--end::Date=-->
                                <!--begin::Date=-->
                                <td> {{$mercado->quantidade}}</td>
                                <!--end::Date=-->
                            </tr>
                            @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
    </div>
</div>

@include('../layout.footer')
