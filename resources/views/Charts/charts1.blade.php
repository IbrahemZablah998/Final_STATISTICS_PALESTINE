@extends('layouts.navbar')

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
<div>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row rtl">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Echart</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="../../index-2.html">
                                    <i class="fas fa-home"></i> الصفحة الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">الرسوم </a>
                            </li>
                            <li class="breadcrumb-item active">الرسوم البيانية</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!-- -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            {!! $chart10->container() !!}
                        </div>
                        <div class="body">
                            <div>
                                <script src="{{ LarapexChart::cdn() }}"></script>
                                {{ $chart10->script() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            {!! $chart->container() !!}
                        </div>
                        <div class="body">
                            <div>
                                <script src="{{ LarapexChart::cdn() }}"></script>
                                {{ $chart->script() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            {!! $chart1->container() !!}
                        </div>
                        <div class="body">
                            <div>
                                <script src="{{ LarapexChart::cdn() }}"></script>
                                {{ $chart1->script() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            {!! $chart2->container() !!}
                        </div>
                        <div class="body">
                            <div>
                                <script src="{{ LarapexChart::cdn() }}"></script>
                                {{ $chart2->script() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            {!! $chart3->container() !!}
                        </div>
                        <div class="body">
                            <div>
                                <script src="{{ LarapexChart::cdn() }}"></script>
                                {{ $chart3->script() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            {!! $chart4->container() !!}
                        </div>
                        <div class="body">
                            <div>
                                <script src="{{ LarapexChart::cdn() }}"></script>
                                {{ $chart4->script() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            {!! $chart5->container() !!}
                        </div>
                        <div class="body">
                            <div>
                                <script src="{{ LarapexChart::cdn() }}"></script>
                                {{ $chart5->script() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            {!! $chart6->container() !!}
                        </div>
                        <div class="body">
                            <div>
                                <script src="{{ LarapexChart::cdn() }}"></script>
                                {{ $chart6->script() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            {!! $chart7->container() !!}
                        </div>
                        <div class="body">
                            <div>
                                <script src="{{ LarapexChart::cdn() }}"></script>
                                {{ $chart7->script() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            {!! $chart8->container() !!}
                        </div>
                        <div class="body">
                            <div>
                                <script src="{{ LarapexChart::cdn() }}"></script>
                                {{ $chart8->script() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>