<!DOCTYPE html>
<html lang="en" dir="rtl">
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
                                <h4 class="page-title">الجدول الرئيسي</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="../../index-2.html">
                                    <i class="fas fa-home"></i> الصفحة الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">الجداول</a>
                            </li>
                            <li class="breadcrumb-item active">الجدول</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                البيانات
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="#" onClick="return false;">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id="tableGroup" class="table table-bordered table-hover dataTable" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>اسم المواطن</th>
                                            <th>رقم الهوية</th>
                                            <th>المحافظة</th>
                                            <th>العمر</th>
                                            <th>الديانة</th>
                                            <th>الالتحاق بالتعليم</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($family__data_learnings as $family__data_learning)
                                        <tr>
                                            <td>{{ $family__data_learning->fullName }}</td>
                                            <td>{{ $family__data_learning->user_id }}</td>
                                            <td>{{ $family__data_learning->place }}</td>
                                            <td>{{ $family__data_learning->age }}</td>
                                            <td>{{ $family__data_learning->religion }}</td>
                                            <td>{{ $family__data_learning->enroll_education }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>