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

<body class="light rtl">
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">الادارة</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ادارة الموظفين
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <form id="wizard_with_validation" method="post" action="/Data_collection_dates">
                                    @csrf
                                    @method('PATCH')
                                    <table id="tableGroup" class="table table-bordered table-hover dataTable" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="width:1%">اسم الموظف</th>
                                                <th class="text-center" style="width:1%">رقم الهوية</th>
                                                <th class="text-center" style="width:1%">مكان السكن</th>
                                                <th class="text-center" style="width:1%">رقم الجوال</th>
                                                <th class="text-center" style="width:1%">الايميل</th>
                                                <th class="text-center" style="width:1%">الصلاحية</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->place }}</td>
                                                <td>{{ $user->mobile }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->privilige }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="col-lg-12 text-center">
                                        <button type="submit" id="add" class="btn-hover btn-border-radius color-1">تعديل الموظفين</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>