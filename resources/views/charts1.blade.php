<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chart Sample</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
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

<body class="h-screen bg-gray-100">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="{{asset('assets/images/loading.png')}}" width="20" height="20" alt="admin">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <div class="overlay"></div>


    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="#" onClick="return false;" class="bars"></a>
                <a class="navbar-brand" href="">
                    <img src="{{asset('assets/images/logo.png')}}" alt="" />
                    <span class="logo-name">statistics</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="pull-right">
                    <li>
                        <a href="#" onClick="return false;" class="sidemenu-collapse">
                            <i class="material-icons">reorder</i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Full Screen Button -->
                    <li class="fullscreen">
                        <a href="javascript:;" class="fullscreen-btn">
                            <i class="fas fa-expand"></i>
                        </a>
                    </li>
                    <!-- #END# Notifications-->
                    <li class="dropdown user_profile">
                        <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <img src="{{asset('assets/images/prof.jpg')}}" width="32" height="32" alt="User">
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="body">
                                <ul class="user_dw_menu">
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">person</i>الملف الشخصي
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">feedback</i>رأيك يهمنا
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">help</i>مساعدة
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">power_settings_new</i>تسجيل الخروج
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right">
                        <a href="#" onClick="return false;" class="js-right-sidebar" data-close="true">
                            <i class="fas fa-cog"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <div>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="sidebar-user-panel active">
                        <div class="user-panel">
                            <div class=" image">
                                <img src="{{asset('assets/images/prof.jpg')}}" class="img-circle user-img-circle" alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> Abdullah Allan </div>
                            <div class="profile-usertitle-job ">Manager </div>
                        </div>
                    </li>
                    <li class="active">
                        <a href="{{url('/index1')}}" onClick="return false;">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="fab fa-wpforms"></i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="">Basic Form</a>
                            </li>
                            <li>
                                <a href="">Advanced Form</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="fas fa-table"></i>
                            <span>Tables</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/gropTable')}}">gropTable</a>
                            </li>
                            <li>
                                <a href="{{url('/exportedTable')}}">Export Table</a>
                            </li>


                        </ul>
                    </li>

                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="fas fa-chart-line"></i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/charts1')}}">charts1</a>

                            </li>
                            <li>
                                <a href="{{url('/charts2')}}">chart2</a>
                            </li>

                            <li>
                                <a href="{{url('/floatChart')}}">float chart</a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="sidebar-user-panel active">
                        <div class="user-panel">
                            <div class=" image">
                                <img src="{{asset('assets/images/prof.jpg')}}" class="img-circle user-img-circle" alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> Abdullah Allan </div>
                            <div class="profile-usertitle-job ">Manager </div>
                        </div>
                    </li>
                    <li class="active">
                        <a href="{{url('/index1')}}" onClick="return false;">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="fab fa-wpforms"></i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="">Basic Form</a>
                            </li>
                            <li>
                                <a href="">Advanced Form</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="fas fa-table"></i>
                            <span>Tables</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/gropTable')}}">gropTable</a>
                            </li>
                            <li>
                                <a href="{{url('/exportedTable')}}">Export Table</a>
                            </li>


                        </ul>
                    </li>

                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="fas fa-chart-line"></i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/charts1')}}">charts1</a>

                            </li>
                            <li>
                                <a href="{{url('/charts2')}}">chart2</a>
                            </li>

                            <li>
                                <a href="{{url('/floatChart')}}">float chart</a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation">
                    <a href="#skins" data-toggle="tab" class="active">SKINS</a>
                </li>
                <li role="presentation">
                    <!-- <a href="#settings" data-toggle="tab">SETTINGS</a> -->
                </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane in active in active stretchLeft" id="skins">
                    <div class="demo-skin">
                        <div class="rightSetting">
                        </div>
                        <div class="rightSetting">
                            <p>SIDEBAR MENU COLORS</p>
                            <button type="button" class="btn btn-sidebar-light btn-border-radius p-l-20 p-r-20">Light</button>
                            <button type="button" class="btn btn-sidebar-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
                        </div>
                        <div class="rightSetting">
                            <p>THEME COLORS</p>
                            <button type="button" class="btn btn-theme-light btn-border-radius p-l-20 p-r-20">Light</button>
                            <button type="button" class="btn btn-theme-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
                        </div>
                        <div class="rightSetting">
                            <p>SKINS</p>
                            <ul class="demo-choose-skin choose-theme list-unstyled">
                                <li data-theme="black" class="actived">
                                    <div class="black-theme"></div>
                                </li>
                                <li data-theme="white">
                                    <div class="white-theme white-theme-border"></div>
                                </li>
                                <li data-theme="purple">
                                    <div class="purple-theme"></div>
                                </li>
                                <li data-theme="blue">
                                    <div class="blue-theme"></div>
                                </li>
                                <li data-theme="cyan">
                                    <div class="cyan-theme"></div>
                                </li>
                                <li data-theme="green">
                                    <div class="green-theme"></div>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange-theme"></div>
                                </li>
                            </ul>
                        </div>
                        <div class="rightSetting">
                            <p>Disk Space</p>
                            <div class="sidebar-progress">
                                <div class="progress m-t-20">
                                    <div class="progress-bar l-bg-cyan shadow-style width-per-45" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="progress-description">
                                    <small>26% remaining</small>
                                </span>
                            </div>
                        </div>
                        <div class="rightSetting">
                            <p>Server Load</p>
                            <div class="sidebar-progress">
                                <div class="progress m-t-20">
                                    <div class="progress-bar l-bg-orange shadow-style width-per-63" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="progress-description">
                                    <small>Highly Loaded</small>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane stretchRight" id="settings">
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row">
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
                                {!! $chart->container() !!}
                            </div>
                            <div class="body">
                                <div >
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



        <!-- Plugins Js -->
        <script src="{{asset('assets/js/app.min.js')}}"></script>
        <script src="{{asset('assets/js/chart.min.js')}}"></script>
        <!-- Echart Js -->
        <script src="{{asset('assets/js/bundles/echart/echarts.js')}}"></script>
        <script src="{{asset('assets/js/pages/charts/echarts.js')}}"></script>
        <!-- Custom Js -->
        <script src="{{asset('assets/js/admin.js')}}"></script>
</body>

</html>