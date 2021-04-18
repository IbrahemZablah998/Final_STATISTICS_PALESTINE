@extends('layouts.app')

@section('content')
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
                                                        <option {{ ((($family->relationShip ?? '') == 'اخ/اخت')? "selected" : '' )}}>اخ/اخت</option>
                                                        <option {{ ((($family->relationShip ?? '') == 'ابن/ابنه')? "selected" : '' )}}>ابن/ابنه</option>
                                                        <option {{ ((($family->relationShip ?? '') == 'زوجه/زوج')? "selected" : '' )}}>زوجه/زوج</option>
                                                        <option {{ ((($family->relationShip ?? '') == 'جد/جده')? "selected" : '' )}}>جد/جده</option>
                                                        <option {{ ((($family->relationShip ?? '') == 'حفيد/حفيده')? "selected" : '' )}}>حفيد/حفيده</option>
                                                        <option {{ ((($family->relationShip ?? '') == 'زوج ابن/زوج بنت')? "selected" : '' )}}>زوج ابن/زوج بنت</option>
                                                        <option {{ ((($family->relationShip ?? '') == 'اقرباء اخرون')? "selected" : '' )}}>اقرباء اخرون</option>
                                                        <option {{ ((($family->relationShip ?? '') == 'اخرون')? "selected" : '' )}}>اخرون</option>
                                                        <option {{ ((($family->relationShip ?? '') == 'رب الاسره')? "selected" : '')}}>رب الاسره</option>
                                                    </select>
                                                </td>
                                                <td><select class="" data-placeholder="Select" name="gender">
                                                        <!-- <option disabled selected>16-المصدر الرئيسي للطاقه المستخدمة في التدفئة</option> -->
                                                        <option {{ ((($family->gender??  '')=='ذكر')? "selected" : '' )}}>ذكر</option>
                                                        <option {{ ((($family->gender??  '')=='انثى')? "selected" : '')}}>انثى</option>

                                                    </select>
                                                </td>
                                                <td><input type="number" class="" name="age" value="{{$family->age ?? ''}}"></td>
                                                <td><input type="text" class="" name="nationality" value="{{$family->nationality ?? ''}}"></td>
                                                <td><input type="number" class="" name="id" value="{{ $id->id  ?? ''}}"></td>
                                                <td><input type="text" class="" name="placeOfMotherTimeInvidualBirth" value="{{$family->placeOfMotherTimeInvidualBirth ?? ''}}"></td>
                                                <td><input type="text" class="" name="place" value="{{ $id->place  ?? ''}}"></td>
                                                <td><input type="number" class="" name="periodAt_theCurrent_residenceIn_fullTime" value="{{$family->periodAt_theCurrent_residenceIn_fullTime ?? ''}}"></td>
                                                <td><input type="text" class="" name="previous_place" value="{{$family->previous_place ?? ''}}"></td>

                                                <td><select class="" data-placeholder="Select" name="reason_change_residence">
                                                        <!-- <option disabled selected>16-المصدر الرئيسي للطاقه المستخدمة في التدفئة</option> -->
                                                        <option {{ ((($family->reason_change_residence??  '' )=='العمل')? "selected" : '' )}}>العمل</option>
                                                        <option {{ ((($family->reason_change_residence??  '' )=='الدراسه')? "selected" : '' )}}>الدراسه</option>
                                                        <option {{ ((($family->reason_change_residence??  '' )=='الزواج')? "selected" : '' )}}>الزواج</option>
                                                        <option {{ ((($family->reason_change_residence??  '' )=='المرافقه')? "selected" : '' )}}>المرافقه</option>
                                                        <option {{ ((($family->reason_change_residence??  '' )=='التهجير')? "selected" : '' )}}>التهجير</option>
                                                        <option {{ ((($family->reason_change_residence??  '' )=='العوده')? "selected" : '' )}}>العوده</option>
                                                        <option {{ ((($family->reason_change_residence??  '' )=='الجدار')? "selected" : '' )}}>الجدار</option>
                                                        <option {{ ((($family->reason_change_residence??  '' )=='الحفاظ على الهويه المقدسه')? "selected" : '' )}}>الحفاظ على الهويه المقدسه</option>
                                                        <option {{ ((($family->reason_change_residence??  '' )=='اخرى')? "selected" : '' )}}>اخرى</option>
                                                        <option {{ ((($family->reason_change_residence??  '' )=='اجراءات اسرائيليه')? "selected" : '' )}}>اجراءات اسرائيليه</option>

                                                    </select>
                                                </td>

                                                <td><select class="" data-placeholder="Select" name="religion">
                                                        <!-- <option disabled selected>16-المصدر الرئيسي للطاقه المستخدمة في التدفئة</option> -->
                                                        <option {{ ((($family->religion??  '' )=='مسيحي')? "selected" : '')}}>مسيحي</option>
                                                        <option {{ ((($family->religion??  '' )=='مسلم')? "selected" : '' )}}>مسلم</option>
                                                        <option {{ ((($family->religion??  '' )=='اخرى')? "selected" : '' )}}>اخرى</option>

                                                    </select>
                                                </td>

                                                <td><select class="" data-placeholder="Select" name="asylum_status">
                                                        <!-- <option disabled selected>16-المصدر الرئيسي للطاقه المستخدمة في التدفئة</option> -->
                                                        <option {{ ((($family->asylum_status??  '' )=='لاجئ مسجل')?     "selected" : '' )}}>لاجئ مسجل</option>
                                                        <option {{ ((($family->asylum_status??  '' )=='لاجئ غير مسجل')? "selected" : '' )}}>لاجئ غير مسجل</option>
                                                        <option {{ ((($family->asylum_status??  '' )=='ليس لاجئا')?     "selected" : '' )}}>ليس لاجئا</option>

                                                    </select>
                                                </td>

                                                <td><select class="" data-placeholder="Select" name="healthy_condition_difficulties">
                                                        <!-- <option disabled selected>16-المصدر الرئيسي للطاقه المستخدمة في التدفئة</option> -->
                                                        <option {{ ((($family->healthy_condition_difficulties??  '' )=='لا يوجد')?             "selected" : '' )}}>لا يوجد</option>
                                                        <option {{ ((($family->healthy_condition_difficulties??  '' )=='نعم, بعض الصعوبه')?  "selected" : '' )}}>نعم, بعض الصعوبه</option>
                                                        <option {{ ((($family->healthy_condition_difficulties??  '' )=='نعم,صعوبه كبيره')?   "selected" : '' )}}>نعم,صعوبه كبيره</option>
                                                        <option {{ ((($family->healthy_condition_difficulties??  '' )=='لا يستطيع مطلقا')?    "selected" : '' )}}>لا يستطيع مطلقا</option>
                                                    </select>
                                                </td>

                                                <td><select class="" data-placeholder="Select" name="health_insurance">
                                                        <!-- <option disabled selected>16-المصدر الرئيسي للطاقه المستخدمة في التدفئة</option> -->
                                                        <option {{ ((($family->health_insurance??  '' )=='لا يوجد')? "selected" : '' )}}>لا يوجد</option>
                                                        <option {{ ((($family->health_insurance??  '' )=='حكومي فقط')? "selected" : '' )}}>حكومي فقط</option>
                                                        <option {{ ((($family->health_insurance??  '' )=='وكاله فقط')? "selected" : '' )}}>وكاله فقط</option>
                                                        <option {{ ((($family->health_insurance??  '' )=='خاص فقط')? "selected" : '' )}}>خاص فقط</option>
                                                        <option {{ ((($family->health_insurance??  '' )=='حكومي و وكاله')? "selected" : '' )}}>حكومي و وكاله</option>
                                                        <option {{ ((($family->health_insurance??  '' )=='حكومي و خاص')? "selected" : '' )}}>حكومي و خاص</option>
                                                        <option {{ ((($family->health_insurance??  '' )=='وكاله وخاص')? "selected" : '' )}}>وكاله وخاص</option>
                                                        <option {{ ((($family->health_insurance??  '' )=='اسرائيلي')? "selected" : '' )}}>اسرائيلي</option>
                                                        <option {{ ((($family->health_insurance??  '' )=='اخرى')? "selected" : '' )}}>اخرى</option>

                                                    </select>
                                                </td>
                                                <td><select class="" data-placeholder="Select" name="disease">
                                                        <!-- <option disabled selected>16-المصدر الرئيسي للطاقه المستخدمة في التدفئة</option> -->
                                                        <option {{ ((($family->disease ?? '' )=='نعم')? "selected" : '' )}}>نعم</option>
                                                        <option {{ ((($family->disease ?? '' )=='لا')? "selected" : '' )}}>لا</option>


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
                                                        <option {{ ((($family_learnings->enroll_education ?? '' )=='ملتحق برياض اطفال')? "selected" : '' )}}>ملتحق برياض اطفال</option>
                                                        <option {{ ((($family_learnings->enroll_education ?? '' )=='ملتحق حاليا')? "selected" : '' )}}>ملتحق حاليا</option>
                                                        <option {{ ((($family_learnings->enroll_education ?? '' )=='التحق وترك')? "selected" : '' )}}>التحق وترك</option>
                                                        <option {{ ((($family_learnings->enroll_education ?? '' )=='التحق وتخرج')? "selected" : '' )}}>التحق وتخرج</option>
                                                        <option {{ ((($family_learnings->enroll_education ?? '' )=='لم يلتحق ابدا')? "selected" : '' )}}>لم يلتحق ابدا</option>

                                                    </select>
                                                </td>
                                                <td><input type="number" class="" name="number_of_years_schooling" value="{{ $family_learnings->number_of_years_schooling ?? ''}}">
                                                </td>
                                                <td><select class="" data-placeholder="Select" name="educational_major">

                                                        <option {{ ((($family_learnings->educational_major ?? '' )=='امي')? "selected" : '' )}}>امي</option>
                                                        <option {{ ((($family_learnings->educational_major ?? '' )=='ملم')? "selected" : '' )}}>ملم</option>
                                                        <option {{ ((($family_learnings->educational_major ?? '' )=='ابتدائي')? "selected" : '' )}}>ابتدائي</option>
                                                        <option {{ ((($family_learnings->educational_major ?? '' )=='اعدادي')? "selected" : '' )}}>اعدادي</option>
                                                        <option {{ ((($family_learnings->educational_major ?? '' )=='ثانوي')? "selected" : '' )}}>ثانوي</option>
                                                        <option {{ ((($family_learnings->educational_major ?? '' )=='دبلوم متوسط')? "selected" : '' )}}>دبلوم متوسط</option>
                                                        <option {{ ((($family_learnings->educational_major ?? '' )=='بكالوريوس')? "selected" : '' )}}>بكالوريوس</option>
                                                        <option {{ ((($family_learnings->educational_major ?? '' )=='دبلوم عالي')? "selected" : '' )}}>دبلوم عالي</option>
                                                        <option {{ ((($family_learnings->educational_major ?? '' )=='ماجستير')? "selected" : '' )}}>ماجستير </option>
                                                        <option {{ ((($family_learnings->educational_major ?? '' )=='دكتوراة')? "selected" : '' )}}>دكتوراة</option>

                                                    </select>
                                                <td><input type="text" class="" name="highest_academic_qualification" value="{{ $family_learnings->highest_academic_qualification ?? ''}}"></td>



                                                </td>
                                                <td><select class="" data-placeholder="Select" name="technical_vocational_qualification">

                                                        <option {{ ((($family_learnings->technical_vocational_qualification ?? '' )=='الاردن')? "selected" : '' )}}>الاردن</option>
                                                        <option {{ ((($family_learnings->technical_vocational_qualification ?? '' )=='فلسطين')? "selected" : '' )}}>فلسطين</option>
                                                        <option {{ ((($family_learnings->technical_vocational_qualification ?? '' )=='مصر')? "selected" : '' )}}>مصر</option>
                                                        <option {{ ((($family_learnings->technical_vocational_qualification ?? '' )=='دول عربيه اخرى')? "selected" : '' )}}>دول عربيه اخرى</option>
                                                        <option {{ ((($family_learnings->technical_vocational_qualification ?? '' )=='روسيا')? "selected" : '' )}}>روسيا</option>
                                                        <option {{ ((($family_learnings->technical_vocational_qualification ?? '' )=='دول اسيويه اخرى غير عربيه')? "selected" : '' )}}>دول اسيويه اخرى غير عربيه</option>
                                                        <option {{ ((($family_learnings->technical_vocational_qualification ?? '' )=='اوروبا الشرقيه')? "selected" : '' )}}>اوروبا الشرقيه</option>
                                                        <option {{ ((($family_learnings->technical_vocational_qualification ?? '' )=='اوروبا الغربيه')? "selected" : '' )}}>اوروبا الغربيه</option>
                                                        <option {{ ((($family_learnings->technical_vocational_qualification ?? '' )=='امريكا الشماليه')? "selected" : '' )}}>امريكا الشماليه</option>
                                                        <option {{ ((($family_learnings->technical_vocational_qualification ?? '' )=='امريكا الجنوبيه')? "selected" : '' )}}>امريكا الجنوبيه</option>
                                                        <option {{ ((($family_learnings->technical_vocational_qualification ?? '' )=='استراليا')? "selected" : '' )}}>استراليا</option>
                                                        <option {{ ((($family_learnings->technical_vocational_qualification ?? '' )=='لخرى')? "selected" : '' )}}>لخرى</option>

                                                    </select></td>
                                                <td><select class="" data-placeholder="Select" name="realationship_of_work">
                                                        <option {{ ($family_work->realationship_of_work ?? '' =='لا يوجد')? "selected" : '' }}>لا يوجد</option>
                                                        <option {{ ((($family_work->realationship_of_work ?? '' )=='تدريب مهني/تقني قصير في موقع العمل')? "selected" : '' )}}>تدريب مهني/تقني قصير في موقع العمل</option>
                                                        <option {{ ((($family_work->realationship_of_work ?? '' )=='تدريب مهني اقل من 6 شهور')? "selected" : '' )}}>تدريب مهني اقل من 6 شهور</option>
                                                        <option {{ ((($family_work->realationship_of_work ?? '' )=='تدريب مهني 6 لبى اقل من 12 شهر')? "selected" : '' )}}>تدريب مهني 6 لبى اقل من 12 شهر</option>
                                                        <option {{ ((($family_work->realationship_of_work ?? '' )=='تدريب مهني1-2 سنه(دون خبره)')? "selected" : '' )}}>تدريب مهني1-2 سنه(دون خبره)</option>
                                                        <option {{ ((($family_work->realationship_of_work ?? '' )=='الالتحاق بمدرسه صناعيه/مهنيه(دون خبره)')? "selected" : '' )}}>الالتحاق بمدرسه صناعيه/مهنيه(دون خبره)</option>
                                                        <option {{ ((($family_work->realationship_of_work ?? '' )=='تدريب مهني1-2 سنه(مع خبره)')? "selected" : '' )}}>تدريب مهني1-2 سنه(مع خبره)</option>
                                                        <option {{ ((($family_work->realationship_of_work ?? '' )=='الالتحاق بمدرسه صناعيه/مهنيه(مع خبره)')? "selected" : '' )}}>الالتحاق بمدرسه صناعيه/مهنيه(مع خبره)</option>

                                                    </select></td>
                                                <td><select class="" data-placeholder="Select" name="overtime_work">
                                                        <option {{ ((($family_work->overtime_work ?? '' )=='عامل من 1-14 ساعه')? "selected" : '' )}}>عامل من 1-14 ساعه</option>
                                                        <option {{ ((($family_work->overtime_work ?? '' )=='عامل من 15-34 ساعه')? "selected" : '' )}}>عامل من 15-34 ساعه</option>
                                                        <option {{ ((($family_work->overtime_work ?? '' )=='عامل من 35-45 ساعه')? "selected" : '' )}}>عامل من 35-45 ساعه</option>
                                                        <option {{ ((($family_work->overtime_work ?? '' )=='عامل 46 ساعه فاكثر')? "selected" : '' )}}>عامل 46 ساعه فاكثر</option>
                                                        <option {{ ((($family_work->overtime_work ?? '' )=='(لا يعمل ويريد العمل-سبق له العمل)بحث عن عمل خلال 4 اسابيع الماضيه')? "selected" : '' )}}>(لا يعمل ويريد العمل-سبق له العمل)بحث عن عمل خلال 4 اسابيع الماضيه</option>
                                                        <option {{ ((($family_work->overtime_work ?? '' )=='(لا يعمل ويريد العمل-لم يسبق له العمل)بحث عن عمل خلال 4 اسابيع الماضيه')? "selected" : '' )}}>(لا يعمل ويريد العمل-لم يسبق له العمل)بحث عن عمل خلال 4 اسابيع الماضيه</option>
                                                        <optgroup label="لا يعمل ولا يريد العمل">
                                                            <option {{ ((($family_work->overtime_work ?? '' )=='التفرغ للدراسه/ التدريب')? "selected" : '' )}}>التفرغ للدراسه/ التدريب</option>
                                                            <option {{ ((($family_work->overtime_work ?? '' )=='التفرغ لاعمال المنزل')? "selected" : '' )}}>التفرغ لاعمال المنزل</option>
                                                            <option {{ ((($family_work->overtime_work ?? '' )=='العجز/كبر السن/المرض')? "selected" : '' )}}>العجز/كبر السن/المرض</option>
                                                            <option {{ ((($family_work->overtime_work ?? '' )=='وجود ايراد')? "selected" : '' )}}>وجود ايراد</option>
                                                            <option {{ ((($family_work->overtime_work ?? '' )=='تقاعد')? "selected" : '' )}}>تقاعد</option>
                                                            <option {{ ((($family_work->overtime_work ?? '' )=='اخرى')? "selected" : '' )}}>اخرى</option>
                                                        </optgroup>
                                                    </select>
                                                </td>
                                                <td><select class="" data-placeholder="Select" name="major_occupation">
                                                        <option {{ ((($family_work->major_occupation ?? '' )=='نعم')? "selected" : '' )}}>نعم</option>
                                                        <option {{ ((($family_work->major_occupation ?? '' )=='لا')? "selected" : '' )}}>لا</option>
                                                    </select>
                                                </td>
                                                <td><input type="text" class="" name="major_economic_activity" value="{{ $family_work->major_economic_activity ?? ''}}"></td>
                                                <td><input type="text" class="" name="sector" value="{{$family_work->sector ?? ''}}"></td>
                                                <td><select class="" data-placeholder="Select" name="workplace">

                                                        <option {{ ((($family_work->workplace ?? '' )=='خاص وطني داخل المنشات')? "selected" : '' )}}>خاص وطني داخل المنشات</option>
                                                        <option {{ ((($family_work->workplace ?? '' )=='خاص وطني خارج المنشات')? "selected" : '' )}}>خاص وطني خارج المنشات</option>
                                                        <option {{ ((($family_work->workplace ?? '' )=='خاص اجنبي داخل المنشات')? "selected" : '' )}}>خاص اجنبي داخل المنشات</option>
                                                        <option {{ ((($family_work->workplace ?? '' )=='خاص اجنبي خارج المنشات')? "selected" : '' )}}>خاص اجنبي خارج المنشات</option>
                                                        <option {{ ((($family_work->workplace ?? '' )=='حكومه وطنيه')? "selected" : '' )}}>حكومه وطنيه</option>
                                                        <option {{ ((($family_work->workplace ?? '' )=='سلطه محلية')? "selected" : '' )}}>سلطه محلية</option>
                                                        <option {{ ((($family_work->workplace ?? '' )=='حكومة اجنبية')? "selected" : '' )}}>حكومة اجنبية</option>
                                                        <option {{ ((($family_work->workplace ?? '' )=='هيئه او جمعيه خيريه')? "selected" : '' )}}>هيئه او جمعيه خيريه</option>
                                                        <option {{ ((($family_work->workplace ?? '' )=='جمعيه تعاونيه')? "selected" : '' )}}>جمعيه تعاونيه</option>
                                                        <option {{ ((($family_work->workplace ?? '' )=='وكاله غوث')? "selected" : '' )}}>وكاله غوث</option>
                                                        <option {{ ((($family_work->workplace ?? '' )=='هيئه دوليه')? "selected" : '' )}}>هيئه دوليه</option>

                                                    </select></td>

                                                <td><select class="" data-placeholder="Select" name="main_practical_case">

                                                        <option {{ ((($family_work->main_practical_case ?? '' )=='في المسكن')? "selected" : '' )}}>في المسكن</option>
                                                        <option {{ ((($family_work->main_practical_case ?? '' )=='ضمن نفس التجمع السكاني')? "selected" : '' )}}>ضمن نفس التجمع السكاني</option>
                                                        <option {{ ((($family_work->main_practical_case ?? '' )=='ضمن نفس المحافظه')? "selected" : '' )}}>ضمن نفس المحافظه</option>
                                                        <option {{ ((($family_work->main_practical_case ?? '' )=='في محافظه اخرى')? "selected" : '' )}}>في محافظه اخرى</option>
                                                        <option {{ ((($family_work->main_practical_case ?? '' )=='داخل اسرائيل')? "selected" : '' )}}>داخل اسرائيل</option>
                                                        <option {{ ((($family_work->main_practical_case ?? '' )=='بالمستوطنات')? "selected" : '' )}}>بالمستوطنات</option>
                                                        <option {{ ((($family_work->main_practical_case ?? '' )=='بالخارج')? "selected" : '' )}}>بالخارج</option>

                                                    </select>
                                                </td>

                                                <td><select class="" data-placeholder="Select" name="work_contract">

                                                        <option {{ ((($family_work->work_contract ?? '' )=='صاحب عمل')? "selected" : '' )}}>صاحب عمل</option>
                                                        <option {{ ((($family_work->work_contract ?? '' )=='يعمل لحسسابه')? "selected" : '' )}}>يعمل لحسسابه</option>
                                                        <option {{ ((($family_work->work_contract ?? '' )=='مستخدم منتظم باجر')? "selected" : '' )}}>مستخدم منتظم باجر</option>
                                                        <option {{ ((($family_work->work_contract ?? '' )=='مستخدم غير منتظم باجر')? "selected" : '' )}}>مستخدم غير منتظم باجر</option>
                                                        <option {{ ((($family_work->work_contract ?? '' )=='يعمل لدى الاسرة بدون اجر')? "selected" : '' )}}>يعمل لدى الاسرة بدون اجر</option>

                                                    </select>
                                                </td>


                                                <td><select class="" data-placeholder="Select" name="vacations">

                                                        <option {{ ((($family_work->vacations ?? '' )=='المساهمه في تمويل التقاعد-مكافاه نهايه الخدمه')? "selected" : '' )}}>المساهمه في تمويل التقاعد-مكافاه نهايه الخدمه</option>
                                                        <option {{ ((($family_work->vacations ?? '' )=='منح اجازه سنويه مدفوعه او تعويض بدل اجازه')? "selected" : '' )}}>منح اجازه سنويه مدفوعه او تعويض بدل اجازه</option>
                                                        <option {{ ((($family_work->vacations ?? '' )=='منح اجازه مرضيه مدفوعه الاجر-في حال المرض او الاصابه')? "selected" : '' )}}>منح اجازه مرضيه مدفوعه الاجر-في حال المرض او الاصابه</option>
                                                        <option {{ ((($family_work->vacations ?? '' )=='منح اجازه امومه مدفوعه(للنساء فقط)')? "selected" : '' )}}>منح اجازه امومه مدفوعه(للنساء فقط)</option>
                                                        <option {{ ((($family_work->vacations ?? '' )=='لا')? "selected" : '' )}}>لا</option>
                                                    </select>
                                                </td>

                                                <td><select class="" data-placeholder="Select" name="marriage_status">

                                                        <option {{ ((($family_marriages->marriage_status ?? '' )=='لم يتزوج ابدا')? "selected" : '' )}}>لم يتزوج ابدا</option>
                                                        <option {{ ((($family_marriages->marriage_status ?? '' )=='عقد لاول مره')? "selected" : '' )}}>عقد لاول مره</option>
                                                        <option {{ ((($family_marriages->marriage_status ?? '' )=='متزوج')? "selected" : '' )}}>متزوج</option>
                                                        <option {{ ((($family_marriages->marriage_status ?? '' )=='مطلق')? "selected" : '' )}}>مطلق</option>
                                                        <option {{ ((($family_marriages->marriage_status ?? '' )=='ارمل')? "selected" : '' )}}>ارمل</option>
                                                        <option {{ ((($family_marriages->marriage_status ?? '' )=='منفصل')? "selected" : '' )}}>منفصل</option>

                                                    </select>
                                                </td>

                                                <td><input type="number" class="" name="age_first_marriage" value="{{$family_marriages->age_first_marriage ?? ''}}"></td>
                                                <td><input type="number" class="" name="duration_marriage" value="{{$family_marriages->duration_marriage ?? ''}}"></td>
                                                <td><input type="number" class="" name="number_for_life_born_a_live" value="{{$family_marriages->number_for_life_born_a_live ?? ''}}"></td>
                                                <td><input type="number" class="" name="number_for_life_a_live" value="{{$family_marriages->number_for_life_a_live ?? ''}}"></td>
                                                <td><input type="number" class="" name="number_for_annual_born_a_live" value="{{$family_marriages->number_for_annual_born_a_live ?? ''}}"></td>
                                                <td><input type="number" class="" name="number_for_annual_a_live" value="{{$family_marriages->number_for_annual_a_live ?? ''}}"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </fieldset>

                            <h3> بيانات المسكن و ظروف السكن </h3>
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="Residential_unit_number" value="{{$housing_data->Residential_unit_number ?? ''}}">
                                        <label>2-رقم تعداد المبنى في منطقة العد:</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">

                                        <select class="squareSelect" name="Building_condition" data-placeholder="Select">
                                            <option disabled selected>2a-هل المبنى:</option>
                                            <option {{ ((($housing_data->Building_condition ?? '' )=='للسكن فقط')? "selected" : '' )}}>للسكن فقط</option>
                                            <option {{ ((($housing_data->Building_condition ?? '' )=='للسكن والعمل')? "selected" : '' )}}>للسكن والعمل</option>
                                            <option {{ ((($housing_data->Building_condition ?? '' )=='للعمل فقط')? "selected" : '' )}}>للعمل فقط</option>
                                            <option {{ ((($housing_data->Building_condition ?? '' )=='مغلق')? "selected" : '' )}}>مغلق</option>
                                            <option {{ ((($housing_data->Building_condition ?? '' )=='خالي')? "selected" : '' )}}>خالي</option>
                                            <option {{ ((($housing_data->Building_condition ?? '' )=='مهجور')? "selected" : '' )}}>مهجور</option>
                                            <option {{ ((($housing_data->Building_condition ?? '' )=='تحت التشطيب')? "selected" : '' )}}>تحت التشطيب</option>

                                        </select>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="Building_counter_number" value="{{$housing_data->Building_counter_number ?? ''}}">
                                        <label>3-رقم الوحدة السكنيه في المبنى:</label>

                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6">


                                        <select class="squareSelect" name="condition_ofThe_housingUnit" data-placeholder="Select">
                                            <option disabled selected>3a-هل الوحدة السكنيه</option>
                                            <option {{ ((($housing_data->condition_ofThe_housingUnit ?? '' )=='مشغولة باسره')? "selected" : '' )}}>مشغولة باسره</option>
                                            <option {{ ((($housing_data->condition_ofThe_housingUnit ?? '' )=='مشغولة باسره و عمل')? "selected" : '' )}}>مشغولة باسره و عمل</option>
                                            <option {{ ((($housing_data->condition_ofThe_housingUnit ?? '' )=='سكن طلاب او عاملين لهم اسر اخرى داخل فلسطين')? "selected" : '' )}}>سكن طلاب او عاملين لهم اسر اخرى داخل فلسطين</option>
                                            <option {{ ((($housing_data->condition_ofThe_housingUnit ?? '' )=='للعمل فقط')? "selected" : '' )}}>للعمل فقط</option>
                                            <option {{ ((($housing_data->condition_ofThe_housingUnit ?? '' )=='مغلقة/خالية/مهجورة')? "selected" : '' )}}>مغلقة/خالية/مهجورة</option>
                                            <option {{ ((($housing_data->condition_ofThe_housingUnit ?? '' )=='تحت التشطيب')? "selected" : '' )}}>تحت التشطيب</option>

                                        </select>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="Family_number_in_the_building" value="{{$housing_data->Family_number_in_the_building ?? ''}}">
                                        <label>3b-رقم الاسرة في المبنى:</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="Family_number_in_the_counting_area" value="{{$housing_data->Family_number_in_the_counting_area ?? ''}}">
                                        <label>4-رقم الاسرة في منطقة العد</label>

                                    </div>
                                    <div class="col-lg-6">

                                        <select class="squareSelect" name="Adjective_works" data-placeholder="Select">
                                            <option disabled selected>5-صفه الاشغال:</option>
                                            <option {{ ((($housing_data->Adjective_works ?? '' )=='اسرة خاصة')? "selected" : '' )}}>اسرة خاصة</option>
                                            <option {{ ((($housing_data->Adjective_works ?? '' )=='مسكن عام')? "selected" : '' )}}>مسكن عام</option>
                                            <option {{ ((($housing_data->Adjective_works ?? '' )=='فندق')? "selected" : '' )}}>فندق</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">

                                        <select class="squareSelect" name="Dwelling_type" data-placeholder="Select">
                                            <option disabled selected>6-نوع المسكن</option>
                                            <option {{ ((($housing_data->Dwelling_type ?? '' )=='فيلا')? "selected" : '' )}}>فيلا</option>
                                            <option {{ ((($housing_data->Dwelling_type ?? '' )=='دار')? "selected" : '' )}}>دار</option>
                                            <option {{ ((($housing_data->Dwelling_type ?? '' )=='شقه')? "selected" : '' )}}>شقه</option>
                                            <option {{ ((($housing_data->Dwelling_type ?? '' )=='غرفه مستقلى')? "selected" : '' )}}>غرفه مستقلى</option>
                                            <option {{ ((($housing_data->Dwelling_type ?? '' )=='خيمه')? "selected" : '' )}}>خيمه</option>
                                            <option {{ ((($housing_data->Dwelling_type ?? '' )=='براكيه/كرفان/بركس')? "selected" : '' )}}>براكيه/كرفان/بركس</option>
                                            <option {{ ((($housing_data->Dwelling_type ?? '' )=='اخرى')? "selected" : '' )}}>اخرى</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-6">

                                        <select class="squareSelect" name="Possession_ofThe_dwelling" data-placeholder="Select">
                                            <option disabled selected>7-حيازة المسكن</option>
                                            <option {{ ((($housing_data->Possession_ofThe_dwelling ?? '' )=='ملك')? "selected" : '' )}}>ملك</option>
                                            <option {{ ((($housing_data->Possession_ofThe_dwelling ?? '' )=='مستأجر غير مفروشه')? "selected" : '' )}}>مستأجر غير مفروشه</option>
                                            <option {{ ((($housing_data->Possession_ofThe_dwelling ?? '' )=='مستأجر مفروش')? "selected" : '' )}}>مستأجر مفروش</option>
                                            <option {{ ((($housing_data->Possession_ofThe_dwelling ?? '' )=='دون مقابل')? "selected" : '' )}}>دون مقابل</option>
                                            <option {{ ((($housing_data->Possession_ofThe_dwelling ?? '' )=='مقابل عمل')? "selected" : '' )}}>مقابل عمل</option>
                                            <option {{ ((($housing_data->Possession_ofThe_dwelling ?? '' )=='اخرى')? "selected" : '' )}}>اخرى</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="Dwelling_space" value="{{$housing_data->Dwelling_space ?? ''}}">
                                        <label>8-مساحه المسكن (بالمتر المربع)</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="numberOfRooms" value="{{$housing_data->numberOfRooms ?? ''}}">
                                        <label>9-عدد غرف المسكن</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="numberOfSleepRooms" value="{{$housing_data->numberOfSleepRooms ?? ''}}">
                                        <label>10-عدد الغرف المخصصه للنوم</label>

                                    </div>
                                    <div class="col-lg-6">

                                        <select class="squareSelect" name="main_ofDrink_water" data-placeholder="Select">
                                            <option disabled selected>11-ماهو المصدرالرئيسي لمياه الشرب</option>
                                            <option {{ ((($housing_data->main_ofDrink_water ?? '' )=='شبكة مياه عامه متصلة بالمسكن')? "selected" : '' )}}>شبكة مياه عامه متصلة بالمسكن</option>
                                            <option {{ ((($housing_data->main_ofDrink_water ?? '' )=='بئر ارتوازي(محمي)/ينبوع(محمي)')? "selected" : '' )}}>بئر ارتوازي(محمي)/ينبوع(محمي)</option>
                                            <option {{ ((($housing_data->main_ofDrink_water ?? '' )=='بئر ارتوازي غير(محمي)/ينبوع(محمي)')? "selected" : '' )}}>بئر ارتوازي غير(محمي)/ينبوع(محمي)</option>
                                            <option {{ ((($housing_data->main_ofDrink_water ?? '' )=='مياه تجميع الامطار')? "selected" : '' )}}>مياه تجميع الامطار</option>
                                            <option {{ ((($housing_data->main_ofDrink_water ?? '' )=='صهريج/تنك/عربة تجر صهريج صغير')? "selected" : '' )}}>صهريج/تنك/عربة تجر صهريج صغير</option>
                                            <option {{ ((($housing_data->main_ofDrink_water ?? '' )=='مياه زجاجيه معدنيه')? "selected" : '' )}}>مياه زجاجيه معدنيه</option>
                                            <option {{ ((($housing_data->main_ofDrink_water ?? '' )=='حنفية عامه')? "selected" : '' )}}>حنفية عامه</option>
                                            <option {{ ((($housing_data->main_ofDrink_water ?? '' )=='اخرى')? "selected" : '' )}}>اخرى</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">

                                        <select class="squareSelect" name="main_ofElectricity" data-placeholder="Select">
                                            <option disabled selected>12-المصدرالرئيسي للكهرباء</option>
                                            <option {{ ((($housing_data->main_ofElectricity ?? '' )=='شبكة عامة')? "selected" : '' )}}>شبكة عامة</option>
                                            <option {{ ((($housing_data->main_ofElectricity ?? '' )=='مولد خاص')? "selected" : '' )}}>مولد خاص</option>
                                            <option {{ ((($housing_data->main_ofElectricity ?? '' )=='لا يوجد')? "selected" : '' )}}>لا يوجد</option>

                                        </select>

                                    </div>
                                    <div class="col-lg-6">

                                        <select class="squareSelect" name="type_of_toilet" data-placeholder="Select">
                                            <option disabled selected>13-ما نوع المرحاض الذي يستخدمه افراد الاسرة عادة</option>
                                            <option {{ ((($housing_data->type_of_toilet ?? '' )=='مرحاض متصل بشبكة مجاري عامة')? "selected" : '' )}}>مرحاض متصل بشبكة مجاري عامة</option>
                                            <option {{ ((($housing_data->type_of_toilet ?? '' )=='مرحاض متصل بحفرة امتصاصية')? "selected" : '' )}}>مرحاض متصل بحفرة امتصاصية</option>
                                            <option {{ ((($housing_data->type_of_toilet ?? '' )=='مرحاض متصل بحفرة صماء')? "selected" : '' )}}>مرحاض متصل بحفرة صماء</option>
                                            <option {{ ((($housing_data->type_of_toilet ?? '' )=='مرحاض متصل بمصرف مفتوح')? "selected" : '' )}}>مرحاض متصل بمصرف مفتوح</option>
                                            <option {{ ((($housing_data->type_of_toilet ?? '' )=='لايوجد مرحاض,في البرية,في الحقل')? "selected" : '' )}}>لايوجد مرحاض,في البرية,في الحقل</option>
                                            <option {{ ((($housing_data->type_of_toilet ?? '' )=='اخرى')? "selected" : '' )}}>اخرى</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">

                                        <select class="squareSelect" name="waste_Disposal" data-placeholder="Select">
                                            <option disabled selected>14-الطريقة المستخدمة للتخلص من النفايات المنزليه</option>
                                            <option {{ ((($housing_data->waste_Disposal ?? '' )=='القاؤها في اقرب حاوية')? "selected" : '' )}}>القاؤها في اقرب حاوية</option>
                                            <option {{ ((($housing_data->waste_Disposal ?? '' )=='حرقها')? "selected" : '' )}}>حرقها</option>
                                            <option {{ ((($housing_data->waste_Disposal ?? '' )=='القاؤها بشكل عشوائي')? "selected" : '' )}}>القاؤها بشكل عشوائي</option>
                                            <option {{ ((($housing_data->waste_Disposal ?? '' )=='اخرى')? "selected" : '' )}}>اخرى</option>

                                        </select>

                                    </div>
                                    <div class="col-lg-6">

                                        <select class="squareSelect" name="main_of_energy_for_cook" data-placeholder="Select">
                                            <option disabled selected>15-المصدر الرئيسي للطاقه المستخدمة في الطبخ</option>
                                            <option {{ ((($housing_data->main_of_energy_for_cook ?? '' )=='غاز')? "selected" : '' )}}>غاز</option>
                                            <option {{ ((($housing_data->main_of_energy_for_cook ?? '' )=='كاز')? "selected" : '' )}}>كاز</option>
                                            <option {{ ((($housing_data->main_of_energy_for_cook ?? '' )=='كهربا')? "selected" : '' )}}>كهربا</option>
                                            <option {{ ((($housing_data->main_of_energy_for_cook ?? '' )=='حطب')? "selected" : '' )}}>حطب</option>
                                            <option {{ ((($housing_data->main_of_energy_for_cook ?? '' )=='اخرى')? "selected" : '' )}}>اخرى</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">

                                        <select class="squareSelect" name="main_of_energy_for_heat" data-placeholder="Select">
                                            <option disabled selected>16-المصدر الرئيسي للطاقه المستخدمة في التدفئة</option>
                                            <option {{ ((($housing_data->main_of_energy_for_heat ?? '' )=='غاز')? "selected" : '' )}}>غاز </option>
                                            <option {{ ((($housing_data->main_of_energy_for_heat ?? '' )=='كاز')? "selected" : '' )}}>كاز</option>
                                            <option {{ ((($housing_data->main_of_energy_for_heat ?? '' )=='كهربا')? "selected" : '' )}}>كهربا</option>
                                            <option {{ ((($housing_data->main_of_energy_for_heat ?? '' )=='حطب')? "selected" : '' )}}>حطب</option>
                                            <option {{ ((($housing_data->main_of_energy_for_heat ?? '' )=='فحم')? "selected" : '' )}}>فحم</option>
                                            <option {{ ((($housing_data->main_of_energy_for_heat ?? '' )=='سولار')? "selected" : '' )}}>سولار</option>
                                            <option {{ ((($housing_data->main_of_energy_for_heat ?? '' )=='اخرى')? "selected" : '' )}}>اخرى</option>

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
                                        <input type="number" class="squareInput" name="kitchen" value="{{$utilities_and_goods->kitchen ?? ''}}">
                                        <label>17-عدد المطابخ في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="bathrooms" value="{{$utilities_and_goods->bathrooms ?? ''}}">
                                        <label>18-عدد الحمامات في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="toilets" value="{{$utilities_and_goods->toilets ?? ''}}">
                                        <label>19-عدد المراحيض في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="bathroom_toilets" value="{{$utilities_and_goods->bathroom_toilets ?? ''}}">
                                        <label>20-عدد المراحيض والحمام معا في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="privateCar" value="{{$utilities_and_goods->privateCar ?? ''}}">
                                        <label>21-عدد السيارات الخصوصيه في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="cooker" value="{{$utilities_and_goods->cooker ?? ''}}">
                                        <label>22-عدد طباخ غاز/كهربا في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="fridge" value="{{$utilities_and_goods->fridge ?? ''}}">
                                        <label>23-عدد الثلاجات الكهربائيه في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="fraser" value="{{$utilities_and_goods->fraser ?? ''}}">
                                        <label>24-عدد الفريزر في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="vacuum_cleaner" value="{{$utilities_and_goods->vacuum_cleaner ?? ''}}">
                                        <label>25-عدد المكانس الكهربائيه في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="microwave" value="{{$utilities_and_goods->microwave ?? ''}}">
                                        <label>26- عدد الميكرويف في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="washing_Machine" value="{{$utilities_and_goods->washing_Machine ?? ''}}">
                                        <label>27-عدد غسالات الملابس في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="blotter" value="{{$utilities_and_goods->blotter ?? ''}}">
                                        <label>28-عدد نشافات الملابس في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="dishwasher" value="{{$utilities_and_goods->dishwasher ?? ''}}">
                                        <label>29-عدد الجلايات في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="filter" value="{{$utilities_and_goods->filter ?? ''}}">
                                        <label>30-عدد منقيات المياه(filter)في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="LCD_LED" value="{{$utilities_and_goods->LCD_LED ?? ''}}">
                                        <label>31-عدد تلفزيون LED,LCD في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="TV" value="{{$utilities_and_goods->TV ?? ''}}">
                                        <label>32-عدد التلفزيون العادي غي المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="pichup_dish" value="{{$utilities_and_goods->pichup_dish ?? ''}}">
                                        <label>33-عدد الصحون اللاقطه في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="electric_fan" value="{{$utilities_and_goods->electric_fan ?? ''}}">
                                        <label>34-عدد المراوح الكهربائيه في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="conditioner" value="{{$utilities_and_goods->conditioner ?? ''}}">
                                        <label>35-عدد المكيفات في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="central_adaptation" value="{{$utilities_and_goods->central_adaptation ?? ''}}">
                                        <label>36-عدد التكييف المركزي في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="central_heating" value="{{$utilities_and_goods->central_heating ?? ''}}">
                                        <label>37-عدد التدفئه المركزيه في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="solar_heater" value="{{$utilities_and_goods->solar_heater ?? ''}}">
                                        <label>38-عدد السخان الشمسي في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="landline_telephone" value="{{$utilities_and_goods->landline_telephone ?? ''}}">
                                        <label>39-عدد خطوط الهاتف الارضيه في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" class="squareInput" name="home_library" value="{{$utilities_and_goods->home_library ?? ''}}">
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
                                        <input type="text" class="squareInput" name="Palestine_internet_line" value="{{$information_technologies->Palestine_internet_line ?? ''}}">
                                        <label>41-عدد خط الانترنت الفلسطيني في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="Israel_internet_line" value="{{$information_technologies->Israel_internet_line ?? ''}}">
                                        <label>42-عدد خط الانترنت الاسرائيلي في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="Palestine_Cellular" value="{{$information_technologies->Palestine_Cellular ?? ''}}">
                                        <label>43-عدد خطوط النقال(الخلوي) الفلسطيني في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="Israel_Cellular" value="{{$information_technologies->Israel_Cellular ?? ''}}">
                                        <label>44-عدد خطوط النقال(الخلوي) الاسرائيلي في المنزل</label>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="computer" value="{{$information_technologies->computer ?? ''}}">
                                        <label>45-عدد اجهزه الحاسوب في المنزل</label>

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="squareInput" name="Laptop" value="{{$information_technologies->Laptop ?? ''}}"">
                                        <label>46-عدد اجهزه اللابتوب في المنزل</label>

                                    </div>
                                </div>

                                <div class=" row">
                                        <div class="col-lg-6">
                                            <input type="text" class="squareInput" name="IPAD" value="{{$information_technologies->IPAD ?? ''}}"">
                                        <label>47- عدد اجهزه التابلت و ipod في المنزل</label>

                                    </div>
                                    <div class=" col-lg-6">
                                            <input type="text" class="squareInput" name="Artificial_mobile" value="{{$information_technologies->Artificial_mobile ?? ''}}">
                                            <label>48-عدد اجهزه الهواتف الذكيه في المنزل</label>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" class="squareInput" name="invedual_uses" value="{{$information_technologies->invedual_uses ?? ''}}">
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
                                                <td><input type="name" class="" name="Full_name_dead" value="{{$housing_data_dead->Full_name_dead ?? ''}}"></td>
                                                <td><select class="" data-placeholder="Select" name="relationships">

                                                        <option {{ ((($housing_data_dead->relationship ?? '' )=='رب الاسره')? "selected" : '' )}}>رب الاسره</option>
                                                        <option {{ ((($housing_data_dead->relationship ?? '' )=='زوجه/زوج')? "selected" : '' )}}>زوجه/زوج</option>
                                                        <option {{ ((($housing_data_dead->relationship ?? '' )=='ابن/ابنه')? "selected" : '' )}}>ابن/ابنه</option>
                                                        <option {{ ((($housing_data_dead->relationship ?? '' )=='اخ/اخت')? "selected" : '' )}}>اخ/اخت</option>
                                                        <option {{ ((($housing_data_dead->relationship ?? '' )=='حفيد/حفيده')? "selected" : '' )}}>حفيد/حفيده</option>
                                                        <option {{ ((($housing_data_dead->relationship ?? '' )=='حفيد/حفيده')? "selected" : '' )}}>حفيد/حفيده</option>
                                                        <option {{ ((($housing_data_dead->relationship ?? '' )=='زوج ابن/زوج بنت')? "selected" : '' )}}>زوج ابن/زوج بنت</option>
                                                        <option {{ ((($housing_data_dead->relationship ?? '' )=='اقرباء اخرون')? "selected" : '' )}}>اقرباء اخرون</option>
                                                        <option {{ ((($housing_data_dead->relationship ?? '' )=='اخرون')? "selected" : '' )}}>اخرون</option>
                                                    </select>
                                                </td>
                                                <td><select class="" data-placeholder="Select" name="genders">
                                                        <option {{ ((($housing_data_dead->gender ?? '' )=='ذكر')? "selected" : '' )}}>ذكر</option>
                                                        <option {{ ((($housing_data_dead->gender ?? '' )=='انثى')? "selected" : '' )}}>انثى</option>
                                                    </select></td>
                                                <td><input type="number" class="" name="ages" value="{{$housing_data_dead->age ?? ''}}"></td>
                                                <td><select class="" data-placeholder="Select" name="Death_certificate">
                                                        <option {{ ((($housing_data_dead->Death_certificate ?? '' )=='لا يوجد')? "selected" : '' )}}>لا يوجد</option>
                                                        <option {{ ((($housing_data_dead->Death_certificate ?? '' )=='تدريب مهني/تقني قصير في موقع العمل')? "selected" : '' )}}>تدريب مهني/تقني قصير في موقع العمل</option>
                                                        <option {{ ((($housing_data_dead->Death_certificate ?? '' )=='تدريب مهني اقل من 6 شهور')? "selected" : '' )}}>تدريب مهني اقل من 6 شهور</option>
                                                        <option {{ ((($housing_data_dead->Death_certificate ?? '' )=='تدريب مهني 6 لبى اقل من 12 شهر')? "selected" : '' )}}>تدريب مهني 6 لبى اقل من 12 شهر</option>
                                                        <option {{ ((($housing_data_dead->Death_certificate ?? '' )=='تدريب مهني1-2 سنه(دون خبره')? "selected" : '' )}}>تدريب مهني1-2 سنه(دون خبره)</option>
                                                        <option {{ ((($housing_data_dead->Death_certificate ?? '' )=='الالتحاق بمدرسه صناعيه/مهنيه(دون خبره)')? "selected" : '' )}}>الالتحاق بمدرسه صناعيه/مهنيه(دون خبره)</option>
                                                        <option {{ ((($housing_data_dead->Death_certificate ?? '' )=='تدريب مهني1-2 سنه(مع خبره)')? "selected" : '' )}}>تدريب مهني1-2 سنه(مع خبره)</option>
                                                        <option {{ ((($housing_data_dead->Death_certificate ?? '' )=='الالتحاق بمدرسه صناعيه/مهنيه(مع خبره)')? "selected" : '' )}}>الالتحاق بمدرسه صناعيه/مهنيه(مع خبره)</option>
                                                    </select></td>
                                                <td><select class="" data-placeholder="Select" name="marriage_status">
                                                        <option {{ ((($housing_data_dead->marriage_status ?? '' )=='لم يتزوج ابدا')? "selected" : '' )}}>لم يتزوج ابدا</option>
                                                        <option {{ ((($housing_data_dead->marriage_status ?? '' )=='عقد لاول مره')? "selected" : '' )}}>عقد لاول مره</option>
                                                        <option {{ ((($housing_data_dead->marriage_status ?? '' )=='متزوج')? "selected" : '' )}}>متزوج</option>
                                                        <option {{ ((($housing_data_dead->marriage_status ?? '' )=='مطلق')? "selected" : '' )}}>مطلق</option>
                                                        <option {{ ((($housing_data_dead->marriage_status ?? '' )=='ارمل')? "selected" : '' )}}>ارمل</option>
                                                        <option {{ ((($housing_data_dead->marriage_status ?? '' )=='منفصل')? "selected" : '' )}}>منفصل</option>
                                                    </select>
                                                </td>
                                                <td><select class="" data-placeholder="Select" name="pregnant_at_time_of_death">
                                                        <option {{ ((($housing_data_dead->pregnant_at_time_of_death ?? '' )=='نعم')? "selected" : '' )}}>نعم</option>
                                                        <option {{ ((($housing_data_dead->pregnant_at_time_of_death ?? '' )=='لا')? "selected" : '' )}}>لا</option>
                                                    </select>
                                                </td>
                                                <td><select class="" data-placeholder="Select" name="death_during_childbirth">

                                                        <option {{ ((($housing_data_dead->death_during_childbirth ?? '' )=='نعم')? "selected" : '' )}}>نعم</option>
                                                        <option {{ ((($housing_data_dead->death_during_childbirth ?? '' )=='لا')? "selected" : '' )}}>لا</option>

                                                    </select></td>
                                                <td><select class="" data-placeholder="Select" name="death_during_the_42_days_of_birth">
                                                        <option {{ ((($housing_data_dead->death_during_the_42_days_of_birth ?? '' )=='نعم')? "selected" : '' )}}>نعم</option>
                                                        <option {{ ((($housing_data_dead->death_during_the_42_days_of_birth ?? '' )=='لا')? "selected" : '' )}}>لا</option>
                                                    </select></td>
                                                <td><select class="" data-placeholder="Select" name="Death_due_accident">
                                                        <option {{ ((($housing_data_dead->Death_due_accident ?? '' )=='نعم')? "selected" : '' )}}>نعم</option>
                                                        <option {{ ((($housing_data_dead->Death_due_accident ?? '' )=='لا')? "selected" : '' )}}>لا</option>
                                                    </select></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </fieldset>
                            <input type="submit" class="btn btn-scusess" value="حفظ البيانات">
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
@endsection