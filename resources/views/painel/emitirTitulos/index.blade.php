@include('../layout.header')

<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
    <div id="kt_content_container" class="container-xxl">
        <div class="g-5 gx-xxl-8">

            <div class="card mb-5 mb-xl-8">

                <div class="card-header border-0 pt-5">
                    <span class="card-label fw-bolder fs-3 mb-1">Emissão de Títulos</span>
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

                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-2" style="font-size: 13px;">

                            <thead>
                                <tr class="fw-bolder text-muted bg-secondary">
                                    <th class="min-w-125px ps-2 rounded-start">nome</th>
                                    <th class="min-w-125px">Data de Vencimento</th>
                                    <th class="min-w-125px">Rentabilidade Anual</th>
                                    <th class="min-w-125px">Valor Nominal</th>
                                    <th class="min-w-125px">Alíquota IR</th>
                                    <th class="min-w-125px">Taxa B3</th>
                                    <th class="min-w-125px">Isenção IOF</th>
                                    <th class="min-w-125px rounded-end"></th>
                                </tr>
                            </thead>

                            <tbody>
                                @if (count($titulos)>0)
                                @foreach ($titulos as $titulo)
                                    <tr>
                                        <td>{{$titulo->nome}}</td>
                                        <td>{{$titulo->dataVencimento}}</td>
                                        <td>{{$titulo->rentabilidadeAnual}}%</td>
                                        <td>{{$titulo->valorNominal}}</td>
                                        <td>{{$titulo->aliquotaIR}}</td>
                                        <td>{{$titulo->taxa_b3}}</td>
                                        <td>{{$titulo->isentoIOF}}</td>
                                        <td class="text-end">
                                            <a href="{{route('emitirTitulo.index')}}"  class="btn btn-sm btn-success">
                                            <i class="fas fa-solid fa-file-contract fs-3"></i>
                                                Emitir Título
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                                @else
                                    <tr>
                                        <td>Nenhum Título Emitido</td>
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

@include('../layout.footer')
