@include('../layouts.header')

<div id="kt_content_container" class="container-fluid">
    <div class="row g-5 g-xl-8">
        <div div class="row gy-5 g-xl-8">
            <div class="col-3">
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
            </div>
            <div class="col-6">
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
            </div>
            <div class="col-3">
                <!--begin::Forms widget 1-->
                <div class="card card-xxl-stretch">
                    <!--begin::Header-->
                    <div class="card-header position-relative min-h-50px p-0 border-bottom-2">
                        <!--begin::Nav-->
                        <ul class="nav nav-pills nav-pills-custom d-flex position-relative w-100">
                            <!--begin::Item-->
                            <li class="nav-item mx-0 p-0 w-50">
                                <!--begin::Link-->
                                <a class="nav-link btn btn-color-muted active border-0 h-100 px-0" data-bs-toggle="pill" id="kt_forms_widget_1_tab_1" href="#kt_forms_widget_1_tab_content_1">
                                    <!--begin::Subtitle-->
                                    <span class="nav-text fw-bold fs-4 mb-3">
                                        Buy
                                    </span>

                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <li class="nav-item mx-0 px-0 w-50">
                                <!--begin::Link-->
                                <a class="nav-link btn btn-color-muted border-0 h-100 px-0" data-bs-toggle="pill" id="kt_forms_widget_1_tab_2" href="#kt_forms_widget_1_tab_content_2">
                                    <!--begin::Subtitle-->
                                    <span class="nav-text fw-bold fs-4 mb-3">
                                        Sell
                                    </span>

                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Nav-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Tab Content-->
                        <div class="tab-content">
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade active show" id="kt_forms_widget_1_tab_content_1">
                                <!--begin::Input group-->
                                <div class="form-floating border border-gray-300 rounded mb-7">
                                    <select class="form-select form-select-transparent" id="kt_forms_widget_1_select_1">
                                        <option>Selecione </option>
                                        <option value="0" data-kt-select2-icon="/metronic8/demo57/assets/media/svg/coins/bitcoin.svg" selected>Bitcoin/BTC</option>
                                        <option value="1" data-kt-select2-icon="/metronic8/demo57/assets/media/svg/coins/ethereum.svg">Ethereum/ETH</option>
                                        <option value="2" data-kt-select2-icon="/metronic8/demo57/assets/media/svg/coins/filecoin.svg">Filecoin/FLE</option>
                                        <option value="3" data-kt-select2-icon="/metronic8/demo57/assets/media/svg/coins/chainlink.svg">Chainlink/CIN</option>
                                        <option value="4" data-kt-select2-icon="/metronic8/demo57/assets/media/svg/coins/binance.svg">Binance/BCN</option>
                                    </select>
                                    <label for="floatingInputValue">Coin Name</label>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Row-->
                                <div class="row mb-7">
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Input group-->
                                        <div class="form-floating">
                                            <input type="email" class="form-control text-gray-800 fw-bold" placeholder="00.0" id="floatingInputValue" value="$230.00" />
                                            <label for="floatingInputValue">Amount(USD)</label>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Input group-->
                                        <div class="form-floating">
                                            <input type="email" class="form-control text-gray-800 fw-bold" placeholder="00.0" id="floatingInputValue" value="$0,00000032" />
                                            <label for="floatingInputValue">Amount(BTC)</label>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->

                                <!--begin::Action-->
                                <div class="d-flex align-items-end">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_top_up_wallet" class="btn btn-primary fs-3 w-100">Make Payment</a>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Tap pane-->

                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_forms_widget_1_tab_content_2">
                                <!--begin::Input group-->
                                <div class="form-floating border rounded mb-7">
                                    <select class="form-select form-select-transparent" id="kt_forms_widget_1_select_2">
                                        <option> </option>
                                        <option value="0" data-kt-select2-icon="/metronic8/demo57/assets/media/svg/coins/bitcoin.svg" selected>Bitcoin/BTC</option>
                                        <option value="1" data-kt-select2-icon="/metronic8/demo57/assets/media/svg/coins/ethereum.svg">Ethereum/ETH</option>
                                        <option value="2" data-kt-select2-icon="/metronic8/demo57/assets/media/svg/coins/filecoin.svg">Filecoin/FLE</option>
                                        <option value="3" data-kt-select2-icon="/metronic8/demo57/assets/media/svg/coins/chainlink.svg">Chainlink/CIN</option>
                                        <option value="4" data-kt-select2-icon="/metronic8/demo57/assets/media/svg/coins/binance.svg">Binance/BCN</option>
                                    </select>
                                    <label for="floatingInputValue">Coin Name</label>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Row-->
                                <div class="row mb-7">
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Input group-->
                                        <div class="form-floating">
                                            <input type="email" class="form-control text-gray-800 fw-bold" placeholder="00.0" id="floatingInputValue" value="$0,0000005" />
                                            <label for="floatingInputValue">Amount(BTC)</label>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Input group-->
                                        <div class="form-floating">
                                            <input type="email" class="form-control text-gray-800 fw-bold" placeholder="00.0" id="floatingInputValue" value="$1230.00" />
                                            <label for="floatingInputValue">Amount(USD)</label>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->

                                <!--begin::Action-->
                                <div class="d-flex align-items-end">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_top_up_wallet" class="btn btn-primary fs-3 w-100">Place Offer</a>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Tap pane-->
                        </div>
                        <!--end::Tab Content-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::Forms widget 1-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
</div>



@include('../layouts.footer')