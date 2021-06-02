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
                                <h4 class="page-title">مواعيد التسجيل لكل محافظة</h4>
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
                                موعد ادخال البيانات
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <form id="wizard_with_validation" method="post" action="/Data_collection_dates">
                                    @csrf
                                    @method('PATCH')
                                    <table class="table table-bordered" id="myTable">
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="width:1%">اسم المحافظه</th>
                                                <th class="text-center" style="width:1%">موعد بدء ادخال البيانات</th>
                                                <th class="text-center" style="width:1%">اخر موعد لادخال البيانات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="text-center"><input type="text" style="border: 0px solid #000;text-align:center;" readonly id="place0" name="place[]" value="رام الله"></th>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="startFlatpickr0" name="created_atRamallah" value="{{$Ramallahcreated_at}}" placeholder="اختر التاريخ"></td>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="endFlatpickr0" name="ended_atRamallah" value="{{$Ramallahended_at}}" placeholder="اختر التاريخ"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-center"><input type="text" style="border: 0px solid #000;text-align:center;" readonly id="place1" name="place[]" value="نابلس"></th>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="startFlatpickr1" name="created_atNablus" value="{{$Nabluscreated_at}}" placeholder="اختر التاريخ"></td>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="endFlatpickr1" name="ended_atNablus" value="{{$Nablusended_at}}" placeholder="اختر التاريخ"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-center"><input type="text" style="border: 0px solid #000;text-align:center;" readonly id="place2" name="place[]" value="طولكرم"></th>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="startFlatpickr2" name="created_atTulkarem" value="{{$Tulkaremcreated_at}}" placeholder="اختر التاريخ"></td>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="endFlatpickr2" name="ended_atTulkarem" value="{{$Tulkaremended_at}}" placeholder="اختر التاريخ"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-center"><input type="text" style="border: 0px solid #000;text-align:center;" readonly id="place3" name="place[]" value="الخليل"></th>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="startFlatpickr3" name="start[]" value="2021-05-10" placeholder="اختر التاريخ"></td>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="endFlatpickr3" name="end[]" value="2021-05-12" placeholder="اختر التاريخ"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-center"><input type="text" style="border: 0px solid #000;text-align:center;" readonly id="place4" name="place[]" value="القدس"></th>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="startFlatpickr4" name="start[]" value="2021-05-13" placeholder="اختر التاريخ"></td>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="endFlatpickr4" name="end[]" value="2021-05-15" placeholder="اختر التاريخ"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-center"><input type="text" style="border: 0px solid #000;text-align:center;" readonly id="place5" name="place[]" value="جنين"></th>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="startFlatpickr5" name="created_atJnin" value="{{$Jnincreated_at}}" placeholder="اختر التاريخ"></td>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="endFlatpickr5" name="ended_atJnin" value="{{$Jninended_at}}" placeholder="اختر التاريخ"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-center"><input type="text" style="border: 0px solid #000;text-align:center;" readonly id="place6" name="place[]" value="أريحا"></th>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="startFlatpickr6" name="start[]" value="2021-05-19" placeholder="اختر التاريخ"></td>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="endFlatpickr6" name="end[]" value="2021-05-21" placeholder="اختر التاريخ"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-center"><input type="text" style="border: 0px solid #000;text-align:center;" readonly id="place7" name="place[]" value="بيت لحم"></th>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="startFlatpickr7" name="start[]" value="2021-05-22" placeholder="اختر التاريخ"></td>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="endFlatpickr7" name="end[]" value="2021-05-24" placeholder="اختر التاريخ"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-center"><input type="text" style="border: 0px solid #000;text-align:center;" readonly id="place8" name="place[]" value="سلفيت"></th>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="startFlatpickr8" name="start[]" value="2021-05-25" placeholder="اختر التاريخ"></td>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="endFlatpickr8" name="end[]" value="2021-05-27" placeholder="اختر التاريخ"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-center"><input type="text" style="border: 0px solid #000;text-align:center;" readonly id="place9" name="place[]" value="قلقيلية"></th>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="startFlatpickr9" name="start[]" value="2021-05-28" placeholder="اختر التاريخ"></td>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="endFlatpickr9" name="end[]" value="2021-05-30" placeholder="اختر التاريخ"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-center"><input type="text" style="border: 0px solid #000;text-align:center;" readonly id="place10" name="place[]" value="طوباس"></th>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="startFlatpickr10" name="start[]" value="2021-05-26" placeholder="اختر التاريخ"></td>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="endFlatpickr10" name="end[]" value="2021-05-29" placeholder="اختر التاريخ"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-center"><input type="text" style="border: 0px solid #000;text-align:center;" readonly id="place11" name="place[]" value="البيرة"></th>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="startFlatpickr11" name="start[]" value="2021-05-27" placeholder="اختر التاريخ"></td>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="endFlatpickr11" name="end[]" value="2021-07-09" placeholder="اختر التاريخ"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-center"><input type="text" style="border: 0px solid #000;text-align:center;" readonly id="place12" name="place[]" value="البصرة"></th>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="startFlatpickr12" name="start[]" value="2021-05-29" placeholder="اختر التاريخ"></td>
                                                <td><input type="Date" class="squareInput flatpickr flatpickr-input active" id="endFlatpickr12" name="end[]" value="2021-07-10" placeholder="اختر التاريخ"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="col-lg-12 text-center">
                                        <button type="submit" id="add" class="btn-hover btn-border-radius color-1">تعديل المواعيد</button>
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