@include('../layouts.header')
<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
    <div id="kt_content_container" class="container-xxl">


        <!--begin::Row-->
        <div class="row gy-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-xxl-4">
                <!--begin::List Widget 9-->
                <div class="card card-xxl-stretch">
                    <!--begin::Header-->
                    <div class="card-header align-items-center border-0 mt-3">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="fw-bolder text-dark fs-3">Valores de Referência</span>
                            <span class="text-gray-400 mt-2 fw-bold fs-6">Performance do Ativo</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <!--begin::Item-->
                        <div class="d-flex mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
                                <img src="{{ url ('assets/imagens/BitCoin.png') }}" alt="image">
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                                <!--begin::Title-->
                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">{{$titulos['data']['titulo']}}</a>
                                    <span class="text-gray-400 fw-bold fs-7 my-1">{{$titulos['data']['descricao']}}</span>
                                    <span class="text-gray-400 fw-bold fs-7">Sigla:
                                        <a href="#" class="text-primary fw-bold">{{$titulos['data']['sigla']}}</a></span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Info-->
                                <div class="text-end py-lg-0 py-2">
                                    <span class="text-gray-800 fw-boldest fs-3">R$ {{ last($prices)}}</span>
                                    <span class="text-gray-400 fs-7 fw-bold d-block">Venda</span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 9-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xxl-8">
                <!--begin::Tables Widget 9-->
                <div class="card card-xxl-stretch mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">Preço de Mercado</span>
                            <span class="text-muted mt-1 fw-bold fs-7">Valores atualizados</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="table-responsive">
                        <div id="kt_chart_order_statistics" class="card-chart">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Preço do Bitcoin
                                </h3>
                            </div>
                            <div class="card-body">
                                <div id="kt_chart_order_statistics_chart" style="height: 200px;"></div>
                            </div>
                            @include('../painel.titulos.js') <!-- Certifique-se de incluir este arquivo se necessário -->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--begin::Body-->
                </div>
                <!--end::Tables Widget 9-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->

    </div>
</div>
<!-- Inclua isso no cabeçalho da sua página ou layout -->
<script src="{{ asset('caminho-para-o-metronic/js/plugins/custom/apexcharts.bundle.js') }}"></script>
<script src="{{ asset('caminho-para-o-metronic/js/plugins/custom/line-series.js') }}"></script>

@include('../layouts.footer')