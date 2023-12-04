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

    <style>
        #connectButton {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
        }
        #connectButton.connected {
            background-color: green;
        }

        #resgatarButton {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #255398;
            color: white;
            border: none;
            border-radius: 5px;
        }

    </style>
    
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
                        <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 d-flex align-items-center flex-column">
                            <button id="connectButton">Conectar na Carteira</button>
                            <p id="balance">Saldo BNB: 0</p>
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

                    <div class="row g-3 mb-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ url('assets/imagens/TE26.png') }}" height="50">
                                        <span class="ml-2">&nbsp;&nbsp; <b><font size=4>TS26 - Tesouro Selic 2026 &nbsp;&nbsp;|&nbsp;&nbsp; Preço Atual: R$ 3.112,29  &nbsp;&nbsp;&nbsp;&nbsp;<span class="badge bg-danger">-0,78% <i class="fa fa-level-down"></i></span></font></b></span>
                                    </div>
                                    <div>
                                        <button id="resgatarButton">Resgatar Título</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row End -->

                    <div class="row g-3 mb-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- TradingView Widget BEGIN -->
                                    <div class="tradingview-widget-container">
                                        <div id="tradingview_e05b7" style="height: 610px;"></div>
                                    </div>
                                    <!-- TradingView Widget END -->
                                </div>
                            </div>
                        </div>
                    </div><!-- Row End -->

                    <div class="row g-3 mb-3">
                        <div class="col-xxl-5">

                        <div class="card mb-3">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Ordens de Venda</h6> 
                                </div>
                                <div class="card-body">

                                    <div class="tab-content">

                                        <div class="tab-pane fade show active" id="Limit">
                                            <div class="row g-3">
                                                
                                                <div class="col-lg-12">
                                                    <div class="d-flex align-items-center justify-content-between my-3">
                                                        <span class="small text-muted">Preço Atual de 1 TS26</span>
                                                        <span class="">R$ 3.112,29</span>
                                                    </div>
                                                    <form>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">Preço</span>
                                                            <input type="text" class="form-control">
                                                            <span class="input-group-text">R$</span>
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">Qtd</span>
                                                            <input type="text" class="form-control">
                                                            <span class="input-group-text">TS26</span>
                                                        </div>
                                                        
                                                        <button type="submit" class="btn flex-fill btn-light-danger py-2 fs-5 text-uppercase px-5 w-100">Vender Título</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Últimas Compras/Vendas</h6> 
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-tabs tab-body-header rounded d-inline-flex" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#Both" role="tab">Tudo</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Long" role="tab">Compra</a></li>
                                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Short" role="tab">Venda</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="Both">
                                            <table id="priceTableup" class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Preço (R$)</th>
                                                        <th>Qtd</th>
                                                        <th>Total</th> 
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><span class="color-price-up">31178.43</span></td>
                                                        <td>0.11228</td>
                                                        <td>6,938.88312</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="color-price-up">31125.73</span></td>
                                                        <td>0.08752</td>
                                                        <td>5,022.51319</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="color-price-up">31128.23</span></td>
                                                        <td>0.08881</td>
                                                        <td>1,677.76807</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="color-price-up">31178.90</span></td>
                                                        <td>0.00062</td>
                                                        <td>1,151.15971</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="color-price-up">31179.43</span></td>
                                                        <td>0.03855</td>
                                                        <td>10,978.37750</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="color-price-up">44279.20</span></td>
                                                        <td>0.17214</td>
                                                        <td>76,053.29043</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="color-price-up">42978.43</span></td>
                                                        <td>0.11228</td>
                                                        <td>6,938.88312</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="color-price-up">42925.73</span></td>
                                                        <td>0.08752</td>
                                                        <td>5,022.51319</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="color-price-up">42928.23</span></td>
                                                        <td>0.08881</td>
                                                        <td>1,677.76807</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="color-price-up">42978.90</span></td>
                                                        <td>0.00062</td>
                                                        <td>1,151.15971</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table id="priceTabledown" class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Preço (R$)</th>
                                                        <th>Qtd</th>
                                                        <th>Total</th> 
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><span class="color-price-down">31178.43</span></td>
                                                        <td>0.11228</td>
                                                        <td>6,938.88312</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="color-price-down">31125.73</span></td>
                                                        <td>0.08752</td>
                                                        <td>5,022.51319</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="color-price-down">31128.23</span></td>
                                                        <td>0.08881</td>
                                                        <td>1,677.76807</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="color-price-down">31178.90</span></td>
                                                        <td>0.00062</td>
                                                        <td>1,151.15971</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="color-price-down">31179.43</span></td>
                                                        <td>0.03855</td>
                                                        <td>10,978.37750</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="color-price-down">44279.20</span></td>
                                                        <td>0.17214</td>
                                                        <td>76,053.29043</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="color-price-down">42978.43</span></td>
                                                        <td>0.11228</td>
                                                        <td>6,938.88312</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="color-price-down">42925.73</span></td>
                                                        <td>0.08752</td>
                                                        <td>5,022.51319</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="color-price-down">42928.23</span></td>
                                                        <td>0.08881</td>
                                                        <td>1,677.76807</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="color-price-down">42978.90</span></td>
                                                        <td>0.00062</td>
                                                        <td>1,151.15971</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7">
                            
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Livro de Ordens</h6> 
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="OpenOrder">
                                            <table id="ordertabone" class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Data</th>
                                                        <th>Token</th>
                                                        <th>Venda</th>
                                                        <th>Preço (R$)</th>
                                                        <th>Qtd</th>
                                                        <th>Comprar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>04/12 10:32:15</td>
                                                        <td><img src="{{ url('assets/imagens/TE26.png') }}" alt="" class="img-fluid avatar mx-1">TS26</td>
                                                        <td><span class="color-price-down">Venda</span></td>
                                                        <td>3.111,10</td>
                                                        <td>0.000378</td>
                                                        <td>
                                                            <div class="btn-group" role="group">
                                                                <button type="button" class="btn btn-success" style="color:white">Comprar</button>
                                                                <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>04/12 10:12:15</td>
                                                        <td><img src="{{ url('assets/imagens/TE26.png') }}" alt="" class="img-fluid avatar mx-1">TS26</td>
                                                        <td><span class="color-price-down">Venda</span></td>
                                                        <td>3.111,25</td>
                                                        <td>0.012</td>
                                                        <td>
                                                            <div class="btn-group" role="group">
                                                                <button type="button" class="btn btn-success" style="color:white">Comprar</button>
                                                                <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>04/12 09:55:05</td>
                                                        <td><img src="{{ url('assets/imagens/TE26.png') }}" alt="" class="img-fluid avatar mx-1">TS26</td>
                                                        <td><span class="color-price-down">Venda</span></td>
                                                        <td>3.109,05</td>
                                                        <td>0.1</td>
                                                        <td>
                                                            <div class="btn-group" role="group">
                                                                <button type="button" class="btn btn-success" style="color:white">Comprar</button>
                                                                <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>04/12 09:45:00</td>
                                                        <td><img src="{{ url('assets/imagens/TE26.png') }}" alt="" class="img-fluid avatar mx-1">TS26</td>
                                                        <td><span class="color-price-down">Venda</span></td>
                                                        <td>3.110,02</td>
                                                        <td>0.0445</td>
                                                        <td>
                                                            <div class="btn-group" role="group">
                                                                <button type="button" class="btn btn-success" style="color:white">Comprar</button>
                                                                <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>04/12 08:48:39</td>
                                                        <td><img src="{{ url('assets/imagens/TE26.png') }}" alt="" class="img-fluid avatar mx-1">TS26</td>
                                                        <td><span class="color-price-down">Venda</span></td>
                                                        <td>3.099,55</td>
                                                        <td>1.8</td>
                                                        <td>
                                                            <div class="btn-group" role="group">
                                                                <button type="button" class="btn btn-success" style="color:white">Comprar</button>
                                                                <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div><!-- OpenOrdertab End -->
                                        <div class="tab-pane fade" id="OrderHistory">
                                            <table id="ordertabtwo" class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Pair</th>
                                                        <th>Type</th> 
                                                        <th>Side</th>
                                                        <th>Average</th>
                                                        <th>Price</th>
                                                        <th>Executed</th>
                                                        <th>Amount</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>09-18 17:32:15</td>
                                                        <td><img src="{{ url('mp/assets/images/coin/ETH.png') }}" alt="" class="img-fluid avatar mx-1">TS26</td>
                                                        <td>Market</td>
                                                        <td><span class="color-price-down">Sell</span></td>
                                                        <td>3,487.50</td>
                                                        <td>Market</td>
                                                        <td>0.0110</td>
                                                        <td>0.0110</td>
                                                        <td>38.36</td>
                                                    </tr>
                                                    <tr>
                                                        <td>09-18 17:31:11</td>
                                                        <td><img src="{{ url('mp/assets/images/coin/SOL.png') }}" alt="" class="img-fluid avatar mx-1">SOL/USDT</td>
                                                        <td>Market</td>
                                                        <td><span class="color-price-down">Sell</span></td>
                                                        <td>160.33</td>
                                                        <td>Market</td>
                                                        <td>0.75</td>
                                                        <td>0.75</td>
                                                        <td>120.25</td>
                                                    </tr>
                                                    <tr>
                                                        <td>09-18 08:52:04</td>
                                                        <td><img src="{{ url('mp/assets/images/coin/ETH.png') }}" alt="" class="img-fluid avatar mx-1">TS26</td>
                                                        <td>Market</td>
                                                        <td><span class="color-price-up">Buy</span></td>
                                                        <td>3,311.20</td>
                                                        <td>Market</td>
                                                        <td>0.0111</td>
                                                        <td>0.0111</td>
                                                        <td>38.18</td>
                                                    </tr>
                                                    <tr>
                                                        <td>09-17 08:34:14</td>
                                                        <td><img src="{{ url('mp/assets/images/coin/SOL.png') }}" alt="" class="img-fluid avatar mx-1">SOL/USDT</td>
                                                        <td>Market</td>
                                                        <td><span class="color-price-up">Buy</span></td>
                                                        <td>147.04</td>
                                                        <td>Market</td>
                                                        <td>0.76</td>
                                                        <td>0.71</td>
                                                        <td>111.75</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- OrderHistorytab End -->
                                        <div class="tab-pane fade" id="TradeHistory">
                                            <table id="ordertabthree" class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Pair</th>
                                                        <th>Side</th>
                                                        <th>Price</th>
                                                        <th>Executed</th>
                                                        <th>Fee</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>09-18 17:32:15</td>
                                                        <td><img src="{{ url('mp/assets/images/coin/ETH.png') }}" alt="" class="img-fluid avatar mx-1">TS26</td>
                                                        <td><span class="color-price-down">Sell</span></td>
                                                        <td>3,487.50</td>
                                                        <td>0.0110</td>
                                                        <td>0.03836250 USDT</td>
                                                        <td>38.36250000 USDT</td>
                                                    </tr>
                                                    <tr>
                                                        <td>09-18 17:31:11</td>
                                                        <td><img src="{{ url('mp/assets/images/coin/SOL.png') }}" alt="" class="img-fluid avatar mx-1">SOL/USDT</td>
                                                        <td><span class="color-price-down">Sell</span></td>
                                                        <td>160.33</td>
                                                        <td>0.75</td>
                                                        <td>0.12024750 USDT</td>
                                                        <td>120.24750000 USDT</td>
                                                    </tr>
                                                    <tr>
                                                        <td>09-18 08:52:04</td>
                                                        <td><img src="{{ url('mp/assets/images/coin/ETH.png') }}" alt="" class="img-fluid avatar mx-1">TS26</td>
                                                        <td><span class="color-price-up">Buy</span></td>
                                                        <td>3,311.20</td>
                                                        <td>0.0111</td>
                                                        <td>0.00001110 ETH</td>
                                                        <td>38.17512000 USDT</td>
                                                    </tr>
                                                    <tr>
                                                        <td>09-17 08:34:14</td>
                                                        <td><img src="{{ url('mp/assets/images/coin/SOL.png') }}" alt="" class="img-fluid avatar mx-1">SOL/USDT</td>
                                                        <td><span class="color-price-up">Buy</span></td>
                                                        <td>147.04</td>
                                                        <td>0.76</td>
                                                        <td>0.00076000 SOL</td>
                                                        <td>111.75040000 USDT</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- TradeHistorytab End -->
                                        <div class="tab-pane fade" id="Funds">
                                            <table id="ordertabfour" class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Coin</th>
                                                        <th>Total Balance</th>
                                                        <th>Available Balance</th>
                                                        <th>In Order</th>
                                                        <th>BTC Value</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><img src="{{ url('mp/assets/images/coin/ICN.png') }}" alt="" class="img-fluid avatar mx-1">1INCH</td>
                                                        <td>10.00000000</td>
                                                        <td>10.00000000</td>
                                                        <td>08.00000000</td>
                                                        <td>0.00000080 BTC</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="{{ url('mp/assets/images/coin/EDG.png') }}" alt="" class="img-fluid avatar mx-1">EDG</td>
                                                        <td>11.00000000</td>
                                                        <td>11.00000000</td>
                                                        <td>10.00000010</td>
                                                        <td>0.000000010 BTC</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="{{ url('mp/assets/images/coin/ADA.png') }}" alt="" class="img-fluid avatar mx-1">ADA</td>
                                                        <td>112.00000000</td>
                                                        <td>112.00000000</td>
                                                        <td>098.00000098</td>
                                                        <td>0.0000000009 BTC</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="{{ url('mp/assets/images/coin/ARK.png') }}" alt="" class="img-fluid avatar mx-1">ARK</td>
                                                        <td>113.00000000</td>
                                                        <td>113.00000000</td>
                                                        <td>097.00000097</td>
                                                        <td>0.0000000009 BTC</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="{{ url('mp/assets/images/coin/FUN.png') }}" alt="" class="img-fluid avatar mx-1">Fun</td>
                                                        <td>218.00000000</td>
                                                        <td>218.00000000</td>
                                                        <td>095.00000095</td>
                                                        <td>0.0000000008 BTC</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="{{ url('mp/assets/images/coin/BNB.png') }}" alt="" class="img-fluid avatar mx-1">BNB</td>
                                                        <td>0.00431435</td>
                                                        <td>0.00431435</td>
                                                        <td>0.00000000</td>
                                                        <td>0.00003445 BTC</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="{{ url('mp/assets/images/coin/ETH.png') }}" alt="" class="img-fluid avatar mx-1">ETH</td>
                                                        <td>0.05431435</td>
                                                        <td>0.05431435</td>
                                                        <td>0.00000000</td>
                                                        <td>0.00543445 BTC</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- Fundstab End -->
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
    <script  src="{{ url('mp/js/tv.js') }}"></script>

    <!-- Jquery Page Js -->  
    <script  src="{{ url('mp/js/page/exchange.js') }}"></script>

        
    <script src="{{ asset('assets/js/web3.min.js') }}"></script>

    <script>
        
        const connectButton = document.getElementById('connectButton');
        const balanceElement = document.getElementById('balance');
        const queryButton = document.getElementById('queryButton');
        const contractResponseElement = document.getElementById('contractResponse');

        let web3;
        let contract;

        // Inicialize o Web3 quando a página for carregada
        window.addEventListener('load', async () => {
            if (window.ethereum) {
                web3 = new Web3(window.ethereum);

                const contractABI = '[{"inputs":[],"stateMutability":"nonpayable","type":"constructor"},{"inputs":[{"components":[{"internalType":"string","name":"name","type":"string"},{"internalType":"uint8","name":"age","type":"uint8"}],"internalType":"struct StoreCustomers.Customer","name":"customer","type":"tuple"}],"name":"addCustomer","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"count","outputs":[{"internalType":"uint32","name":"","type":"uint32"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint32","name":"","type":"uint32"}],"name":"customers","outputs":[{"internalType":"string","name":"name","type":"string"},{"internalType":"uint8","name":"age","type":"uint8"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint32","name":"id","type":"uint32"},{"components":[{"internalType":"string","name":"name","type":"string"},{"internalType":"uint8","name":"age","type":"uint8"}],"internalType":"struct StoreCustomers.Customer","name":"newCustomer","type":"tuple"}],"name":"editCustomer","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint32","name":"id","type":"uint32"}],"name":"getCustomer","outputs":[{"components":[{"internalType":"string","name":"name","type":"string"},{"internalType":"uint8","name":"age","type":"uint8"}],"internalType":"struct StoreCustomers.Customer","name":"","type":"tuple"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint32","name":"id","type":"uint32"}],"name":"removeCustomer","outputs":[],"stateMutability":"nonpayable","type":"function"}]';
                const contractAddress = "0xE9956c971B72aD74F249E616828df613F03E858b";
                contract = new web3.eth.Contract(JSON.parse(contractABI), contractAddress);

                try {
                    const accounts = await ethereum.request({ method: 'eth_accounts' });
                    if (accounts && accounts.length > 0) {
                        // Conta já conectada
                        connectButton.classList.add('connected');
                        connectButton.textContent = 'Carteira Conectada';
                        getBalance(accounts[0]);
                    }
                } catch (error) {
                    console.error('Erro ao verificar contas:', error);
                }
                
            } else {
                alert('MetaMask não encontrado');
            }
        });

        connectButton.addEventListener('click', () => {
            if (window.ethereum) {
                window.ethereum.request({ method: 'eth_requestAccounts' })
                    .then(accounts => {
                        if (accounts.length > 0) {
                            connectButton.classList.add('connected');
                            connectButton.textContent = 'Carteira Conectada';
                            getBalance(accounts[0]);
                        } else {
                            connectButton.classList.remove('connected');
                            connectButton.textContent = 'Conectar na Carteira';
                            balanceElement.textContent = 'Saldo BNB: 0';
                        }
                    })
                    .catch(error => {
                        console.error('Erro ao conectar na carteira:', error);
                        connectButton.classList.remove('connected');
                        connectButton.textContent = 'Conectar na Carteira';
                        balanceElement.textContent = 'Saldo BNB: 0';
                    });
            } else {
                alert('MetaMask não encontrado');
            }
        });

        function getBalance(account) {
            web3.eth.getBalance(account)
                .then(balance => {
                    balanceElement.textContent = `Saldo BNB: ${web3.utils.fromWei(balance, 'ether')}`;
                })
                .catch(error => console.error(error));
        }



        queryButton.addEventListener('click', () => {
            const inputValue = document.getElementById('inputValue').value;

            contract.methods.customers(inputValue).call()
                .then(response => {
                    contractResponseElement.textContent = `Resposta do Contrato: ${response.name}, Idade: ${response.age}`;
                })
                .catch(error => {
                    console.error('Erro ao consultar o contrato:', error);
                    contractResponseElement.textContent = 'Erro ao consultar o contrato';
                });
        });


    </script>

</body>
</html> 