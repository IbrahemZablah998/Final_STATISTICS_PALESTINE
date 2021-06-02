@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Online Statistics</title>
    <!-- Favicon-->
    <!-- Plugins Core Css -->
    <link href="https://abood1997.000webhostapp.com/assets/css/pages/authentication.css" rel="stylesheet" />
    <link href="https://abood1997.000webhostapp.com/assets/css/custom-form.css" rel="stylesheet">

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
                                <h4 class="page-title">صفحة التحكم</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="card">
                        <div class="body">
                            <form id="wizard_with_validation" action="/users/create" method="post">
                                @csrf
                                <span class="login100-form-title p-b-45">
                                    اضافه موظف جديد
                                </span>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="first_name" value="">
                                        <label>الاسم الاول</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="second_name" value="">
                                        <label>الاسم الثاني</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="third_name" value="">
                                        <label>الاسم الثالث</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="fourth_name" value="">
                                        <label>الاسم الرابع</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="email" value="">
                                        <label>الايميل</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="password" class="squareInput" name="password" value="">
                                        <label>كلمه المرور</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="id" value="">
                                        <label>رقم الهوية</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="phoneNum" value="">
                                        <label>رقم الهاتف</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <select class="squareSelect" name="city">
                                            <option disabled selected>أختر المحافظة</option>
                                            <option>القدس</option>
                                            <option>جنين</option>
                                            <option>طوباس</option>
                                            <option>طولكرم</option>
                                            <option>نابلس</option>
                                            <option>قلقيلية</option>
                                            <option>سلفيت</option>
                                            <option>رام الله والبيرة</option>
                                            <option>أريحا</option>
                                            <option>بيت لحم</option>
                                            <option>الخليل</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <select class="squareSelect" name="privilige" data-placeholder="Select">
                                            <option disabled selected>الصلاحيه</option>
                                            <option value="موظف">موظف</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-center">
                                    <button type="submit" class="btn btn-block btn-primary mt-5">
                                        اضافه
                                    </button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>