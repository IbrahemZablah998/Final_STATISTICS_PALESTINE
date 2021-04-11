<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@extends('template.navbar')

<!-- Mirrored from www.radixtouch.in/templates/admin/lorax/source/rtl/pages/dashboard/dashboard3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Nov 2020 20:17:32 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Online Statistics</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/js/bundles/materialize-rtl/materialize-rtl.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/form.min.css')}}" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="{{asset('assets/css/styles/all-themes.css')}}" rel="stylesheet" />
    <style>
        select {
            display: block !important;
        }

        .squareInput,
        .squareSelect {
            padding-right: 10px !important;
            margin-top: 30px !important;
            color: black !important;
            height: 40px !important;
            width: 95% !important;
            border: solid 1px #999 !important;
            font-size: 14px !important;
            padding-left: 10px !important;
            border-radius: 10px !important;
            /* #2184be----اللون الاخضر */
        }

        .squareInput:focus,
        .squareSelect:focus {
            border: solid 1px red !important;
        }

        .squareSelect {
            width: 99% !important;
            color: #999 !important;
        }

        label {
            position: absolute !important;
            top: -7px !important;
            font-size: 12px !important;
            white-space: nowrap !important;
            background: #fff !important;
            text-align: left !important;
            right: 15px !important;
            padding: 0 5px !important;
            color: #999 !important;
            pointer-events: none !important;
            margin-top: 15px !important;
        }
    </style>

</head>
<script>
    function myCreateFunction() {
        var table = document.getElementById("myTable");
        var row = table.insertRow(0);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        cell1.innerHTML = "NEW CELL1";
        cell2.innerHTML = "NEW CELL2";
    }

    function myDeleteFunction() {
        document.getElementById("myTable").deleteRow(0);
    }
</script>

<body class="light rtl side-closed submenu-closed">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <!-- عزيزي المواطن,
                    امامك استبانه -->
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <center>
                            @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-block mt-3 mb-0">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                            @endif
                            @if (count($errors) > 0)
                            @foreach($errors->all() as $error)
                            <div class="alert alert-danger mt-0 mb-2">
                                {{ $error }}
                            </div>
                            @endforeach
                            @endif
                        </center>
                        <form id="wizard_with_validation" method="post" action="/citizen">
                            @csrf
                            <input type="submit" class="btn btn-scusess" value="حفظ البيانات">
                            <h3>لمحه عامه</h3>
                            <fieldset>

                                <p>يعتبر التعداد العام للسكان والمساكن من أهم مصادر الإحصاءات السكانية حيث يمكن من خلاله
                                    تجسيد ومعرفة الوقائع الاجتماعية والاقتصادية للسكان في لحظه زمنية محددة
                                    ويمثل انجازه لبنه اساسيه في عمليه بناء الدوله.<br>

                                    <br> ويهدف التعداد العام للسكان والمساكن إلى:

                                    <br>1-جمع ونشر المعلومات الديمو جرافية والاجتماعية والاقتصادية للسكان بهدف توفير متطلبات الدولة
                                    <br> 2-واحتياجات المخططين والباحثين من البيانات الأساسية عن السكان والمساكن التي تتطلبها خطط التنمية.
                                    <br>3-توفير إطار حديث لكافة الأبحاث الإحصائية المتخصصة التي تجرى بأسلوب العينة.
                                    إيجاد قاعدة عريضة من البيانات واستخدامها كأساس موثوق به في إجراء الدراسات
                                    <br>والبحوث التي تتطلبها برامج التنمية الاقتصادية والاجتماعية والإدارية .

                                <pre>
                                    <b>عزيزتي المواطن , عزيزي المواطنة </b>
                                    امامك استبانه التعداد السكاني , شاركنا في جمع البيانات وقم بالاجابه الصحيحه عن الاسئله وملئ البيانات في الاماكن المخصصه لها
                                    ملؤك الصحيح للبيانات يساعدنا في وضع الخطط والبرامج المستقبليه لمواصله عمليه التنميه والتطوير والبناء,وتقديم افضل الخدمات لابناء شعبنا الفلسطيني وقطاعاته المختلفه
                                    مع العلم بان أي محاوله لتزوير البيانات تعرض صاحبها للمسائله القانونيه
                                    مع تمنياتي للجميع بالصحة والسلامة

                                 </pre>

                                </p>
                            </fieldset>

                            <h3>بيانات افراد الاسرة</h3>
                            <fieldset>

                                <button onclick="myCreateFunction()">Create row</button>
                                <button onclick="myDeleteFunction()">Delete row</button>

                                <div class="body table-responsive">
                                    <table class="table table-bordered" style="overflow-x: scroll !important;min-width:300% !important;">
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="width:1%">رقم الفرد</th>
                                                <th class="text-center" style="width:10%">الاسم الرباعي</th>
                                                <th class="text-center" style="width:6%">العلاقه برب الاسره</th>
                                                <th class="text-center" style="width:4%">الجنس</th>
                                                <th class="text-center" style="width:5%">العمر بالسنوات الكامله(الاطفال الاقل من سنه يوضع 0)</th>
                                                <th class="text-center" style="width:5%">الجنسيه الاصليه</th>
                                                <th class="text-center" style="width:5%">رقم الهويه</th>
                                                <th class="text-center" style="width:4%">مكان اقامه الام وقت الولاده</th>
                                                <th class="text-center" style="width:4%">مكان الاقامه المعتاده الحاليه</th>
                                                <th class="text-center" style="width:5%">مده الاقامه في مكان الاقامه الحاليه المعتاده بالسنوات الكامله</th>
                                                <th class="text-center" style="width:5%">مكان الاقامه المعتاده السابقه للحاليه(ان وجدت)</th>
                                                <th class="text-center" style="width:10%">سبب تغيير مكان الاقامه السابق</th>
                                                <th class="text-center" style="width:4%">الديانه</th>
                                                <th class="text-center" style="width:7%">حاله اللجوء</th>
                                                <th class="text-center" style="width:7%">نتيجه لحاله صحيه هل لديه صعوبه في...؟</th>
                                                <th class="text-center" style="width:7%">التامين الصحي</th>
                                                <th class="text-center" style="width:5%">هل يعاني من اي مرض مزمن بحسب تشخيص طبي,ويتلقى علاج بشكل مستمر</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <th scope="row">1</th>
                                                <td><input type="text" class="" name="FullName" value="{{ $id->name ?? ''}}"></td>
                                                <td><select class="" data-placeholder="Select" name="relationship">
                                                        <!-- <option disabled selected>16-المصدر الرئيسي للطاقه المستخدمة في التدفئة</option> -->
                                                        <option {{ ($ff->relationShip ?? '' =='اخ/اخت')? "selected" : '' }}>اخ/اخت</option>
                                                        <option {{ ($ff->relationShip ?? '' =='ابن/ابنه')? "selected" : '' }}>ابن/ابنه</option>
                                                        <option {{ ($ff->relationShip ?? '' =='زوجه/زوج')? "selected" : '' }}>زوجه/زوج</option>
                                                        <option {{ ($ff->relationShip ?? '' =='جد/جده')? "selected" : '' }}>جد/جده</option>
                                                        <option {{ ($ff->relationShip ?? '' =='حفيد/حفيده')? "selected" : '' }}>حفيد/حفيده</option>
                                                        <option {{ ($ff->relationShip ?? '' =='زوج ابن/زوج بنت')? "selected" : '' }}>زوج ابن/زوج بنت</option>
                                                        <option {{ ($ff->relationShip ?? '' =='اقرباء اخرون')? "selected" : '' }}>اقرباء اخرون</option>
                                                        <option {{ ($ff->relationShip ?? '' =='اخرون')? "selected" : '' }}>اخرون</option>

                                                    </select>
                                                </td>
                                                <td><select class="" data-placeholder="Select" name="gender">
                                                        <!-- <option disabled selected>16-المصدر الرئيسي للطاقه المستخدمة في التدفئة</option> -->
                                                        <option {{ ($ff->gender ?? '' =='انثى')? "selected" : '' }}>انثى</option>
                                                        <option {{ ($ff->gender ?? '' =='ذكر')? "selected" : '' }}>ذكر</option>

                                                    </select>
                                                </td>
                                                <td><input type="number" class="" name="age" value="{{$ff->age ?? ''}}"></td>
                                                <td><input type="text" class="" name="nationality" value="{{$ff->nationality ?? ''}}"></td>
                                                <td><input type="number" class="" name="id" value="{{ $id->id  ?? ''}}"></td>
                                                <td><input type="text" class="" name="placeOfMotherTimeInvidualBirth" value="{{$ff->placeOfMotherTimeInvidualBirth ?? ''}}"></td>
                                                <td><input type="text" class="" name="place" value="{{ $id->place  ?? ''}}"></td>
                                                <td><input type="number" class="" name="periodAt_theCurrent_residenceIn_fullTime" value="{{$ff->periodAt_theCurrent_residenceIn_fullTime ?? ''}}"></td>
                                                <td><input type="text" class="" name="previous_place" value="{{$ff->previous_place ?? ''}}"></td>

                                                <td><select class="" data-placeholder="Select" name="reason_change_residence">
                                                        <!-- <option disabled selected>16-المصدر الرئيسي للطاقه المستخدمة في التدفئة</option> -->
                                                        <option {{ ($ff->reason_change_residence ?? '' =='العمل')? "selected" : '' }}>العمل</option>
                                                        <option {{ ($ff->reason_change_residence ?? '' =='الدراسه')? "selected" : '' }}>الدراسه</option>
                                                        <option {{ ($ff->reason_change_residence ?? '' =='الزواج')? "selected" : '' }}>الزواج</option>
                                                        <option {{ ($ff->reason_change_residence ?? '' =='المرافقه')? "selected" : '' }}>المرافقه</option>
                                                        <option {{ ($ff->reason_change_residence ?? '' =='التهجير')? "selected" : '' }}>التهجير</option>
                                                        <option {{ ($ff->reason_change_residence ?? '' =='العوده')? "selected" : '' }}>العوده</option>
                                                        <option {{ ($ff->reason_change_residence ?? '' =='الجدار')? "selected" : '' }}>الجدار</option>
                                                        <option {{ ($ff->reason_change_residence ?? '' =='الحفاظ على الهويه المقدسه')? "selected" : '' }}>الحفاظ على الهويه المقدسه</option>
                                                        <option {{ ($ff->reason_change_residence ?? '' =='اجراءات اسرائيليه')? "selected" : '' }}>اجراءات اسرائيليه</option>
                                                        <option {{ ($ff->reason_change_residence ?? '' =='اخرى')? "selected" : '' }}>اخرى</option>

                                                    </select>
                                                </td>

                                                <td><select class="" data-placeholder="Select" name="religion">
                                                        <!-- <option disabled selected>16-المصدر الرئيسي للطاقه المستخدمة في التدفئة</option> -->
                                                        <option {{ ($ff->religion ?? '' =='مسيحي')? "selected" : '' }}>مسيحي</option>
                                                        <option {{ ($ff->religion ?? '' =='مسلم')? "selected" : '' }}>مسلم</option>
                                                        <option {{ ($ff->religion ?? '' =='اخرى')? "selected" : '' }}>اخرى</option>

                                                    </select>
                                                </td>

                                                <td><select class="" data-placeholder="Select" name="asylum_status">
                                                        <!-- <option disabled selected>16-المصدر الرئيسي للطاقه المستخدمة في التدفئة</option> -->
                                                        <option {{ ($ff->asylum_status ?? '' =='لاجئ مسجل')? "selected" : '' }}>لاجئ مسجل</option>
                                                        <option {{ ($ff->asylum_status ?? '' =='لاجئ غير مسجل')? "selected" : '' }}>لاجئ غير مسجل</option>
                                                        <option {{ ($ff->asylum_status ?? '' =='ليس لاجئا')? "selected" : '' }}>ليس لاجئا</option>

                                                    </select>
                                                </td>

                                                <td><select class="" data-placeholder="Select" name="healthy_condition_difficulties">
                                                        <!-- <option disabled selected>16-المصدر الرئيسي للطاقه المستخدمة في التدفئة</option> -->
                                                        <option {{ ($ff->healthy_condition_difficulties ?? '' =='لا يوجد')? "selected" : '' }}>لا يوجد</option>
                                                        <option {{ ($ff->healthy_condition_difficulties ?? '' =='نعم, بعض الصعوبه')? "selected" : '' }}>نعم, بعض الصعوبه</option>
                                                        <option {{ ($ff->healthy_condition_difficulties ?? '' =='نعم,صعوبه كبيره')? "selected" : '' }}>نعم,صعوبه كبيره</option>
                                                        <option {{ ($ff->healthy_condition_difficulties ?? '' =='لا يستطيع مطلقا')? "selected" : '' }}>لا يستطيع مطلقا</option>

                                                    </select>
                                                </td>

                                                <td><select class="" data-placeholder="Select" name="health_insurance">
                                                        <!-- <option disabled selected>16-المصدر الرئيسي للطاقه المستخدمة في التدفئة</option> -->
                                                        <option {{ ($ff->health_insurance ?? '' =='لا يوجد')? "selected" : '' }}>لا يوجد</option>
                                                        <option {{ ($ff->health_insurance ?? '' =='حكومي فقط')? "selected" : '' }}>حكومي فقط</option>
                                                        <option {{ ($ff->health_insurance ?? '' =='وكاله فقط')? "selected" : '' }}>وكاله فقط</option>
                                                        <option {{ ($ff->health_insurance ?? '' =='خاص فقط')? "selected" : '' }}>خاص فقط</option>
                                                        <option {{ ($ff->health_insurance ?? '' =='حكومي و وكاله')? "selected" : '' }}>حكومي و وكاله</option>
                                                        <option {{ ($ff->health_insurance ?? '' =='حكومي و خاص')? "selected" : '' }}>حكومي و خاص</option>
                                                        <option {{ ($ff->health_insurance ?? '' =='وكاله وخاص')? "selected" : '' }}>وكاله وخاص</option>
                                                        <option {{ ($ff->health_insurance ?? '' =='اسرائيلي')? "selected" : '' }}>اسرائيلي</option>
                                                        <option {{ ($ff->health_insurance ?? '' =='اخرى')? "selected" : '' }}>اخرى</option>

                                                    </select>
                                                </td>

                                                <td><select class="" data-placeholder="Select" name="disease">
                                                        <!-- <option disabled selected>16-المصدر الرئيسي للطاقه المستخدمة في التدفئة</option> -->
                                                        <option {{ ($ff->disease ?? '' =='نعم')? "selected" : '' }}>نعم</option>
                                                        <option {{ ($ff->disease ?? '' =='لا')? "selected" : '' }}>لا</option>


                                                    </select>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </fieldset>

                            <h3>تابع-بيانات افراد الاسرة</h3>
                            <fieldset>

                                <div class="body table-responsive">
                                    <table class="table table-bordered" style="overflow-x: scroll !important;min-width:500% !important;">
                                        <thead>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>

                                                <td colspan="2" class="align-center">المستوى التعليمي و التخصص</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td colspan="2" class="align-center">للعاملين باجر</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td colspan="2" class="align-center">الولادات طيله الحياه الزوجيه(للنساء14 فاكثر)ٍ</td>
                                                <td colspan="2" class="align-center">الولادات خلال ال12 شهر السابقه(للنساء14-54)ٍ</td>
                                            </tr>
                                            <tr>
                                                <th class="text-center" style="width:1%">التسلسل</th>
                                                <th class="text-center" style="width:3%">(للافراد 3 سنوات فاكثر) الالتحاق بالتعليم</th>
                                                <th class="text-center" style="width:4%">(للافراد 5 سنوات فاكثر) عدد سنوات الدراسه التي اتمها الفرد بنجاح في التعليم النظامي</th>
                                                <th class="text-center" style="width:3%">المستوى التعليمي</th>
                                                <th class="text-center" style="width:3%"> التخصص</th>
                                                <th class="text-center" style="width:4%">مكان الحصول على اعلى مؤهل علمي</th>
                                                <th class="text-center" style="width:5%">التاهيل المهني التقني الذي حصل عليه الفرد</th>
                                                <th class="text-center" style="width:5%">نوع العلاقه بقوه العمل</th>
                                                <th class="text-center" style="width:2%">هل يرغب ومستعد للعمل ساعات اضافيه؟</th>
                                                <th class="text-center" style="width:3%">المهنه الرئيسيه الحاليه/السابقه</th>
                                                <th class="text-center" style="width:3%">النشاط الاقتصادي الرئيسي الحالي/السابق</th>
                                                <th class="text-center" style="width:4%">القطاع</th>
                                                <th class="text-center" style="width:4%">مكان العمل</th>
                                                <th class="text-center" style="width:4%">الحاله العمليه الرئيسيه</th>
                                                <th class="text-center" style="width:6%">هل يقوم صاحب العمل بتوفير اي من الحقوق التاليه</th>
                                                <th class="text-center" style="width:3%">الحاله الزوجية</th>
                                                <th class="text-center" style="width:2%">العمر عند الزواج الاول بالسنوات الكامله</th>
                                                <th class="text-center" style="width:2%">مده الحياه الزوجيه بالسنوات الكامله</th>
                                                <th class="text-center" style="width:2%">عدد من ولدو احياء</th>
                                                <th class="text-center" style="width:2%">عدد الباقين منهم على قيد الحياه</th>
                                                <th class="text-center" style="width:2%">عدد من ولدو احياء</th>
                                                <th class="text-center" style="width:2%">عدد الباقين منهم على قيد الحياه</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>

                                                <td><select class="" data-placeholder="Select" name="enroll_education">
                                                        <option {{ ($ffL->enroll_education ?? '' =='ملتحق برياض اطفال')? "selected" : '' }}>ملتحق برياض اطفال</option>
                                                        <option {{ ($ffL->enroll_education ?? '' =='ملتحق حاليا')? "selected" : '' }}>ملتحق حاليا</option>
                                                        <option {{ ($ffL->enroll_education ?? '' =='التحق وترك')? "selected" : '' }}>التحق وترك</option>
                                                        <option {{ ($ffL->enroll_education ?? '' =='التحق وتخرج')? "selected" : '' }}>التحق وتخرج</option>
                                                        <option {{ ($ffL->enroll_education ?? '' =='لم يلتحق ابدا')? "selected" : '' }}>لم يلتحق ابدا</option>

                                                    </select>
                                                </td>
                                                <td><input type="number" class="" name="number_of_years_schooling" value="{{ $ffL->number_of_years_schooling ?? ''}}">
                                                </td>
                                                <td><select class="" data-placeholder="Select" name="educational_major">

                                                        <option {{ ($ffL->educational_major ?? '' =='امي')? "selected" : '' }}>امي</option>
                                                        <option {{ ($ffL->educational_major ?? '' =='ملم')? "selected" : '' }}>ملم</option>
                                                        <option {{ ($ffL->educational_major ?? '' =='ابتدائي')? "selected" : '' }}>ابتدائي</option>
                                                        <option {{ ($ffL->educational_major ?? '' =='اعدادي')? "selected" : '' }}>اعدادي</option>
                                                        <option {{ ($ffL->educational_major ?? '' =='ثانوي')? "selected" : '' }}>ثانوي</option>
                                                        <option {{ ($ffL->educational_major ?? '' =='دبلوم متوسط')? "selected" : '' }}>دبلوم متوسط</option>
                                                        <option {{ ($ffL->educational_major ?? '' =='بكالوريوس')? "selected" : '' }}>بكالوريوس</option>
                                                        <option {{ ($ffL->educational_major ?? '' =='دبلوم عالي')? "selected" : '' }}>دبلوم عالي</option>
                                                        <option {{ ($ffL->educational_major ?? '' =='ماجستير')? "selected" : '' }}>ماجستير </option>
                                                        <option {{ ($ffL->educational_major ?? '' =='دكتوراة')? "selected" : '' }}>دكتوراة</option>

                                                    </select>
                                                <td><input type="text" class="" name="highest_academic_qualification" value="{{ $ffL->highest_academic_qualification ?? ''}}"></td>



                                                </td>
                                                <td><select class="" data-placeholder="Select" name="technical_vocational_qualification">

                                                        <option {{ ($ffL->technical_vocational_qualification ?? '' =='الاردن')? "selected" : '' }}>الاردن</option>
                                                        <option {{ ($ffL->technical_vocational_qualification ?? '' =='فلسطين')? "selected" : '' }}>فلسطين</option>
                                                        <option {{ ($ffL->technical_vocational_qualification ?? '' =='مصر')? "selected" : '' }}>مصر</option>
                                                        <option {{ ($ffL->technical_vocational_qualification ?? '' =='دول عربيه اخرى')? "selected" : '' }}>دول عربيه اخرى</option>
                                                        <option {{ ($ffL->technical_vocational_qualification ?? '' =='روسيا')? "selected" : '' }}>روسيا</option>
                                                        <option {{ ($ffL->technical_vocational_qualification ?? '' =='دول اسيويه اخرى غير عربيه')? "selected" : '' }}>دول اسيويه اخرى غير عربيه</option>
                                                        <option {{ ($ffL->technical_vocational_qualification ?? '' =='اوروبا الشرقيه')? "selected" : '' }}>اوروبا الشرقيه</option>
                                                        <option {{ ($ffL->technical_vocational_qualification ?? '' =='اوروبا الغربيه')? "selected" : '' }}>اوروبا الغربيه</option>
                                                        <option {{ ($ffL->technical_vocational_qualification ?? '' =='امريكا الشماليه')? "selected" : '' }}>امريكا الشماليه</option>
                                                        <option {{ ($ffL->technical_vocational_qualification ?? '' =='امريكا الجنوبيه')? "selected" : '' }}>امريكا الجنوبيه</option>
                                                        <option {{ ($ffL->technical_vocational_qualification ?? '' =='استراليا')? "selected" : '' }}>استراليا</option>
                                                        <option {{ ($ffL->technical_vocational_qualification ?? '' =='لخرى')? "selected" : '' }}>لخرى</option>

                                                    </select></td>
                                                <td><select class="" data-placeholder="Select" name="realationship_of_work">
                                                <option {{ ($family_work->realationship_of_work ?? '' =='لا يوجد')? "selected" : '' }}>لا يوجد</option>
                                                        <option {{ ($family_work->realationship_of_work ?? '' =='تدريب مهني/تقني قصير في موقع العمل')? "selected" : '' }}>تدريب مهني/تقني قصير في موقع العمل</option>
                                                        <option {{ ($family_work->realationship_of_work ?? '' =='تدريب مهني اقل من 6 شهور')? "selected" : '' }}>تدريب مهني اقل من 6 شهور</option>
                                                        <option {{ ($family_work->realationship_of_work ?? '' =='تدريب مهني 6 لبى اقل من 12 شهر')? "selected" : '' }}>تدريب مهني 6 لبى اقل من 12 شهر</option>
                                                        <option {{ ($family_work->realationship_of_work ?? '' =='تدريب مهني1-2 سنه(دون خبره)')? "selected" : '' }}>تدريب مهني1-2 سنه(دون خبره)</option>
                                                        <option {{ ($family_work->realationship_of_work ?? '' =='الالتحاق بمدرسه صناعيه/مهنيه(دون خبره)')? "selected" : '' }}>الالتحاق بمدرسه صناعيه/مهنيه(دون خبره)</option>
                                                        <option {{ ($family_work->realationship_of_work ?? '' =='تدريب مهني1-2 سنه(مع خبره)')? "selected" : '' }}>تدريب مهني1-2 سنه(مع خبره)</option>
                                                        <option {{ ($family_work->realationship_of_work ?? '' =='الالتحاق بمدرسه صناعيه/مهنيه(مع خبره)')? "selected" : '' }}>الالتحاق بمدرسه صناعيه/مهنيه(مع خبره)</option>

                                                    </select></td>
                                                <td><select class="" data-placeholder="Select" name="overtime_work">
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>عامل من 1-14 ساعه</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>عامل من 15-34 ساعه</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>عامل من 35-45 ساعه</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>عامل 46 ساعه فاكثر</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>(لا يعمل ويريد العمل-سبق له العمل)بحث عن عمل خلال 4 اسابيع الماضيه</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>(لا يعمل ويريد العمل-لم يسبق له العمل)بحث عن عمل خلال 4 اسابيع الماضيه</option>
                                                        <optgroup label="لا يعمل ولا يريد العمل">
                                                            <option {{ (old('city') =='القدس')? "selected" : '' }}>التفرغ للدراسه/ التدريب</option>
                                                            <option {{ (old('city') =='القدس')? "selected" : '' }}>التفرغ لاعمال المنزل</option>
                                                            <option {{ (old('city') =='القدس')? "selected" : '' }}>العجز/كبر السن/المرض</option>
                                                            <option {{ (old('city') =='القدس')? "selected" : '' }}>وجود ايراد</option>
                                                            <option {{ (old('city') =='القدس')? "selected" : '' }}>تقاعد</option>
                                                            <option {{ (old('city') =='القدس')? "selected" : '' }}>اخرى</option>
                                                        </optgroup>
                                                    </select>
                                                </td>
                                                <td><select class="" data-placeholder="Select" name="major_occupation">
                                                        <option {{ (old('city') =='نعم')? "selected" : '' }}>نعم</option>
                                                        <option {{ (old('city') =='لا')? "selected" : '' }}>لا</option>
                                                    </select>
                                                </td>
                                                <td><input type="text" class="" name="major_economic_activity"></td>
                                                <td><input type="text" class="" name="sector"></td>
                                                <td><select class="" data-placeholder="Select" name="workplace">

                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>خاص وطني داخل المنشات</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>خاص وطني خارج المنشات</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>خاص اجنبي داخل المنشات</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>خاص اجنبي خارج المنشات</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>حكومه وطنيه</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>سلطه محلية</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>حكومة اجنبية</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>هيئه او جمعيه خيريه</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>جمعيه تعاونيه</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>وكاله غوث</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>هيئه دوليه</option>

                                                    </select></td>

                                                <td><select class="" data-placeholder="Select" name="main_practical_case">

                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>في المسكن</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>ضمن نفس التجمع السكاني</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>ضمن نفس المحافظه</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>في محافظه اخرى</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>داخل اسرائيل</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>بالمستوطنات</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>بالخارج</option>

                                                    </select>
                                                </td>

                                                <td><select class="" data-placeholder="Select" name="work_contract">

                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>صاحب عمل</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>يعمل لحسسابه</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>مستخدم منتظم باجر</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>مستخدم غير منتظم باجر</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>يعمل لدى الاسرة بدون اجر</option>

                                                    </select>
                                                </td>


                                                <td><select class="" data-placeholder="Select" name="vacations">

                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>المساهمه في تمويل التقاعد-مكافاه نهايه الخدمه</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>منح اجازه سنويه مدفوعه او تعويض بدل اجازه</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>منح اجازه مرضيه مدفوعه الاجر-في حال المرض او الاصابه</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>منح اجازه امومه مدفوعه(للنساء فقط)</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>لا</option>
                                                    </select>
                                                </td>

                                                <td><select class="" data-placeholder="Select" name="marriage_status">

                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>لم يتزوج ابدا</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>عقد لاول مره</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>متزوج</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>مطلق</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>ارمل</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>منفصل</option>

                                                    </select>
                                                </td>

                                                <td><input type="number" class="" name="age_first_marriage"></td>
                                                <td><input type="number" class="" name="duration_marriage"></td>
                                                <td><input type="number" class="" name="number_for_life_born_a_live"></td>
                                                <td><input type="number" class="" name="number_for_life_a_live"></td>
                                                <td><input type="number" class="" name="number_for_annual_born_a_live"></td>
                                                <td><input type="number" class="" name="number_for_annual_a_live"></td>

                                            </tr>


                                        </tbody>
                                    </table>
                                </div>



                            </fieldset>

                            <h3> بيانات المسكن و ظروف السكن </h3>
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="Residential_unit_number" value="{{ old('2') }}">
                                        <label>2-رقم تعداد المبنى في منطقة العد:</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">

                                        <select class="squareSelect" name="Building_condition" data-placeholder="Select">
                                            <option disabled selected>2a-هل المبنى:</option>
                                            <option {{ (old('2a') =='للسكن فقط')? "selected" : '' }}>للسكن فقط</option>
                                            <option {{ (old('2a') =='للسكن والعمل')? "selected" : '' }}>للسكن والعمل</option>
                                            <option {{ (old('2a') =='للعمل فقط')? "selected" : '' }}>للعمل فقط</option>
                                            <option {{ (old('2a') =='مغلق')? "selected" : '' }}>مغلق</option>
                                            <option {{ (old('2a') =='خالي')? "selected" : '' }}>خالي</option>
                                            <option {{ (old('2a') =='مهجور')? "selected" : '' }}>مهجور</option>
                                            <option {{ (old('2a') =='تحت التشطيب')? "selected" : '' }}>تحت التشطيب</option>

                                        </select>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="Building_counter_number" value="{{ old('3') }}">
                                        <label>3-رقم الوحدة السكنيه في المبنى:</label>

                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6">


                                        <select class="squareSelect" name="condition_ofThe_housingUnit" data-placeholder="Select">
                                            <option disabled selected>3a-هل الوحدة السكنيه</option>
                                            <option {{ (old('3a') =='مشغولة باسره')? "selected" : '' }}> مشغولة باسره</option>
                                            <option {{ (old('3a') =='مشغولة باسره و عمل')? "selected" : '' }}> مشغولة باسره و عمل</option>
                                            <option {{ (old('3a') =='سكن طلاب او عاملين لهم اسر اخرى داخل فلسطين')? "selected" : '' }}> سكن طلاب او عاملين لهم اسر اخرى داخل فلسطين</option>
                                            <option {{ (old('3a') =='للعمل فقط')? "selected" : '' }}>للعمل فقط</option>
                                            <option {{ (old('3a') =='مغلقة/خالية/مهجورة')? "selected" : '' }}>مغلقة/خالية/مهجورة</option>
                                            <option {{ (old('3a') =='تحت التشطيب')? "selected" : '' }}>تحت التشطيب</option>

                                        </select>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="Family_number_in_the_building" value="{{ old('3b') }}">
                                        <label>3b-رقم الاسرة في المبنى:</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="Family_number_in_the_counting_area" value="{{ old('4') }}">
                                        <label>4-رقم الاسرة في منطقة العد</label>

                                    </div>
                                    <div class="col-lg-6">

                                        <select class="squareSelect" name="Adjective_works" data-placeholder="Select">
                                            <option disabled selected>5-صفه الاشغال:</option>
                                            <option {{ (old('5') =='اسرة خاصة')? "selected" : '' }}>اسرة خاصة</option>
                                            <option {{ (old('5') =='مسكن عام')? "selected" : '' }}>مسكن عام</option>
                                            <option {{ (old('5') =='فندق')? "selected" : '' }}>فندق</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">

                                        <select class="squareSelect" name="Dwelling_type" data-placeholder="Select">
                                            <option disabled selected>6-نوع المسكن</option>
                                            <option {{ (old('6') =='فيلا')? "selected" : '' }}> فيلا</option>
                                            <option {{ (old('6') =='دار')? "selected" : '' }}> دار</option>
                                            <option {{ (old('6') =='شقه')? "selected" : '' }}>شقه</option>
                                            <option {{ (old('6') =='غرفه مستقلى')? "selected" : '' }}>غرفه مستقلى </option>
                                            <option {{ (old('6') =='خيمه')? "selected" : '' }}>خيمه </option>
                                            <option {{ (old('6') ==' براكيه/كرفان/بركس')? "selected" : '' }}> براكيه/كرفان/بركس</option>
                                            <option {{ (old('6') =='اخرى')? "selected" : '' }}>اخرى</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-6">

                                        <select class="squareSelect" name="Possession_ofThe_dwelling" data-placeholder="Select">
                                            <option disabled selected>7-حيازة المسكن</option>
                                            <option {{ (old('7') =='ملك')? "selected" : '' }}> ملك</option>
                                            <option {{ (old('7') =='مستأجر غير مفروشه')? "selected" : '' }}> مستأجر غير مفروشه</option>
                                            <option {{ (old('7') =='مستأجر مفروش')? "selected" : '' }}>مستأجر مفروش</option>
                                            <option {{ (old('7') =='دون مقابل')? "selected" : '' }}>دون مقابل</option>
                                            <option {{ (old('7') =='مقابل عمل')? "selected" : '' }}>مقابل عمل </option>
                                            <option {{ (old('7') =='اخرى')? "selected" : '' }}>اخرى</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="Dwelling_space" value="{{ old('8') }}">
                                        <label>8-مساحه المسكن (بالمتر المربع)</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="numberOfRooms" value="{{ old('9') }}">
                                        <label>9-عدد غرف المسكن</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="numberOfSleepRooms" value="{{ old('10') }}">
                                        <label>10-عدد الغرف المخصصه للنوم</label>

                                    </div>
                                    <div class="col-lg-6">

                                        <select class="squareSelect" name="main_ofDrink_water" data-placeholder="Select">
                                            <option disabled selected>11-ماهو المصدرالرئيسي لمياه الشرب</option>
                                            <option {{ (old('11') =='شبكة مياه عامه متصلة بالمسكن')? "selected" : '' }}> شبكة مياه عامه متصلة بالمسكن</option>
                                            <option {{ (old('11') =='بئر ارتوازي(محمي)/ينبوع(محمي)')? "selected" : '' }}> بئر ارتوازي(محمي)/ينبوع(محمي)</option>
                                            <option {{ (old('11') =='بئر ارتوازي غير(محمي)/ينبوع(محمي)')? "selected" : '' }}>بئر ارتوازي غير(محمي)/ينبوع(محمي)</option>
                                            <option {{ (old('11') =='مياه تجميع الامطار')? "selected" : '' }}>مياه تجميع الامطار</option>
                                            <option {{ (old('11') =='صهريج/تنك/عربة تجر صهريج صغير')? "selected" : '' }}>صهريج/تنك/عربة تجر صهريج صغير </option>
                                            <option {{ (old('11') =='مياه زجاجيه معدنيه')? "selected" : '' }}> مياه زجاجيه معدنيه</option>
                                            <option {{ (old('11') =='حنفية عامه')? "selected" : '' }}>حنفية عامه</option>
                                            <option {{ (old('11') =='اخرى')? "selected" : '' }}> اخرى</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">

                                        <select class="squareSelect" name="main_ofElectricity" data-placeholder="Select">
                                            <option disabled selected>12-المصدرالرئيسي للكهرباء</option>
                                            <option {{ (old('12') =='شبكة عامة')? "selected" : '' }}> شبكة عامة</option>
                                            <option {{ (old('12') =='مولد خاص')? "selected" : '' }}> مولد خاص</option>
                                            <option {{ (old('12') =='لا يوجد')? "selected" : '' }}>لا يوجد </option>

                                        </select>

                                    </div>
                                    <div class="col-lg-6">

                                        <select class="squareSelect" name="type_of_toilet" data-placeholder="Select">
                                            <option disabled selected>13-ما نوع المرحاض الذي يستخدمه افراد الاسرة عادة</option>
                                            <option {{ (old('13') =='مرحاض متصل بشبكة مجاري عامة')? "selected" : '' }}>مرحاض متصل بشبكة مجاري عامة</option>
                                            <option {{ (old('13') =='مرحاض متصل بحفرة امتصاصية')? "selected" : '' }}>مرحاض متصل بحفرة امتصاصية </option>
                                            <option {{ (old('13') =='مرحاض متصل بحفرة صماء')? "selected" : '' }}>مرحاض متصل بحفرة صماء</option>
                                            <option {{ (old('13') =='مرحاض متصل بمصرف مفتوح')? "selected" : '' }}>مرحاض متصل بمصرف مفتوح</option>
                                            <option {{ (old('13') =='لايوجد مرحاض,في البرية,في الحقل')? "selected" : '' }}>لايوجد مرحاض,في البرية,في الحقل</option>
                                            <option {{ (old('13') =='اخرى')? "selected" : '' }}> اخرى</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">

                                        <select class="squareSelect" name="waste_Disposal" data-placeholder="Select">
                                            <option disabled selected>14-الطريقة المستخدمة للتخلص من النفايات المنزليه</option>
                                            <option {{ (old('14') =='القاؤها في اقرب حاوية')? "selected" : '' }}>القاؤها في اقرب حاوية</option>
                                            <option {{ (old('14') =='حرقها')? "selected" : '' }}>حرقها</option>
                                            <option {{ (old('14') =='القاؤها بشكل عشوائي')? "selected" : '' }}>القاؤها بشكل عشوائي</option>
                                            <option {{ (old('14') =='اخرى')? "selected" : '' }}> اخرى</option>

                                        </select>

                                    </div>
                                    <div class="col-lg-6">

                                        <select class="squareSelect" name="main_of_energy_for_cook" data-placeholder="Select">
                                            <option disabled selected>15-المصدر الرئيسي للطاقه المستخدمة في الطبخ</option>
                                            <option {{ (old('15') =='غاز')? "selected" : '' }}>غاز </option>
                                            <option {{ (old('15') =='كاز')? "selected" : '' }}>كاز</option>
                                            <option {{ (old('15') =='كهربا')? "selected" : '' }}>كهربا</option>
                                            <option {{ (old('15') =='حطب')? "selected" : '' }}>حطب</option>
                                            <option {{ (old('15') =='اخرى')? "selected" : '' }}> اخرى</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">

                                        <select class="squareSelect" name="main_of_energy_for_heat" data-placeholder="Select">
                                            <option disabled selected>16-المصدر الرئيسي للطاقه المستخدمة في التدفئة</option>
                                            <option {{ (old('16') =='غاز')? "selected" : '' }}>غاز </option>
                                            <option {{ (old('16') =='كاز')? "selected" : '' }}>كاز</option>
                                            <option {{ (old('16') =='كهربا')? "selected" : '' }}>كهربا</option>
                                            <option {{ (old('16') =='حطب')? "selected" : '' }}>حطب</option>
                                            <option {{ (old('16') =='فحم')? "selected" : '' }}>فحم</option>
                                            <option {{ (old('16') =='سولار')? "selected" : '' }}>سولار</option>
                                            <option {{ (old('16') =='اخرى')? "selected" : '' }}> اخرى</option>

                                        </select>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form-float">

                                        </div>
                                    </div>
                                </div>





                                <!-- my code -->
                                <div class="container-fluid">

                                    <div class="alert alert-primary text-center l-bg-cyan" style="color:black !important;font-weight: bold !important;" role="alert">
                                        عدد المرافق والسلع في المسكن
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="kitchen" value="{{ old('17') }}">
                                        <label>17-عدد المطابخ في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="bathrooms" value="{{ old('18') }}">
                                        <label>18-عدد الحمامات في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="toilets" value="{{ old('19') }}">
                                        <label>19-عدد المراحيض في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="bathroom_toilets" value="{{ old('20') }}">
                                        <label>20-عدد المراحيض والحمام معا في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="privateCar" value="{{ old('21') }}">
                                        <label>21-عدد السيارات الخصوصيه في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="cooker" value="{{ old('22') }}">
                                        <label>22-عدد طباخ غاز/كهربا في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="fridge" value="{{ old('23') }}">
                                        <label>23-عدد الثلاجات الكهربائيه في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="fraser" value="{{ old('24') }}">
                                        <label>24-عدد الفريزر في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="vacuum_cleaner" value="{{ old('25') }}">
                                        <label>25-عدد المكانس الكهربائيه في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="microwave" value="{{ old('26') }}">
                                        <label>26- عدد الميكرويف في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="washing_Machine" value="{{ old('27') }}">
                                        <label>27-عدد غسالات الملابس في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="blotter" value="{{ old('28') }}">
                                        <label>28-عدد نشافات الملابس في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="dishwasher" value="{{ old('29') }}">
                                        <label>29-عدد الجلايات في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="filter" value="{{ old('30') }}">
                                        <label>30-عدد منقيات المياه(filter)في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="LCD_LED" value="{{ old('31') }}">
                                        <label>31-عدد تلفزيون LED,LCD في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="TV" value="{{ old('32') }}">
                                        <label>32-عدد التلفزيون العادي غي المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="pichup_dish" value="{{ old('33') }}">
                                        <label>33-عدد الصحون اللاقطه في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="electric_fan" value="{{ old('34') }}">
                                        <label>34-عدد المراوح الكهربائيه في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="conditioner" value="{{ old('35') }}">
                                        <label>35-عدد المكيفات في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="central_adaptation" value="{{ old('36') }}">
                                        <label>36-عدد التكييف المركزي في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="central_heating" value="{{ old('37') }}">
                                        <label>37-عدد التدفئه المركزيه في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="solar_heater" value="{{ old('38') }}">
                                        <label>38-عدد السخان الشمسي في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="landline_telephone" value="{{ old('39') }}">
                                        <label>39-عدد خطوط الهاتف الارضيه في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="home_library" value="{{ old('40') }}">
                                        <label>40-عدد المكتبات المنزليه في المنزل</label>

                                    </div>
                                </div>

                                <div class="container-fluid">

                                    <div class="alert alert-primary text-center l-bg-cyan" style="color:black !important;font-weight: bold !important;" role="alert">
                                        تكنولوجيا النعلومات لدى الاسرة(العدد)
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="Palestine_internet_line" value="{{ old('41') }}">
                                        <label>41-عدد خط الانترنت الفلسطيني في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="Israel_internet_line" value="{{ old('42') }}">
                                        <label>42-عدد خط الانترنت الاسرائيلي في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="Palestine_Cellular" value="{{ old('43') }}">
                                        <label>43-عدد خطوط النقال(الخلوي) الفلسطيني في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="Israel_Cellular" value="{{ old('44') }}">
                                        <label>44-عدد خطوط النقال(الخلوي) الاسرائيلي في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="computer" value="{{ old('45') }}">
                                        <label>45-عدد اجهزه الحاسوب في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="Laptop" value="{{ old('46') }}">
                                        <label>46-عدد اجهزه اللابتوب في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="IPAD" value="{{ old('47') }}">
                                        <label>47- عدد اجهزه التابلت و ipod في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="Artificial_mobile" value="{{ old('48') }}">
                                        <label>48-عدد اجهزه الهواتف الذكيه في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="invedual_uses" value="{{ old('49') }}">
                                        <label>49-عدد افراد الاسره الذين يستخدمون الحاسوب</label>
                                    </div>
                                </div>
                            </fieldset>

                            <h3>وفيات الاسره خلال ال 12 شهر السابقه</h3>
                            <fieldset>
                                <div class="body table-responsive">
                                    <table class="table table-bordered" style="overflow-x: scroll !important;min-width:150% !important;">
                                        <thead>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td colspan="4" class="align-center">للنساء المتزوجات او سبق لهن الزواج</td>
                                            </tr>
                                            <tr>
                                                <th class="text-center" style="width:1%">التسلسل</th>
                                                <th class="text-center" style="width:3%">اسم المتوفى ثلاثيا</th>
                                                <th class="text-center" style="width:6%">العلاقه برب الاسره</th>
                                                <th class="text-center" style="width:4%">الجنس</th>
                                                <th class="text-center" style="width:9%">العمر عند الوفاه بالسنوات الكامله(يسجل 0 للعمر الاقل من سنه)</th>
                                                <th class="text-center" style="width:4%">هل تم الحصول على شهاده وفاه</th>
                                                <th class="text-center" style="width:4%"> (عند الوفاه 14-54 للنساء)الحاله الزوجيه عند الوفاه</th>
                                                <th class="text-center" style="width:8%">هل كانت حاملا عند الوفاه؟</th>
                                                <th class="text-center" style="width:4%">هل كانت الوفاه اثناء الولاده؟</th>
                                                <th class="text-center" style="width:4%">هل كانت الوفاه 42 يوما من الولاده؟</th>
                                                <th class="text-center" style="width:7%">هل كانت الوفاه بسبب حادث(سير او سقوط او حريق...الخ؟)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><input type="name" class="" name="Full_name_dead"></td>
                                                <td><select class="" data-placeholder="Select" name="relationship">

                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>رب الاسره </option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>زوجه/زوج</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>ابن/ابنه</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>اخ/اخت</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>جد/جده</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>حفيد/حفيده</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>زوج ابن/زوج بنت</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>اقرباء اخرون</option>
                                                        <option {{ (old('city') =='القدس')? "selected" : '' }}>اخرون</option>
                                                    </select>
                                                </td>
                                                <td><select class="" data-placeholder="Select" name="gender">
                                                        <option {{ (old('city') =='ذكر')? "selected" : '' }}>ذكر</option>
                                                        <option {{ (old('city') =='انثى')? "selected" : '' }}>انثى</option>
                                                    </select></td>
                                                <td><input type="number" class="" name="age"></td>
                                                <td><select class="" data-placeholder="Select" name="Death_certificate">
                                                        <option {{ (old('city') =='لا يوجد')? "selected" : '' }}>لا يوجد</option>
                                                        <option {{ (old('city') =='تدريب مهني/تقني قصير في موقع العمل')? "selected" : '' }}>تدريب مهني/تقني قصير في موقع العمل</option>
                                                        <option {{ (old('city') =='تدريب مهني اقل من 6 شهور')? "selected" : '' }}>تدريب مهني اقل من 6 شهور</option>
                                                        <option {{ (old('city') =='تدريب مهني 6 لبى اقل من 12 شهر')? "selected" : '' }}>تدريب مهني 6 لبى اقل من 12 شهر</option>
                                                        <option {{ (old('city') =='تدريب مهني1-2 سنه(دون خبره)')? "selected" : '' }}>تدريب مهني1-2 سنه(دون خبره)</option>
                                                        <option {{ (old('city') =='الالتحاق بمدرسه صناعيه/مهنيه(دون خبره)')? "selected" : '' }}>الالتحاق بمدرسه صناعيه/مهنيه(دون خبره)</option>
                                                        <option {{ (old('city') =='تدريب مهني1-2 سنه(مع خبره)')? "selected" : '' }}>تدريب مهني1-2 سنه(مع خبره)</option>
                                                        <option {{ (old('city') =='الالتحاق بمدرسه صناعيه/مهنيه(مع خبره)')? "selected" : '' }}>الالتحاق بمدرسه صناعيه/مهنيه(مع خبره)</option>
                                                    </select></td>
                                                <td><select class="" data-placeholder="Select" name="marriage_status">
                                                        <option {{ (old('city') =='لم يتزوج ابدا')? "selected" : '' }}>لم يتزوج ابدا</option>
                                                        <option {{ (old('city') =='عقد لاول مره')? "selected" : '' }}>عقد لاول مره</option>
                                                        <option {{ (old('city') =='متزوج')? "selected" : '' }}>متزوج</option>
                                                        <option {{ (old('city') =='مطلق')? "selected" : '' }}>مطلق</option>
                                                        <option {{ (old('city') =='ارمل')? "selected" : '' }}>ارمل</option>
                                                        <option {{ (old('city') =='منفصل')? "selected" : '' }}>منفصل</option>
                                                    </select>
                                                </td>
                                                <td><select class="" data-placeholder="Select" name="pregnant_at_time_of_death">
                                                        <option {{ (old('city') =='نعم')? "selected" : '' }}>نعم</option>
                                                        <option {{ (old('city') =='لا')? "selected" : '' }}>لا</option>
                                                    </select>
                                                </td>
                                                <td><select class="" data-placeholder="Select" name="death_during_childbirth">

                                                        <option {{ (old('city') =='نعم')? "selected" : '' }}>نعم</option>
                                                        <option {{ (old('city') =='لا')? "selected" : '' }}>لا</option>

                                                    </select></td>
                                                <td><select class="" data-placeholder="Select" name="death_during_the_42_days_of_birth">
                                                        <option {{ (old('city') =='نعم')? "selected" : '' }}>نعم</option>
                                                        <option {{ (old('city') =='لا')? "selected" : '' }}>لا</option>
                                                    </select></td>
                                                <td><select class="" data-placeholder="Select" name="Death_due_accident">
                                                        <option {{ (old('city') =='نعم')? "selected" : '' }}>نعم</option>
                                                        <option {{ (old('city') =='لا')? "selected" : '' }}>لا</option>
                                                    </select></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script src="{{asset('assets/js/app.min.js')}}"></script>
    <script src="{{asset('assets/js/form.min.js')}}"></script>
    <!-- befor
    <script src="../../assets/js/table.min.js"></script> -->
    <!-- after  -->
    <script src="{{asset('assets/js/table.min.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('assets/js/admin.js')}}"></script>
    <script src="{{asset('assets/js/pages/forms/form-wizard.js')}}"></script>

    <script src="{{asset('assets/js/pages/forms/basic-form-elements.js')}}"></script>

    <script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
    <!-- Knob Js -->
</body>
</html>