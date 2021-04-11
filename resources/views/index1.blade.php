<!DOCTYPE html>
<html lang="en" dir="rtl">


<!-- Mirrored from www.radixtouch.in/templates/admin/lorax/source/rtl/pages/examples/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Nov 2020 20:34:31 GMT -->
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

    <link href="{{asset('assets/css/styles/all-themes.css')}}" rel="stylesheet" />


<link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
<!-- Plugins Core Css -->
<link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/js/bundles/materialize-rtl/materialize-rtl.min.css')}}" rel="stylesheet">
<!-- Custom Css -->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
<!-- You can choose a theme from css/styles instead of get all themes -->
<link href="{{asset('assets/css/styles/all-themes.css')}}" rel="stylesheet" />
	<style>
		.contact100-form-checkbox .form-check .form-check-label,
		.wrap-input100 .material-icons {
			text-align: right;
		}
		.default-select option{
			color:#000;
		}
	</style>
</head>

<body class="light rtl">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="{{asset('assets/images/loading.png')}}" width="20" height="20" alt="admin">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false"></a>
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
                    
                    <li class="dropdown user_profile">
                        <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                            role="button">
                            <img src="{{asset('assets/images/prof.jpg')}}" width="32" height="32" alt="User">
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="body">
                                <ul class="user_dw_menu">
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">person</i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">feedback</i>Feedback
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">help</i>Help
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">power_settings_new</i>Logout
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
                                <img src="{{asset('assets/images/prof.jpg')}}" class="img-circle user-img-circle"
                                    alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> Abdullah Allan </div>
                            <div class="profile-usertitle-job ">Manager </div>
                        </div>
                    </li>
                    <li class="active">
                        <a href="{{url('/index1')}}" onClick="return false;" >
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <!-- <a href="file:///C:/AppServ/www/lorax/pages/examples/profile.html" class="txt1">
                            <i class="fas fa-address-book"></i>
                            <span>Profile</span>
                        </a> -->
                      
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
                   
                    <!-- <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="fas fa-paw"></i>
                            <span>Icons</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../icons/material-icons.html">Material Icons</a>
                            </li>
                            <li>
                                <a href="../icons/font-awesome.html">Font Awesome</a>
                            </li>
                        </ul>
                    </li> -->
                  
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
                            <button type="button"
                                class="btn btn-sidebar-light btn-border-radius p-l-20 p-r-20">Light</button>
                            <button type="button"
                                class="btn btn-sidebar-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
                        </div>
                        <div class="rightSetting">
                            <p>THEME COLORS</p>
                            <button type="button"
                                class="btn btn-theme-light btn-border-radius p-l-20 p-r-20">Light</button>
                            <button type="button"
                                class="btn btn-theme-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
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
                       
                       
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane stretchRight" id="settings">
                   
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </div>
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



    <script src="{{asset('assets/js/app.min.js')}}"></script>
    <script src="{{asset('assets/js/chart.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('assets/js/admin.js')}}"></script>
    <!-- Widget Js -->
    <!-- Carousel Js -->
    <script src="{{asset('assets/js/pages/medias/carousel.js')}}"></script>
    <!-- Knob Js -->
    <script src="{{asset('assets/js/pages/charts/jquery-knob.js')}}"></script>
    <script src="{{asset('assets/js/pages/todo/todo.js')}}"></script>
    <script src="{{asset('assets/js/pages/widgets/widget.js')}}"></script>






   
</body>



</html>