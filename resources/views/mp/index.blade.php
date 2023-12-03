<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Market Place Tesouro Nacional</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!-- plugin css file  -->
    <link rel="stylesheet" href="{{ url('mp/assets/plugin/datatables/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ url('mp/assets/plugin/datatables/dataTables.bootstrap5.min.css') }}">

    <!-- project css file  -->
    <link rel="stylesheet" href="{{ url('mp/assets/css/cryptoon.style.min.css') }}">
</head>
<body>
    <div id="cryptoon-layout" class="theme-indigo">


        <!-- main body area -->
        <div class="main px-lg-4 px-md-4">

            <!-- Body: Header -->
            <div class="header">
                <nav class="navbar py-4">
                    <div class="container-xxl">

                        <!-- menu toggler -->
                        <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                            <span class="fa fa-bars"></span>
                        </button>

                        <!-- main menu Search-->
                        <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 d-flex align-items-center">
                            <img src="{{ url('mp/assets/images/logo.png') }}" height="50">
                        </div>

                    </div>
                </nav>
            </div>

            <!-- Body: Titel Header -->
            <div class="body-header border-bottom d-flex py-3">
                <div class="container-xxl">
                    <div class="row align-items-center g-2">
                        <div class="col">
                            <!-- Pretitle -->
                            <h1 class="h4 mt-1">Market Place Tesouro Nacional</h1>
                        </div>

                    </div> <!-- Row end  -->
                </div>
            </div>



            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">

                    <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4 mb-3">
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="flex-fill text-truncate">
                                        <span class="text-muted small text-uppercase">Maiores ganhos em 24h</span>
                                        <span class="h6 mt-3 mb-1 fw-bold d-block">TS26 - <span class="text-muted"> Tesouro Selic 2026</span></span>
                                        <div class="d-flex justify-content-between">
                                            <div class="price-block">
                                                <span class="fs-6 fw-bold color-price-up">R$ 1.4141,55</span>
                                            </div>
                                            <div class="price-report">
                                                <span class="badge bg-success">+9,10% <i class="fa fa-level-up"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="flex-fill text-truncate">
                                        <span class="text-muted small text-uppercase">Maiores perdas em 24h </span>
                                        <span class="h6 mt-3 mb-1 fw-bold d-block">TE29 - <span class="text-muted"> Tesouro Educa+ 2029</span></span>
                                        <div class="d-flex justify-content-between">
                                            <div class="price-block">
                                                <span class="fs-6 fw-bold color-price-down">R$ 3.112,29</span>
                                            </div>
                                            <div class="price-report">
                                                <span class="badge bg-danger">-0,87% <i class="fa fa-level-down"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="flex-fill text-truncate">
                                        <span class="text-muted small text-uppercase">Destaques</span>
                                        <span class="h6 mt-3 mb-1 fw-bold d-block">TP33 - <span class="text-muted"> Tesouro Pré-Fixado 2033 </span></span>
                                        <div class="d-flex justify-content-between">
                                            <div class="price-block">
                                                <span class="fs-6 fw-bold">R$ 1.000,00</span>
                                            </div>
                                            <div class="price-report">
                                                <span class="badge bg-danger">-0,44% <i class="fa fa-level-down"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="flex-fill text-truncate">
                                        <span class="text-muted small text-uppercase">Título Recomendado</span>
                                        <span class="h6 mt-3 mb-1 fw-bold d-block">TE26 -<span class="text-muted"> Tesouro Educa+ 2026 </span> </span>
                                        <div class="d-flex justify-content-between">
                                            <div class="price-block">
                                                <span class="fs-6 fw-bold color-price-up">R$ 2.200,00</span>
                                            </div>
                                            <div class="price-report">
                                                <span class="badge bg-success">+3,66% <i class="fa fa-level-up"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row End -->


                    <div class="row g-3 mb-3">
                        <div class="col-lg-12 col-md-12">
                            <div class="tab-content">
                                <div>

                                    <div class="tab-content mt-4">
                                        <div class="tab-pane fade show active" id="Spot">
                                            <table class="myProjectTable table table-hover custom-table align-middle mb-0" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Título</th>
                                                        <th>Data de Vencimento</th>
                                                        <th>Preço</th>
                                                        <th> 1h %</th>
                                                        <th> 24h %</th>
                                                        <th> 7d %</th>
                                                        <th>Negociar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($titulos as $titulo)
                                                    @php
                                                        
                                                    $icone = 'assets/imagens/'.$titulo->sigla.'.png';

                                                    @endphp
                                                    <tr>
                                                        <td>
                                                            <img src="{{ url($icone) }}" alt="" class="img-fluid avatar mx-1">
                                                            <strong>{{$titulo->sigla}}</strong> &nbsp;<span class="text-muted">{{$titulo->nome}} </span>
                                                        </td> 
                                                        <td><span>{{date('d/m/Y', strtotime($titulo->dataVencimento))}}</span> </td>
                                                        <td>R$ &nbsp;{{number_format($titulo->valorNominal, 2, ",", ".") }}</td> 
                                                        <td>
                                                            <span @if($titulo->hora_status == 'P') class="color-price-up" @elseif($titulo->hora_status == 'N') class="color-price-down" @else class="text-muted" @endif>
                                                                {{$titulo->hora ?? '0.00'}}%
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span @if($titulo->dia_status == 'P') class="color-price-up" @elseif($titulo->dia_status == 'N') class="color-price-down" @else class="text-muted" @endif>
                                                                {{$titulo->dia ?? '0.00'}}%
                                                            </span> 
                                                        </td> 
                                                        <td>
                                                            <span @if($titulo->semana_status == 'P') class="color-price-up" @elseif($titulo->semana_status == 'N') class="color-price-down" @else class="text-muted" @endif>
                                                                {{$titulo->semana ?? '0.00'}}%
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('exchange.index') }}" title="" class="btn btn-primary">Negociar</a>
                                                        </td>
                                                    </tr> 
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!-- Row End -->

                </div>
            </div>






        </div>

    </div>

    <!-- Jquery Core Js -->
    <script src="{{ url('mp/assets/bundles/libscripts.bundle.js') }}"></script>

    <!-- Plugin Js -->
    <script src="{{ url('mp/assets/bundles/dataTables.bundle.js') }}"></script>
    <script src="{{ url('mp/js/tv.js') }}"></script>

    <!-- Jquery Page Js -->
    <script src="{{ url('mp/js/page/exchange.js') }}"></script>
</body>
</html>
