@extends('layouts.navbar')
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Online Statistics</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/js/bundles/materialize-rtl/materialize-rtl.min.css')}}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="{{asset('assets/css/styles/all-themes.css')}}" rel="stylesheet" />
    <style>
        .contact100-form-checkbox .form-check .form-check-label,
        .wrap-input100 .material-icons {
            text-align: right;
        }

        .default-select option {
            color: #000;
        }
    </style>
</head>

<body class="light rtl">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Widgets</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="../../index-2.html">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active">Widgets</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="support-box text-center l-bg-red">
                        <div class="icon m-b-10">
                            <div class="chart chart-bar-2">6,4,8,6,8,10,5,6,7,9,5,6,4,8,6,8,10,5,6,7,9,5</div>
                        </div>
                        <div class="text m-b-10">Total Ticket</div>
                        <h3 class="m-b-0">1512
                            <i class="material-icons">trending_up</i>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="support-box text-center l-bg-cyan">
                        <div class="icon m-b-10">
                            <span class="chart chart-line-2">9,4,6,5,6,4,7,3</span>
                        </div>
                        <div class="text m-b-10">Reply</div>
                        <h3 class="m-b-0">1236
                            <i class="material-icons">trending_up</i>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="support-box text-center l-bg-orange">
                        <div class="icon m-b-10">
                            <div class="chart chart-pie-2">30, 35, 25, 8</div>
                        </div>
                        <div class="text m-b-10">Resolve</div>
                        <h3 class="m-b-0">1107
                            <i class="material-icons">trending_down</i>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="support-box text-center green">
                        <div class="icon m-b-10">
                            <div class="chart chart-bar-2">4,6,-3,-1,2,-2,4,3,6,7,-2,3,4,6,-3,-1,2,-2,4,3,6,7,-2,3</div>
                        </div>
                        <div class="text m-b-10">Pending</div>
                        <h3 class="m-b-0">167
                            <i class="material-icons">trending_down</i>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="row justify-content-center text-center m-t-20">
                                <div class="col-5">
                                    <h6 class="text-muted">Real-Time Visits</h6>
                                    <h3>23,000</h3>
                                </div>
                                <div class="col-5">
                                    <h6 class="text-muted">Returning Visitors</h6>
                                    <h3>12,564</h3>
                                </div>
                            </div>
                            <div id="area_chart" class="area_chart-style"></div>
                            <div class="row justify-content-center text-center b-t-default m-t-15 p-t-20">
                                <div class="col-3 b-r-default">
                                    <h5>75%</h5>
                                    <p class="text-muted m-b-0">Satisfied</p>
                                </div>
                                <div class="col-3 b-r-default">
                                    <h5>16%</h5>
                                    <p class="text-muted m-b-0">Unsatisfied</p>
                                </div>
                                <div class="col-3">
                                    <h5>9%</h5>
                                    <p class="text-muted m-b-0">NA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="row justify-content-center text-center m-t-20">
                                <div class="col-5">
                                    <h6 class="text-muted">Total Working Hours</h6>
                                    <h3>87,000</h3>
                                </div>
                                <div class="col-5">
                                    <h6 class="text-muted">Total Employees</h6>
                                    <h3>4,354</h3>
                                </div>
                            </div>
                            <div id="project_line" class="area_chart-style"></div>
                        </div>
                        <div class="card-footer">
                            <div class="row text-center">
                                <div class="col-6 b-r-default">
                                    <h6 class="text-muted m-b-10">Completed Projects</h6>
                                    <h3 class="m-b-0">986</h3>
                                </div>
                                <div class="col-6">
                                    <h6 class="text-muted m-b-10">Total Earnings</h6>
                                    <h3 class="m-b-0">234.6M</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-green total-card">
                        <div class="card-block">
                            <div class="text-center p-t-20">
                                <h3>Total Sales</h3>
                                <p class="m-0">4000</p>
                            </div>
                        </div>
                        <div id="graph1" class="card-height-100"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-orange total-card">
                        <div class="card-block">
                            <div class="text-center p-t-20">
                                <h3>Visitors</h3>
                                <p class="m-0">3345</p>
                            </div>
                        </div>
                        <div id="graph2" class="card-height-100"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-cyan total-card">
                        <div class="card-block">
                            <div class="text-center p-t-20">
                                <h3>Orders</h3>
                                <p class="m-0">2364</p>
                            </div>
                        </div>
                        <div id="graph3" class="card-height-100"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-purple total-card">
                        <div class="card-block">
                            <div class="text-center p-t-20">
                                <h3>Profit</h3>
                                <p class="m-0">$75,656</p>
                            </div>
                        </div>
                        <div id="graph4" class="card-height-100"></div>
                    </div>
                </div>
            </div>
            <!-- من هون اخدت -->
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 m-b-5">Total Income</div>
                        <h3 class="m-b-10">$758
                            <i class="material-icons col-green">trending_up</i>
                        </h3>
                        <div class="icon">
                            <div class="chart chart-bar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 m-b-5">Orders Received</div>
                        <h3 class="m-b-10">1025
                            <i class="material-icons col-red">trending_down</i>
                        </h3>
                        <div class="icon">
                            <span class="chart chart-line"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 m-b-5">Total Sales</div>
                        <h3 class="m-b-10">956
                            <i class="material-icons col-green">trending_up</i>
                        </h3>
                        <div class="icon">
                            <div class="chart chart-pie"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 m-b-5">Total Active Users</div>
                        <h3 class="m-b-10">214
                            <i class="material-icons col-red">trending_down</i>
                        </h3>
                        <div class="icon">
                            <div class="chart" id="liveChart">Loading..</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</body>

</html>