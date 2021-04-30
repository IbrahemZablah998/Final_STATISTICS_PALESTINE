<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

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

<body class="light rtl side-closed submenu-closed">
    <section class="content">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <form id="wizard_with_validation" method="post" action="/addChild">
                            @csrf
                            <h3>تابع-بيانات افراد الاسرة</h3>
                            <fieldset>
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
                                                <th class="text-center" style="width:4%">الديانه</th>
                                                <th class="text-center" style="width:7%">نتيجه لحاله صحيه هل لديه صعوبه في...؟</th>
                                                <th class="text-center" style="width:7%">التامين الصحي</th>
                                                <th class="text-center" style="width:5%">هل يعاني من اي مرض مزمن بحسب تشخيص طبي,ويتلقى علاج بشكل مستمر</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <tr>
                                                <th scope="row">1</th>
                                                <td><input type="text" class="" name="FullName"></td>
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
                                                <td><input type="number" class="" name="id"></td>
                                                <td><input type="text" class="" name="placeOfMotherTimeInvidualBirth" value="{{$family->placeOfMotherTimeInvidualBirth ?? ''}}"></td>
                                                <td><input type="text" class="" name="place" value="{{ $id->place  ?? ''}}"></td>
                                                <td><input type="number" class="" name="periodAt_theCurrent_residenceIn_fullTime" value="{{$family->periodAt_theCurrent_residenceIn_fullTime ?? ''}}"></td>
                                                <td><input type="text" class="" name="previous_place" value="{{$family->previous_place ?? ''}}"></td>



                                                <td><select class="" data-placeholder="Select" name="religion">
                                                        <!-- <option disabled selected>16-المصدر الرئيسي للطاقه المستخدمة في التدفئة</option> -->
                                                        <option {{ ((($family->religion??  '' )=='مسيحي')? "selected" : '')}}>مسيحي</option>
                                                        <option {{ ((($family->religion??  '' )=='مسلم')? "selected" : '' )}}>مسلم</option>
                                                        <option {{ ((($family->religion??  '' )=='اخرى')? "selected" : '' )}}>اخرى</option>

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
                                    <table class="table table-bordered" style="overflow-x: scroll !important;min-width:300% !important;">
                                        <thead>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>

                                                <td colspan="2" class="align-center">المستوى التعليمي و التخصص</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th class="text-center" style="width:1%">التسلسل</th>
                                                <th class="text-center" style="width:3%">(للافراد 3 سنوات فاكثر) الالتحاق بالتعليم</th>
                                                <th class="text-center" style="width:4%">(للافراد 5 سنوات فاكثر) عدد سنوات الدراسه التي اتمها الفرد بنجاح في التعليم النظامي</th>
                                                <th class="text-center" style="width:3%">المستوى التعليمي</th>
                                                <th class="text-center" style="width:3%"> التخصص</th>
                                                <th class="text-center" style="width:4%">مكان الحصول على اعلى مؤهل علمي</th>
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
                                               
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </fieldset>
                            <a href="{{ url('citizen') }}" class="btn btn-scusess">رجوع الى الصفحة</a>
                            <input type="submit" class="btn btn-scusess" value="اضافة" name="submitbutton">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>