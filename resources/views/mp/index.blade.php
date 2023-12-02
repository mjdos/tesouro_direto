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
                                            <span class="text-muted small text-uppercase">Top gainer (24h)</span>
                                            <span class="h6 mt-3 mb-1 fw-bold d-block">DF/USDT</span>
                                            <div class="d-flex justify-content-between">
                                                <div class="price-block">
                                                    <span class="fs-6 fw-bold color-price-up">0.3165</span>
                                                    <span class="small text-muted px-2">$0</span>
                                                </div>
                                                <div class="price-report">
                                                    <span class="small text-success">+59.10% <i class="fa fa-level-up"></i></span>
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
                                            <span class="text-muted small text-uppercase">Top loser (24h)</span>
                                            <span class="h6 mt-3 mb-1 fw-bold d-block">XTZDOWN/USDT</span>
                                            <div class="d-flex justify-content-between">
                                                <div class="price-block">
                                                    <span class="fs-6 fw-bold color-price-down">2.831</span>
                                                    <span class="small text-muted px-2">$3</span>
                                                </div>
                                                <div class="price-report">
                                                    <span class="small text-danger">-40.87% <i class="fa fa-level-down"></i></span>
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
                                            <span class="text-muted small text-uppercase">Highlight</span>
                                            <span class="h6 mt-3 mb-1 fw-bold d-block">USDT/BIDR</span>
                                            <div class="d-flex justify-content-between">
                                                <div class="price-block">
                                                    <span class="fs-6 fw-bold">14,339</span>
                                                    <span class="small text-muted px-2">$1</span>
                                                </div>
                                                <div class="price-report">
                                                    <span class="small text-danger">-0.44% <i class="fa fa-level-down"></i></span>
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
                                            <span class="text-muted small text-uppercase">GRT/USDT</span>
                                            <span class="h6 mt-3 mb-1 fw-bold d-block">DOT/USDT</span>
                                            <div class="d-flex justify-content-between">
                                                <div class="price-block">
                                                    <span class="fs-6 fw-bold color-price-up">30.90</span>
                                                    <span class="small text-muted px-2">$31</span>
                                                </div>
                                                <div class="price-report">
                                                    <span class="small text-success">+3.66% <i class="fa fa-level-up"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Row End -->

                        <div class="row g-3 my-5 border-bottom pb-4">
                            <div class="col-lg-12 ">
                                <ul class="nav nav-tabs tab-body-header rounded d-inline-flex" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#Favorites" role="tab">Favorites</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Spotmarkets" role="tab">Spot Markets</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Futuresmarkets" role="tab">Futures Markets</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Newlisting" role="tab">New listing</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Allcryptos" role="tab">All Cryptos</a></li>
                                </ul>
                            </div>
                        </div><!-- Row End -->

                        <div class="row g-3 mb-3">
                            <div class="col-lg-12 col-md-12">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="Favorites">
                                        <ul class="nav nav-pills rounded d-inline-flex" role="tablist">
                                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#Spot" role="tab">Spot(6)</a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Futures" role="tab">Futures(6)</a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Margin" role="tab">Margin(3)</a></li>
                                        </ul>
                                        <div class="tab-content mt-4">
                                            <div class="tab-pane fade show active" id="Spot">
                                                <table  class="myProjectTable table table-hover custom-table align-middle mb-0" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>24h Change</th> 
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th> 
                                                            <th>Market Cap</th>
                                                            <th>Actions</th>  
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/DASH.png" alt="" class="img-fluid avatar mx-1"> COTI<span class="text-muted">/BNB</span></td>
                                                            <td><span>0.08686</span> <span class="text-muted">/ $2.35</span></td>
                                                            <td><span class="color-price-up">+3.45%</span></td>
                                                            <td>0.09024 / 0.08345</td>
                                                            <td>36,883.46</td>
                                                            <td>$30,298.93M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/ADA.png" alt="" class="img-fluid avatar mx-1"> ADA<span class="text-muted">/BNB</span></td>
                                                            <td><span>0.006640</span> <span class="text-muted">/ $2.35</span></td>
                                                            <td><span class="color-price-up">+7.27%</span></td>
                                                            <td>0.006652 / 0.006168</td>
                                                            <td>26,781.66</td>
                                                            <td>$75,260.60M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/BTC.png" alt="" class="img-fluid avatar mx-1"> BTC<span class="text-muted">/USDT</span></td>
                                                            <td><span class="color-price-down">42,564.39</span> <span class="text-muted">/ $42,350.69</span></td>
                                                            <td><span class="color-price-up">+1.12%</span></td>
                                                            <td>43,200.00 / 40,675.00</td>
                                                            <td>2,603.11M</td>
                                                            <td>$801,182.25M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1"> ETH<span class="text-muted">/USDT</span></td>
                                                            <td><span class="color-price-up">2,918.14</span> <span class="text-muted">/ $2,916.23</span></td>
                                                            <td><span class="color-price-up">+4.03%</span></td>
                                                            <td>2,979.99 / 2,733.00</td>
                                                            <td>2,079.60M</td>
                                                            <td>$342,735.73M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1">SOL<span class="text-muted">/USDT</span></td>
                                                            <td><span class="color-price-down">139.15</span> <span class="text-muted">/ $139.22</span></td>
                                                            <td><span class="color-price-up">+5.83%</span></td>
                                                            <td>144.22 / 128.15</td>
                                                            <td>743.07M</td>
                                                            <td>$743958.07M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/COTI.png" alt="" class="img-fluid avatar mx-1"> COTI<span class="text-muted">/BNB</span></td>
                                                            <td><span>0.0018329</span> <span class="text-muted">/ $0.64</span></td>
                                                            <td><span class="color-price-up">+28.33%</span></td>
                                                            <td>0.0018867 / 0.0013722</td>
                                                            <td>17,935.33</td>
                                                            <td>$563.54M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="Futures">
                                                <table  class="myProjectTable table table-hover custom-table align-middle mb-0" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>24h Change</th> 
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th> 
                                                            <th>Market Cap</th>
                                                            <th>Actions</th>  
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/BTC.png" alt="" class="img-fluid avatar mx-1"> BTCUSDT <span class="text-muted">perpetual</span></td>
                                                            <td><span class="color-price-down">42,564.39</span> <span class="text-muted">/ $42,350.69</span></td>
                                                            <td><span class="color-price-up">+1.12%</span></td>
                                                            <td>43,200.00 / 40,675.00</td>
                                                            <td>2,603.11M</td>
                                                            <td>$801,182.25M</td>
                                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1"> ETHUSDT <span class="text-muted">perpetual</span></td>
                                                            <td><span class="color-price-up">2,918.14</span> <span class="text-muted">/ $2,916.23</span></td>
                                                            <td><span class="color-price-up">+4.03%</span></td>
                                                            <td>2,979.99 / 2,733.00</td>
                                                            <td>2,079.60M</td>
                                                            <td>$342,735.73M</td>
                                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/ADA.png" alt="" class="img-fluid avatar mx-1"> ADAUSDT <span class="text-muted">perpetual</span></td>
                                                            <td><span>0.006640</span> <span class="text-muted">/ $2.35</span></td>
                                                            <td><span class="color-price-up">+7.27%</span></td>
                                                            <td>0.006652 / 0.006168</td>
                                                            <td>26,781.66</td>
                                                            <td>$75,260.60M</td>
                                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/DASH.png" alt="" class="img-fluid avatar mx-1"> COTIUSDT <span class="text-muted">perpetual</span></td>
                                                            <td><span>0.08686</span> <span class="text-muted">/ $2.35</span></td>
                                                            <td><span class="color-price-up">+3.45%</span></td>
                                                            <td>0.09024 / 0.08345</td>
                                                            <td>36,883.46</td>
                                                            <td>$30,298.93M</td>
                                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1">SOLUSDT <span class="text-muted">perpetual</span></td>
                                                            <td><span class="color-price-down">139.15</span> <span class="text-muted">/ $139.22</span></td>
                                                            <td><span class="color-price-up">+5.83%</span></td>
                                                            <td>144.22 / 128.15</td>
                                                            <td>743.07M</td>
                                                            <td>$743958.07M</td>
                                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/COTI.png" alt="" class="img-fluid avatar mx-1"> COTIUSDT <span class="text-muted">perpetual</span></td>
                                                            <td><span>0.0018329</span> <span class="text-muted">/ $0.64</span></td>
                                                            <td><span class="color-price-up">+28.33%</span></td>
                                                            <td>0.0018867 / 0.0013722</td>
                                                            <td>17,935.33</td>
                                                            <td>$563.54M</td>
                                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="Margin">
                                                <table  class="myProjectTable table table-hover custom-table align-middle mb-0" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>24h Change</th> 
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th> 
                                                            <th>Market Cap</th>
                                                            <th>Actions</th>  
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1"> ETH<span class="text-muted">/USDT</span></td>
                                                            <td><span class="color-price-up">2,918.14</span> <span class="text-muted">/ $2,916.23</span></td>
                                                            <td><span class="color-price-up">+4.03%</span></td>
                                                            <td>2,979.99 / 2,733.00</td>
                                                            <td>2,079.60M</td>
                                                            <td>$342,735.73M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1">SOL<span class="text-muted">/USDT</span></td>
                                                            <td><span class="color-price-down">139.15</span> <span class="text-muted">/ $139.22</span></td>
                                                            <td><span class="color-price-up">+5.83%</span></td>
                                                            <td>144.22 / 128.15</td>
                                                            <td>743.07M</td>
                                                            <td>$743958.07M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/COTI.png" alt="" class="img-fluid avatar mx-1"> COTI<span class="text-muted">/USDT</span></td>
                                                            <td><span>0.0018329</span> <span class="text-muted">/ $0.64</span></td>
                                                            <td><span class="color-price-up">+28.33%</span></td>
                                                            <td>0.0018867 / 0.0013722</td>
                                                            <td>17,935.33</td>
                                                            <td>$563.54M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div><!-- Favorites Tab End -->
                                    <div class="tab-pane fade" id="Spotmarkets">
                                        <ul class="nav nav-pills rounded d-inline-flex" role="tablist">
                                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#BNB" role="tab">BNB</a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#BTC" role="tab">BTC</a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#ALTS" role="tab">ALTS</a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#FIAT" role="tab">FIAT</a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#ETF" role="tab">ETF</a></li>
                                        </ul>
                                        <div class="tab-content mt-4">
                                            <div class="tab-pane fade show active" id="BNB">
                                                <table class="myProjectTable table table-hover custom-table align-middle mb-0" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>24h Change</th> 
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th> 
                                                            <th>Market Cap</th>
                                                            <th>Actions</th>  
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/DASH.png" alt="" class="img-fluid avatar mx-1"> COTI<span class="text-muted">/BNB</span></td>
                                                            <td><span>0.08686</span> <span class="text-muted">/ $2.35</span></td>
                                                            <td><span class="color-price-up">+3.45%</span></td>
                                                            <td>0.09024 / 0.08345</td>
                                                            <td>36,883.46</td>
                                                            <td>$30,298.93M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/ADA.png" alt="" class="img-fluid avatar mx-1"> ADA<span class="text-muted">/BNB</span></td>
                                                            <td><span>0.006640</span> <span class="text-muted">/ $2.35</span></td>
                                                            <td><span class="color-price-up">+7.27%</span></td>
                                                            <td>0.006652 / 0.006168</td>
                                                            <td>26,781.66</td>
                                                            <td>$75,260.60M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/MATIC.png" alt="" class="img-fluid avatar mx-1"> MATIC<span class="text-muted">/BNB</span></td>
                                                            <td><span class="color-price-down">0.003264</span> <span class="text-muted">/ $1.14</span></td>
                                                            <td><span class="color-price-up">+1.97%</span></td>
                                                            <td>0.003359 / 0.003147</td>
                                                            <td>22,212.85</td>
                                                            <td>$7,673.14M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i><img src="assets/images/coin/CAKE.png" alt="" class="img-fluid avatar mx-1"> CAKE<span class="text-muted">/BNB</span></td>
                                                            <td><span class="color-price-up">0.006360</span> <span class="text-muted">/ $2.24</span></td>
                                                            <td><span class="color-price-down">-3.46%</span></td>
                                                            <td>0.006776 / 0.006346</td>
                                                            <td>15,622.05</td>
                                                            <td>$71,737.76M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1">SOL<span class="text-muted">/BNB</span></td>
                                                            <td><span class="color-price-down">139.15</span> <span class="text-muted">/ $139.22</span></td>
                                                            <td><span class="color-price-up">+5.83%</span></td>
                                                            <td>144.22 / 128.15</td>
                                                            <td>743.07M</td>
                                                            <td>$743958.07M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/COTI.png" alt="" class="img-fluid avatar mx-1"> COTI<span class="text-muted">/BNB</span></td>
                                                            <td><span>0.0018329</span> <span class="text-muted">/ $0.64</span></td>
                                                            <td><span class="color-price-up">+28.33%</span></td>
                                                            <td>0.0018867 / 0.0013722</td>
                                                            <td>17,935.33</td>
                                                            <td>$563.54M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="BTC">
                                                <table  class="myProjectTable table table-hover custom-table align-middle mb-0" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>24h Change</th> 
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th> 
                                                            <th>Market Cap</th>
                                                            <th>Actions</th>  
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1"> ETH<span class="text-muted">/BTC</span></td>
                                                            <td><span class="color-price-up">2,918.14</span> <span class="text-muted">/ $2,916.23</span></td>
                                                            <td><span class="color-price-up">+4.03%</span></td>
                                                            <td>2,979.99 / 2,733.00</td>
                                                            <td>2,079.60M</td>
                                                            <td>$342,735.73M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg " aria-hidden="true"></i> <img src="assets/images/coin/DASH.png" alt="" class="img-fluid avatar mx-1"> DOT<span class="text-muted">/BTC</span></td>
                                                            <td><span>0.08686</span> <span class="text-muted">/ $2.35</span></td>
                                                            <td><span class="color-price-up">+3.45%</span></td>
                                                            <td>0.09024 / 0.08345</td>
                                                            <td>36,883.46</td>
                                                            <td>$30,298.93M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg " aria-hidden="true"></i> <img src="assets/images/coin/CAKE.png" alt="" class="img-fluid avatar mx-1"> CAKE<span class="text-muted">/BTC</span></td>
                                                            <td><span>0.006640</span> <span class="text-muted">/ $2.35</span></td>
                                                            <td><span class="color-price-up">+7.27%</span></td>
                                                            <td>0.006652 / 0.006168</td>
                                                            <td>26,781.66</td>
                                                            <td>$75,260.60M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="assets/images/coin/MATIC.png" alt="" class="img-fluid avatar mx-1"> MATIC<span class="text-muted">/BTC</span></td>
                                                            <td><span class="color-price-down">0.003264</span> <span class="text-muted">/ $1.14</span></td>
                                                            <td><span class="color-price-up">+1.97%</span></td>
                                                            <td>0.003359 / 0.003147</td>
                                                            <td>22,212.85</td>
                                                            <td>$7,673.14M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="assets/images/coin/ADA.png" alt="" class="img-fluid avatar mx-1"> ADA<span class="text-muted">/BTC</span></td>
                                                            <td><span class="color-price-up">0.006360</span> <span class="text-muted">/ $2.24</span></td>
                                                            <td><span class="color-price-down">-3.46%</span></td>
                                                            <td>0.006776 / 0.006346</td>
                                                            <td>15,622.05</td>
                                                            <td>$71,737.76M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1"> SOL<span class="text-muted">/BTC</span></td>
                                                            <td><span class="color-price-down">139.15</span> <span class="text-muted">/ $139.22</span></td>
                                                            <td><span class="color-price-up">+5.83%</span></td>
                                                            <td>144.22 / 128.15</td>
                                                            <td>743.07M</td>
                                                            <td>$743958.07M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg " aria-hidden="true"></i> <img src="assets/images/coin/COTI.png" alt="" class="img-fluid avatar mx-1"> COTI<span class="text-muted">/BTC</span></td>
                                                            <td><span>0.0018329</span> <span class="text-muted">/ $0.64</span></td>
                                                            <td><span class="color-price-up">+28.33%</span></td>
                                                            <td>0.0018867 / 0.0013722</td>
                                                            <td>17,935.33</td>
                                                            <td>$563.54M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="ALTS">
                                                <table  class="myProjectTable table table-hover custom-table align-middle mb-0" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>24h Change</th> 
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th> 
                                                            <th>Market Cap</th>
                                                            <th>Actions</th>  
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i><img src="assets/images/coin/BTS.png" alt="" class="img-fluid avatar mx-1"> BTT <span class="text-muted">/TRX</span></td>
                                                            <td><span class="color-price-down">42,564.39</span> <span class="text-muted">/ $42,350.69</span></td>
                                                            <td><span class="color-price-up">+1.12%</span></td>
                                                            <td>43,200.00 / 40,675.00</td>
                                                            <td>2,603.11M</td>
                                                            <td>$801,182.25M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i><img src="assets/images/coin/WTC.png" alt="" class="img-fluid avatar mx-1"> WIN <span class="text-muted">/TRX</span></td>
                                                            <td><span class="color-price-up">2,918.14</span> <span class="text-muted">/ $2,916.23</span></td>
                                                            <td><span class="color-price-up">+4.03%</span></td>
                                                            <td>2,979.99 / 2,733.00</td>
                                                            <td>2,079.60M</td>
                                                            <td>$342,735.73M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i><img src="assets/images/coin/TRX.png" alt="" class="img-fluid avatar mx-1"> TRX <span class="text-muted">/XRP</span></td>
                                                            <td><span>0.006640</span> <span class="text-muted">/ $2.35</span></td>
                                                            <td><span class="color-price-up">+7.27%</span></td>
                                                            <td>0.006652 / 0.006168</td>
                                                            <td>26,781.66</td>
                                                            <td>$75,260.60M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i><img src="assets/images/coin/BNB.png" alt="" class="img-fluid avatar mx-1"> BNB <span class="text-muted">/ETH</span></td>
                                                            <td><span>0.08686</span> <span class="text-muted">/ $2.35</span></td>
                                                            <td><span class="color-price-up">+3.45%</span></td>
                                                            <td>0.09024 / 0.08345</td>
                                                            <td>36,883.46</td>
                                                            <td>$30,298.93M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i><img src="assets/images/coin/CNX.png" alt="" class="img-fluid avatar mx-1"> CNX <span class="text-muted">/ETH</span></td>
                                                            <td><span class="color-price-down">139.15</span> <span class="text-muted">/ $139.22</span></td>
                                                            <td><span class="color-price-up">+5.83%</span></td>
                                                            <td>144.22 / 128.15</td>
                                                            <td>743.07M</td>
                                                            <td>$743958.07M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i><img src="assets/images/coin/HSR.png" alt="" class="img-fluid avatar mx-1"> HEGIC <span class="text-muted">/ETH</span></td>
                                                            <td><span>0.0018329</span> <span class="text-muted">/ $0.64</span></td>
                                                            <td><span class="color-price-up">+28.33%</span></td>
                                                            <td>0.0018867 / 0.0013722</td>
                                                            <td>17,935.33</td>
                                                            <td>$563.54M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="FIAT">
                                                <table  class="myProjectTable table table-hover custom-table align-middle mb-0" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>24h Change</th> 
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th> 
                                                            <th>Market Cap</th>
                                                            <th>Actions</th>  
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1"> ETH<span class="text-muted">/USDT</span></td>
                                                            <td><span class="color-price-up">2,918.14</span> <span class="text-muted">/ $2,916.23</span></td>
                                                            <td><span class="color-price-up">+4.03%</span></td>
                                                            <td>2,979.99 / 2,733.00</td>
                                                            <td>2,079.60M</td>
                                                            <td>$342,735.73M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1">SOL<span class="text-muted">/USDT</span></td>
                                                            <td><span class="color-price-down">139.15</span> <span class="text-muted">/ $139.22</span></td>
                                                            <td><span class="color-price-up">+5.83%</span></td>
                                                            <td>144.22 / 128.15</td>
                                                            <td>743.07M</td>
                                                            <td>$743958.07M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/COTI.png" alt="" class="img-fluid avatar mx-1"> COTI<span class="text-muted">/USDT</span></td>
                                                            <td><span>0.0018329</span> <span class="text-muted">/ $0.64</span></td>
                                                            <td><span class="color-price-up">+28.33%</span></td>
                                                            <td>0.0018867 / 0.0013722</td>
                                                            <td>17,935.33</td>
                                                            <td>$563.54M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1"> ETH<span class="text-muted">/BTC</span></td>
                                                            <td><span class="color-price-up">2,918.14</span> <span class="text-muted">/ $2,916.23</span></td>
                                                            <td><span class="color-price-up">+4.03%</span></td>
                                                            <td>2,979.99 / 2,733.00</td>
                                                            <td>2,079.60M</td>
                                                            <td>$342,735.73M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1"> ETH<span class="text-muted">/EUR</span></td>
                                                            <td><span class="color-price-up">2,683.90</span> <span class="text-muted">/ $3,146.92</span></td>
                                                            <td><span class="color-price-up">+9.33%</span></td>
                                                            <td>2,714.56 / 2,355.50</td>
                                                            <td>166.23M</td>
                                                            <td>$370,389.91M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg " aria-hidden="true"></i> <img src="assets/images/coin/DASH.png" alt="" class="img-fluid avatar mx-1"> DOT<span class="text-muted">/BTC</span></td>
                                                            <td><span>0.08686</span> <span class="text-muted">/ $2.35</span></td>
                                                            <td><span class="color-price-up">+3.45%</span></td>
                                                            <td>0.09024 / 0.08345</td>
                                                            <td>36,883.46</td>
                                                            <td>$30,298.93M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg " aria-hidden="true"></i> <img src="assets/images/coin/CAKE.png" alt="" class="img-fluid avatar mx-1"> CAKE<span class="text-muted">/BTC</span></td>
                                                            <td><span>0.006640</span> <span class="text-muted">/ $2.35</span></td>
                                                            <td><span class="color-price-up">+7.27%</span></td>
                                                            <td>0.006652 / 0.006168</td>
                                                            <td>26,781.66</td>
                                                            <td>$75,260.60M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="assets/images/coin/MATIC.png" alt="" class="img-fluid avatar mx-1"> MATIC<span class="text-muted">/BTC</span></td>
                                                            <td><span class="color-price-down">0.003264</span> <span class="text-muted">/ $1.14</span></td>
                                                            <td><span class="color-price-up">+1.97%</span></td>
                                                            <td>0.003359 / 0.003147</td>
                                                            <td>22,212.85</td>
                                                            <td>$7,673.14M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="assets/images/coin/ADA.png" alt="" class="img-fluid avatar mx-1"> ADA<span class="text-muted">/BTC</span></td>
                                                            <td><span class="color-price-up">0.006360</span> <span class="text-muted">/ $2.24</span></td>
                                                            <td><span class="color-price-down">-3.46%</span></td>
                                                            <td>0.006776 / 0.006346</td>
                                                            <td>15,622.05</td>
                                                            <td>$71,737.76M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="assets/images/coin/ADA.png" alt="" class="img-fluid avatar mx-1"> ADA<span class="text-muted">/GBP</span></td>
                                                            <td><span class="color-price-up">1.6693</span> <span class="text-muted">/ $2.27</span></td>
                                                            <td><span class="color-price-down">+0.27%</span></td>
                                                            <td>0.006776 / 0.006346</td>
                                                            <td>15,622.05</td>
                                                            <td>$71,737.76M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="assets/images/coin/USDT.png" alt="" class="img-fluid avatar mx-1"> USDT<span class="text-muted">/RUB</span></td>
                                                            <td><span class="color-price-down">72.70</span> <span class="text-muted">/ $1.00</span></td>
                                                            <td><span class="color-price-up">-0.83%</span></td>
                                                            <td>73.40 / 72.68</td>
                                                            <td>3.71M</td>
                                                            <td>$68,542.99M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1"> SOL<span class="text-muted">/BTC</span></td>
                                                            <td><span class="color-price-down">139.15</span> <span class="text-muted">/ $139.22</span></td>
                                                            <td><span class="color-price-up">+5.83%</span></td>
                                                            <td>144.22 / 128.15</td>
                                                            <td>743.07M</td>
                                                            <td>$743958.07M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg " aria-hidden="true"></i> <img src="assets/images/coin/COTI.png" alt="" class="img-fluid avatar mx-1"> COTI<span class="text-muted">/BTC</span></td>
                                                            <td><span>0.0018329</span> <span class="text-muted">/ $0.64</span></td>
                                                            <td><span class="color-price-up">+28.33%</span></td>
                                                            <td>0.0018867 / 0.0013722</td>
                                                            <td>17,935.33</td>
                                                            <td>$563.54M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="assets/images/coin/CVC.png" alt="" class="img-fluid avatar mx-1"> CELR<span class="text-muted">/USDT</span></td>
                                                            <td><span class="color-price-down">0.16675</span> <span class="text-muted">/ $0.16</span></td>
                                                            <td><span class="color-price-up">-11.15%</span></td>
                                                            <td>0.19870 / 0.16111</td>
                                                            <td>321.14M</td>
                                                            <td>$988.07M</td>
                                                            <td><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="ETF">
                                                <table  class="myProjectTable table table-hover custom-table align-middle mb-0" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>24h Change</th> 
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th> 
                                                            <th>Market Cap</th>
                                                            <th>Actions</th>  
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1"> ETHUP<span class="text-muted">/USDT</span></td>
                                                            <td><span class="color-price-up">59.795</span> <span class="text-muted">/ $59.80</span></td>
                                                            <td><span class="color-price-up">+24.55%</span></td>
                                                            <td>61.750 / 44.269</td>
                                                            <td>15.78M</td>
                                                            <td>-</td>
                                                            <td><a href="#" title="" class="text-secondary px-2">Redeem</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg " aria-hidden="true"></i> <img src="assets/images/coin/DASH.png" alt="" class="img-fluid avatar mx-1"> DOTUP<span class="text-muted">/USDT</span></td>
                                                            <td><span>6.721</span> <span class="text-muted">/ $6.71</span></td>
                                                            <td><span class="color-price-up">+6.95%</span></td>
                                                            <td>7.119 / 5.293</td>
                                                            <td>12.75M</td>
                                                            <td>-</td>
                                                            <td><a href="#" title="" class="text-secondary px-2">Redeem</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg " aria-hidden="true"></i> <img src="assets/images/coin/CAKE.png" alt="" class="img-fluid avatar mx-1"> CAKEUP<span class="text-muted">/USDT</span></td>
                                                            <td><span>1.721</span> <span class="text-muted">/ $1</span></td>
                                                            <td><span class="color-price-up">+7.27%</span></td>
                                                            <td>1.119 / 1.293</td>
                                                            <td>10.75M</td>
                                                            <td>-</td>
                                                            <td><a href="#" title="" class="text-secondary px-2">Redeem</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="assets/images/coin/MATIC.png" alt="" class="img-fluid avatar mx-1"> MATICDOWN<span class="text-muted">/USDT</span></td>
                                                            <td><span class="color-price-down">0.003264</span> <span class="text-muted">/ $1.14</span></td>
                                                            <td><span class="color-price-up">+1.97%</span></td>
                                                            <td>0.003359 / 0.003147</td>
                                                            <td>14.75M</td>
                                                            <td>-</td>
                                                            <td><a href="#" title="" class="text-secondary px-2">Redeem</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="assets/images/coin/ADA.png" alt="" class="img-fluid avatar mx-1"> ADADOWN<span class="text-muted">/USDT</span></td>
                                                            <td><span class="color-price-up">0.006360</span> <span class="text-muted">/ $2.24</span></td>
                                                            <td><span class="color-price-down">-3.46%</span></td>
                                                            <td>0.006776 / 0.006346</td>
                                                            <td>15.75M</td>
                                                            <td>-</td>
                                                            <td><a href="#" title="" class="text-secondary px-2">Redeem</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="assets/images/coin/USDT.png" alt="" class="img-fluid avatar mx-1"> USDT<span class="text-muted">/USDT</span></td>
                                                            <td><span class="color-price-down">72.70</span> <span class="text-muted">/ $1.00</span></td>
                                                            <td><span class="color-price-up">-0.83%</span></td>
                                                            <td>73.40 / 72.68</td>
                                                            <td>3.71M</td>
                                                            <td>-</td>
                                                            <td><a href="#" title="" class="text-secondary px-2">Redeem</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1"> SOLDOWN<span class="text-muted">/USDT</span></td>
                                                            <td><span class="color-price-down">139.15</span> <span class="text-muted">/ $139.22</span></td>
                                                            <td><span class="color-price-up">+5.83%</span></td>
                                                            <td>144.22 / 128.15</td>
                                                            <td>743.07M</td>
                                                            <td>-</td>
                                                            <td><a href="#" title="" class="text-secondary px-2">Redeem</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg " aria-hidden="true"></i> <img src="assets/images/coin/COTI.png" alt="" class="img-fluid avatar mx-1"> COTIDOWN<span class="text-muted">/USDT</span></td>
                                                            <td><span>0.0018329</span> <span class="text-muted">/ $0.64</span></td>
                                                            <td><span class="color-price-up">+28.33%</span></td>
                                                            <td>0.0018867 / 0.0013722</td>
                                                            <td>17.15M</td>
                                                            <td>-</td>
                                                            <td><a href="#" title="" class="text-secondary px-2">Redeem</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg" aria-hidden="true"></i> <img src="assets/images/coin/CVC.png" alt="" class="img-fluid avatar mx-1"> CELRUP<span class="text-muted">/USDT</span></td>
                                                            <td><span class="color-price-down">0.16675</span> <span class="text-muted">/ $0.16</span></td>
                                                            <td><span class="color-price-up">-11.15%</span></td>
                                                            <td>0.19870 / 0.16111</td>
                                                            <td>16.55M</td>
                                                            <td>-</td>
                                                            <td><a href="#" title="" class="text-secondary px-2">Redeem</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div><!-- Spotmarkets Tab End -->
                                    <div class="tab-pane fade" id="Futuresmarkets">
                                        <ul class="nav nav-pills rounded d-inline-flex" role="tablist">
                                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#USDFUTURES" role="tab">USDⓈ-M Futures</a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#COINFUTURE" role="tab">COIN-M Futures</a></li>
                                        </ul>
                                        <div class="tab-content mt-4">
                                            <div class="tab-pane fade show active" id="USDFUTURES">
                                                <table  class="myProjectTable table table-hover custom-table align-middle mb-0" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>24h Change</th> 
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th> 
                                                            <th>Actions</th>  
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/BTC.png" alt="" class="img-fluid avatar mx-1"> BTCUSDT <span class="text-muted">perpetual</span></td>
                                                            <td><span class="color-price-down">42,564.39</span> <span class="text-muted">/ $42,350.69</span></td>
                                                            <td><span class="color-price-up">+1.12%</span></td>
                                                            <td>43,200.00 / 40,675.00</td>
                                                            <td>2,603.11M</td>
                                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1"> ETHUSDT <span class="text-muted">perpetual</span></td>
                                                            <td><span class="color-price-up">2,918.14</span> <span class="text-muted">/ $2,916.23</span></td>
                                                            <td><span class="color-price-up">+4.03%</span></td>
                                                            <td>2,979.99 / 2,733.00</td>
                                                            <td>2,079.60M</td>
                                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/ADA.png" alt="" class="img-fluid avatar mx-1"> ADAUSDT <span class="text-muted">perpetual</span></td>
                                                            <td><span>0.006640</span> <span class="text-muted">/ $2.35</span></td>
                                                            <td><span class="color-price-up">+7.27%</span></td>
                                                            <td>0.006652 / 0.006168</td>
                                                            <td>26,781.66</td>
                                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/DASH.png" alt="" class="img-fluid avatar mx-1"> COTIUSDT <span class="text-muted">perpetual</span></td>
                                                            <td><span>0.08686</span> <span class="text-muted">/ $2.35</span></td>
                                                            <td><span class="color-price-up">+3.45%</span></td>
                                                            <td>0.09024 / 0.08345</td>
                                                            <td>36,883.46</td>
                                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1">SOLUSDT <span class="text-muted">perpetual</span></td>
                                                            <td><span class="color-price-down">139.15</span> <span class="text-muted">/ $139.22</span></td>
                                                            <td><span class="color-price-up">+5.83%</span></td>
                                                            <td>144.22 / 128.15</td>
                                                            <td>743.07M</td>
                                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/COTI.png" alt="" class="img-fluid avatar mx-1"> COTIUSDT <span class="text-muted">perpetual</span></td>
                                                            <td><span>0.0018329</span> <span class="text-muted">/ $0.64</span></td>
                                                            <td><span class="color-price-up">+28.33%</span></td>
                                                            <td>0.0018867 / 0.0013722</td>
                                                            <td>17,935.33</td>
                                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="COINFUTURE">
                                                <table  class="myProjectTable table table-hover custom-table align-middle mb-0" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Price</th>
                                                            <th>24h Change</th> 
                                                            <th>24h High / 24h Low</th>
                                                            <th>24h Volume</th> 
                                                            <th>Actions</th>  
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/BTC.png" alt="" class="img-fluid avatar mx-1"> BTCUSDT <span class="text-muted">perpetual</span></td>
                                                            <td><span class="color-price-down">42,564.39</span> <span class="text-muted">/ $42,350.69</span></td>
                                                            <td><span class="color-price-up">+1.12%</span></td>
                                                            <td>43,200.00 / 40,675.00</td>
                                                            <td>460.63M</td>
                                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1"> ETHUSDT <span class="text-muted">perpetual</span></td>
                                                            <td><span class="color-price-up">2,918.14</span> <span class="text-muted">/ $2,916.23</span></td>
                                                            <td><span class="color-price-up">+4.03%</span></td>
                                                            <td>2,979.99 / 2,733.00</td>
                                                            <td>68.30M</td>
                                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/ADA.png" alt="" class="img-fluid avatar mx-1"> ADAUSDT <span class="text-muted">perpetual</span></td>
                                                            <td><span>0.006640</span> <span class="text-muted">/ $2.35</span></td>
                                                            <td><span class="color-price-up">+7.27%</span></td>
                                                            <td>0.006652 / 0.006168</td>
                                                            <td>55.52M</td>
                                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/DASH.png" alt="" class="img-fluid avatar mx-1"> COTIUSDT <span class="text-muted">perpetual</span></td>
                                                            <td><span>0.08686</span> <span class="text-muted">/ $2.35</span></td>
                                                            <td><span class="color-price-up">+3.45%</span></td>
                                                            <td>0.09024 / 0.08345</td>
                                                            <td>45.92M</td>
                                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1">SOLUSDT <span class="text-muted">perpetual</span></td>
                                                            <td><span class="color-price-down">139.15</span> <span class="text-muted">/ $139.22</span></td>
                                                            <td><span class="color-price-up">+5.83%</span></td>
                                                            <td>144.22 / 128.15</td>
                                                            <td>24.40M</td>
                                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i> <img src="assets/images/coin/COTI.png" alt="" class="img-fluid avatar mx-1"> COTIUSDT <span class="text-muted">perpetual</span></td>
                                                            <td><span>0.0018329</span> <span class="text-muted">/ $0.64</span></td>
                                                            <td><span class="color-price-up">+28.33%</span></td>
                                                            <td>0.0018867 / 0.0013722</td>
                                                            <td>10.17M</td>
                                                            <td><a href="#" title="" class="text-secondary px-1">Data History</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div><!-- Futuresmarkets Tab End -->
                                    <div class="tab-pane fade" id="Newlisting">
                                        <table  class="myProjectTable table table-hover custom-table align-middle mb-0" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th>24h Change</th> 
                                                    <th>24h High / 24h Low</th>
                                                    <th>24h Volume</th> 
                                                    <th>Actions</th>  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><i class="fa fa-star px-2 fa-lg text-warning" aria-hidden="true"></i><img src="assets/images/coin/GALA.png" alt="" class="img-fluid avatar mx-1"> GALA <span class="text-muted"> GALA</span></td>
                                                    <td><span class="color-price-up">$0.09</span></td>
                                                    <td><span class="color-price-up">+2.20%</span></td>
                                                    <td>223.32M</td>
                                                    <td>$648.18M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!-- Newlisting Tab End -->
                                    <div class="tab-pane fade" id="Allcryptos">
                                        <table  class="myProjectTable table table-hover custom-table align-middle mb-0" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th>24h Change</th> 
                                                    <th>24h Volume</th>
                                                    <th>Market Cap</th> 
                                                    <th>Actions</th>  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src="assets/images/coin/BTC.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> BTC </span> <span class="text-muted"> Bitcoin</span></td>
                                                    <td><span class="color-price-down">$44,090.69</span></td>
                                                    <td><span class="color-price-up">+4.92%</span></td>
                                                    <td>32,826.51M</td>
                                                    <td>$830,324.82M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> ETH </span> <span class="text-muted"> Ethereum</span></td>
                                                    <td><span class="color-price-down">$3,137.01</span></td>
                                                    <td><span class="color-price-up">+10.72%</span></td>
                                                    <td>22,284.39M</td>
                                                    <td>$369,258.70M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/ADA.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> ADA </span> <span class="text-muted"> Cardano</span></td>
                                                    <td><span class="">$2.25</span></td>
                                                    <td><span class="color-price-up">+0.45%</span></td>
                                                    <td>3,931.81M</td>
                                                    <td>$72,085.72M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/USDT.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> USDT </span> <span class="text-muted"> TetherUS</span></td>
                                                    <td><span class="">$1.00</span></td>
                                                    <td><span class="color-price-down">0%</span></td>
                                                    <td>80,966.12M</td>
                                                    <td>$68,542.99M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/BNB.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> BNB </span> <span class="text-muted"> BNB</span></td>
                                                    <td><span class="">$355.80</span></td>
                                                    <td><span class="color-price-up">+4.62%</span></td>
                                                    <td>1,969.40M</td>
                                                    <td>$59,688.64M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/XRP.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> XRP </span> <span class="text-muted"> Ripple</span></td>
                                                    <td><span class="">$0.97</span></td>
                                                    <td><span class="color-price-up">+5.86%</span></td>
                                                    <td>3,258.67M</td>
                                                    <td>$45,484.29M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> SOL </span> <span class="text-muted"> Solana</span></td>
                                                    <td><span class="">$142.30</span></td>
                                                    <td><span class="color-price-up">+9.42%</span></td>
                                                    <td>2,637.54M</td>
                                                    <td>$42,349.30M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/DOGE.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> DOGE </span> <span class="text-muted"> Dogecoin</span></td>
                                                    <td><span class="">$0.20</span></td>
                                                    <td><span class="color-price-down">-1.81%</span></td>
                                                    <td>1,143.86M</td>
                                                    <td>$27,393.53M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/ADX.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> ADX </span> <span class="text-muted"> Adex</span></td>
                                                    <td><span class="">$0.46</span></td>
                                                    <td><span class="color-price-up">+6.18%</span></td>
                                                    <td>29.28M</td>
                                                    <td>$60.16M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/ARDR.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> ARDR </span> <span class="text-muted"> Ardor</span></td>
                                                    <td><span class="">$0.28</span></td>
                                                    <td><span class="color-price-up">+1.23%</span></td>
                                                    <td>14.39M</td>
                                                    <td>$288.31M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/ARK.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> ARK </span> <span class="text-muted"> Ark</span></td>
                                                    <td><span class="">$1.51</span></td>
                                                    <td><span class="color-price-down">-1.97%</span></td>
                                                    <td>10.33M</td>
                                                    <td>$200.74M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/BAT.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> BAT </span> <span class="text-muted"> Attention Token</span></td>
                                                    <td><span class="">$0.65</span></td>
                                                    <td><span class="color-price-up">+4.41%</span></td>
                                                    <td>182.25M</td>
                                                    <td>$971.60M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/BCH.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> BCH </span> <span class="text-muted"> Bitcoin Cash</span></td>
                                                    <td><span class="">$511.30</span></td>
                                                    <td><span class="color-price-up">+1.07%</span></td>
                                                    <td>5,769.91M</td>
                                                    <td>$9,645.19M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/BNT.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> BNT </span> <span class="text-muted"> Bancor</span></td>
                                                    <td><span class="">$3.60</span></td>
                                                    <td><span class="color-price-up">+5.89%</span></td>
                                                    <td>63.33M</td>
                                                    <td>$843.39M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/CVC.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> CVC </span> <span class="text-muted"> Civic</span></td>
                                                    <td><span class="">$0.43</span></td>
                                                    <td><span class="color-price-up">+1.25%</span></td>
                                                    <td>60.91M</td>
                                                    <td>$291.78M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/DASH.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> DASH </span> <span class="text-muted"> DASH</span></td>
                                                    <td><span class="">$164.20</span></td>
                                                    <td><span class="color-price-up">+2.11%</span></td>
                                                    <td>269.49M</td>
                                                    <td>$1,699.31M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/EOS.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> EOS </span> <span class="text-muted"> EOS</span></td>
                                                    <td><span class="">$4.01</span></td>
                                                    <td><span class="color-price-up">+2.45%</span></td>
                                                    <td>1,671.16M</td>
                                                    <td>$3,855.96M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/FUN.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> FUN </span> <span class="text-muted"> FunToken</span></td>
                                                    <td><span class="">$0.01</span></td>
                                                    <td><span class="color-price-up">+4.28%</span></td>
                                                    <td>22.36M</td>
                                                    <td>$204.59M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/GAS.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> GAS </span> <span class="text-muted"> NeoGas</span></td>
                                                    <td><span class="">$7.92</span></td>
                                                    <td><span class="color-price-down">-3.75%</span></td>
                                                    <td>15.23M</td>
                                                    <td>$80.21M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/KMD.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> KMD </span> <span class="text-muted"> Komodo</span></td>
                                                    <td><span class="">$1.00</span></td>
                                                    <td><span class="color-price-up">+10.63%</span></td>
                                                    <td>15.45M</td>
                                                    <td>$127.70M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/MTL.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> MTL </span> <span class="text-muted"> Metal</span></td>
                                                    <td><span class="">$2.83</span></td>
                                                    <td><span class="color-price-up">+1.54%</span></td>
                                                    <td>24.18M</td>
                                                    <td>$186.27M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/NAV.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> NAV </span> <span class="text-muted"> Navcoin</span></td>
                                                    <td><span class="">$0.34</span></td>
                                                    <td><span class="color-price-up">+4.95%</span></td>
                                                    <td>2.94M</td>
                                                    <td>$24.81M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/OMG.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> OMG </span> <span class="text-muted"> OMG Network</span></td>
                                                    <td><span class="">$9.28</span></td>
                                                    <td><span class="color-price-up">+11.01%</span></td>
                                                    <td>818.10M</td>
                                                    <td>$1,304.28M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/POWER.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> POWER </span> <span class="text-muted"> PowerLedger</span></td>
                                                    <td><span class="">$0.29</span></td>
                                                    <td><span class="color-price-down">-2.75%</span></td>
                                                    <td>5.24M</td>
                                                    <td>$135.53M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/QTUM.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> QTUM </span> <span class="text-muted"> Qtum</span></td>
                                                    <td><span class="">$9.82</span></td>
                                                    <td><span class="color-price-up">+6.13%</span></td>
                                                    <td>276.48M</td>
                                                    <td>$970.52M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="assets/images/coin/ZEC.png" alt="" class="img-fluid avatar mx-1"><span class="text-uppercase fw-bold"> ZEC </span> <span class="text-muted"> Zcash</span></td>
                                                    <td><span class="">$111.50</span></td>
                                                    <td><span class="color-price-up">+1.55%</span></td>
                                                    <td>246.38M</td>
                                                    <td>$1,416.51M</td>
                                                    <td><a href="#" title="" class="text-secondary px-1">Detail</a><a href="#" title="" class="text-secondary">Trade</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!-- Allcryptos Tab End -->
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
    <script  src="{{ url('mp/js/tv.js') }}"></script>

    <!-- Jquery Page Js -->  
    <script src="{{ url('mp/js/template.js') }}"></script>
    <script  src="{{ url('mp/js/page/exchange.js') }}"></script>
</body>
</html> 