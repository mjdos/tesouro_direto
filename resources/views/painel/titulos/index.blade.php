@include('../layouts.header')

<div id="kt_content_container" class="container-xxl">
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                            <th class="min-w-125px">Título Nome</th>
                            <th class="min-w-125px">Sigla</th>
                            <th class="min-w-125px">Descrição</th>
                            <th class="min-w-125px">Data Abertura</th>
                            <th class="text-end min-w-70px">Ações</th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    @if(isset($error))
                    <p>{{ $error }}</p>
                    @else
                    <tbody class="fw-bold text-gray-600">
                        @foreach($titulos as $titulo)
                        <tr>
                            <!--begin::Name=-->
                            <td>
                                <a href="../../demo6/dist/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">{{$titulo->titulo}}</a>
                            </td>
                            <!--end::Name=-->
                            <!--begin::Email=-->
                            <td>
                                <a href="#" class="text-gray-600 text-hover-primary mb-1">{{$titulo->sigla}}</a>
                            </td>
                            <!--end::Email=-->
                            <!--begin::Company=-->
                            <td>{{$titulo->descricao}}</td>
                            <!--end::Company=-->
                            <!--begin::Date=-->
                            <td>{{$titulo->created_at}}</td>
                            <!--end::Date=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a class="btn btn-primary btn-sm" href="{{route('titulos.show',$titulo->id)}}" role="button">Visualizar</a>
                                <a class="btn btn-success btn-sm" href="{{route('titulos.comprar')}}" role="button">Comprar</a>
                            </td>
                            <!--end::Action=-->
                        </tr>
                        @endforeach

                    </tbody>
                    @endif
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
    </div>
</div>

@include('../layouts.footer')