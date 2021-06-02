<!doctype html>
<html lang="en">

<body class="h-screen bg-gray-100z ">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-40">
                <img class="loading-img-spin" src="{{asset('assets/images/loading.png')}}" width="30" height="30" alt="admin">
            </div>
            <p>الرجاء الانتظار...</p>
        </div>
    </div>

    <!-- Top navbar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="">
                    <span class="logo-name">الاحصاء الفلسطيني</span>
                    <img src="{{asset('assets/images/logo.png')}}" alt="" />
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <!-- slide out navbar -->
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
                    <!-- Profile setting -->
                    <li class="dropdown user_profile">
                        <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <img src="{{asset('assets/images/prof.jpg')}}" width="32" height="32" alt="User">
                        </a>
                        <ul class="dropdown-menu pullDown ">
                            <li class="body">
                                <ul class="user_dw_menu">
                                    <li>
                                        <a href="{{ URL('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="material-icons">power_settings_new</i>تسجيل الخروج
                                        </a>
                                        <form id="logout-form" action="{{ URL('logout') }}" method="get" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- Pull setting -->
                    <li class="pull-right">
                        <a href="#" onClick="return false;" class="js-right-sidebar" data-close="true">
                            <i class="fas fa-cog"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div>
        <aside id="leftsidebar" class="sidebar">
            <div class="menu rtl">
                <ul class="list">
                    <li class="sidebar-user-panel active">
                        <div class="user-panel">
                            <div class=" image">
                                <img src="{{asset('assets/images/prof.jpg')}}" class="img-circle user-img-circle" alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> Graduation Team </div>
                            <div class="profile-usertitle-job ">المسؤول </div>
                        </div>
                    </li>
                    <li class="active">
                        <a href="{{url('/charts1')}}" onClick="return true;">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>الصفحة الرئيسية</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{url('/Data_collection_dates')}}" onClick="return true;">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>مواعيد جمع البيانات</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>ادارة الموظفين</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/users/create')}}">اضافة موظف</a>
                            </li>
                            <li>
                                <a href="{{url('/users/show')}}">عرض الموظفين</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="fas fa-table"></i>
                            <span>بيانات المواطنين في فلسطين</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/gropTable')}}">بيانات المواطنين</a>
                            </li>
                            <li>
                                <a href="{{url('/exportedTable')}}">تخزين بيانات المواطنين</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="fas fa-chart-line"></i>
                            <span> الرسوم البيانية في فلسطين</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/charts1')}}">الرسوم البيانية الاولى في فلسطين</a>

                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="fas fa-chart-line"></i>
                            <span>البيانات والرسوم البيانية في نابلس</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/nablus')}}">الرسوم البيانية في مدينة نابلس</a>
                            </li>
                            <li>
                                <a href="{{url('/gropTableNablus')}}">بيانات المواطنين</a>
                            </li>
                            <li>
                                <a href="{{url('/exportedTableNablus')}}">تخزين بيانات المواطنين</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="fas fa-chart-line"></i>
                            <span>البيانات والرسوم البيانية في رام الله</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/ramallah')}}">الرسوم البيانية في مدينة رام الله</a>
                            </li>
                            <li>
                                <a href="{{url('/gropTableramallah')}}">بيانات المواطنين</a>
                            </li>
                            <li>
                                <a href="{{url('/exportedTableramallah')}}">تخزين بيانات المواطنين</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="fas fa-chart-line"></i>
                            <span>البيانات والرسوم البيانية في الخليل</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/hebron')}}">الرسوم البيانية في مدينة الخليل</a>
                            </li>
                            <li>
                                <a href="{{url('/gropTablehebron')}}">بيانات المواطنين</a>
                            </li>
                            <li>
                                <a href="{{url('/exportedTablehebron')}}">تخزين بيانات المواطنين</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="fas fa-chart-line"></i>
                            <span>البيانات والرسوم البيانية في اريحا</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/jericho')}}">الرسوم البيانية في مدينة اريحا</a>
                            </li>
                            <li>
                                <a href="{{url('/gropTablejericho')}}">بيانات المواطنين</a>
                            </li>
                            <li>
                                <a href="{{url('/exportedTablejericho')}}">تخزين بيانات المواطنين</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="fas fa-chart-line"></i>
                            <span>البيانات والرسوم البيانية في قلقيلية</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/qalqilya')}}">الرسوم البيانية في مدينة قلقيلية</a>
                            </li>
                            <li>
                                <a href="{{url('/gropTableqalqilya')}}">بيانات المواطنين</a>
                            </li>
                            <li>
                                <a href="{{url('/exportedTableqalqilya')}}">تخزين بيانات المواطنين</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="fas fa-chart-line"></i>
                            <span>البيانات والرسوم البيانية في جنين</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/jenin')}}">الرسوم البيانية في مدينة جنين</a>
                            </li>
                            <li>
                                <a href="{{url('/gropTablejenin')}}">بيانات المواطنين</a>
                            </li>
                            <li>
                                <a href="{{url('/exportedTablejenin')}}">تخزين بيانات المواطنين</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i class="fas fa-chart-line"></i>
                            <span>البيانات والرسوم البيانية في طولكرم</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/tulkarm')}}">الرسوم البيانية في مدينة طولكرم</a>
                            </li>
                            <li>
                                <a href="{{url('/gropTabletulkarm')}}">بيانات المواطنين</a>
                            </li>
                            <li>
                                <a href="{{url('/exportedTabletulkarm')}}">تخزين بيانات المواطنين</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>

        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-left" role="tablist">
                <li role="presentation">
                    <a href="#skins" data-toggle="tab" class="active">SKINS</a>
                </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane in active in active stretchLeft" id="skins">
                    <div class="demo-skin">
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
                    </div>
                </div>
            </div>
        </aside>

        <script src="{{asset('assets/js/app.min.js')}}"></script>
        <script src="{{asset('assets/js/chart.min.js')}}"></script>
        <script src="{{asset('assets/js/bundles/echart/echarts.js')}}"></script>
        <script src="{{asset('assets/js/pages/charts/echarts.js')}}"></script>
        <script src="{{asset('assets/js/admin.js')}}"></script>
        <script src="{{asset('assets/js/table.min.js')}}"></script>
        <script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
        <script src="{{asset('assets/js/bundles/export-tables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/js/bundles/export-tables/buttons.flash.min.js')}}"></script>
        <script src="{{asset('assets/js/bundles/export-tables/jszip.min.js')}}"></script>
        <script src="{{asset('assets/js/bundles/export-tables/pdfmake.min.js')}}"></script>
        <script src="{{asset('assets/js/bundles/export-tables/vfs_fonts.js')}}"></script>
        <script src="{{asset('assets/js/bundles/export-tables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('assets/js/bundles/export-tables/buttons.print.min.js')}}"></script>
        <script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
        <script src="{{asset('assets/js/pages/medias/carousel.js')}}"></script>
        <script src="{{asset('assets/js/pages/charts/jquery-knob.js')}}"></script>
        <script src="{{asset('assets/js/pages/todo/todo.js')}}"></script>
        <script src="{{asset('assets/js/pages/widgets/widget.js')}}"></script>
    </div>
</body>

</html>