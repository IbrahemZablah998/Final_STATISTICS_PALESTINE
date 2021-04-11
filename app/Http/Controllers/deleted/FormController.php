<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;//model
use DB;
use App;
use Auth;

class FormController extends Controller
{
    public function citizen_form()
    {
        return view('citizen');
    }

    public function checkForm(Request $request){

        $rules = [
            'Full_Name' => ['required','alpha', 'min:10','max:50'],
            'Age_at_death' => ['required','integer' , 'min:0','max:3']
          ];
    
          $customMessages = [
              'Full_Name.required' => 'الاسم الثلاثي يجب ان لا يترك فارغاً.',
              'Full_Name.min' => 'الاسم الثلاثي يجب ان لا يقل عن  فارغاً.',
              'Full_Name.max' => 'الاسم الثلاثي يجب ان لا يزيد عن 50 حرفا.',
            
              'Age_at_death.required' => 'الاسم الثلاثي يجب ان لا يترك فارغة.',
              'Age_at_death.numeric' => 'الاسم الثلاثي يجب ان يضم ارقام فقط.',
              'Age_at_death.max' => 'الاسم الثلاثي يجب ان لا يزيد عن 3 ارقام'
          ];
    
          $this->validate($request, $rules, $customMessages);

            $user_data = array(
                'Full_Name'  => $request->input('Full_Name'),
                'Age_at_death' => $request->input('Age_at_death')
            );

            // if(Auth::attempt($user_data)){

            //     if(Auth::user()->privilige=="مواطن"){
            //         return redirect('/citizen');
            //     }else if(Auth::user()->privilige=="موظف"){
            //         return redirect('/index');
            //     }
            
            // }else{
            //     return back()->with('error', 'خطأ في تسجيل الدخول.');
            // }

    }


    // public function Register()
    // {
    //     return view('Register');
    // }

    public function checkForm1(Request $request){

        $rules = [
            //'regex:/(^([\p{Arabic}a-zA-z0-9 ]+)?$)/u'
            
            '1' => ['required', 'regex:/(^([\p{Arabic} ]+)?$)/u', 'min:3','max:15'],
            '1a' => ['required', 'regex:/(^([0-9 ]+)?$)/u', 'size:6'], // لازم بس 6
            '1b' => ['required', 'regex:/(^([0-9 ]+)?$)/u'],
            '2' => ['required', 'regex:/(^([0-9 ]+)?$)/u'],
            '2a' => ['required', 'regex:/(^([\p{Arabic} ]+)?$)/u'],
            '3' => ['required', 'regex:/(^([0-9 ]+)?$)/u'],
            '3a' => ['required', 'regex:/(^([0-9 ]+)?$)/u'],
            '3b' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '4' => ['required', 'regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '5' => ['required', 'regex:/(^([0-9 ]+)?$)/u'],
            '6' => ['required', 'regex:/(^([0-9 ]+)?$)/u'],
            '7' => ['required', 'regex:/(^([0-9 ]+)?$)/u'],
            '8' => ['required', 'regex:/(^([0-9 ]+)?$)/u', 'min:1','max:6'],
            '9' => ['required', 'regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '10' => ['required', 'regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '11' => ['required', 'regex:/(^([0-9 ]+)?$)/u'],
            '12' => ['required', 'regex:/(^([0-9 ]+)?$)/u'],
            '13' => ['required', 'regex:/(^([0-9 ]+)?$)/u'],
            '14' => ['required', 'regex:/(^([0-9 ]+)?$)/u'],
            '15' => ['required', 'regex:/(^([0-9 ]+)?$)/u'],
            '16' => ['required', 'regex:/(^([0-9 ]+)?$)/u'],
            // عدد المرافق والسلع في المسكن 
            '17' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '18' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '19' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '20' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '21' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '22' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '23' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '24' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '25' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '26' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '27' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '28' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '29' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '30' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '31' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '32' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '33' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '34' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '35' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '36' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '37' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '38' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '39' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '40' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            // تكنولوجيا النعلومات لدى الاسرة(العدد) 
            '41' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '42' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '43' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '44' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '45' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '46' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '47' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '48' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3'],
            '49' => ['required','regex:/(^([0-9 ]+)?$)/u', 'min:1','max:3']
            // بيانات افراد الاسرة

          ];
    
          $customMessages = [
           '1.alpha' => ' السؤال رقم 1 يجب ان يحتوي على احرف فقط.',
           '1.required' => ' السؤال الاول يجب ان لا يترك فارغاً.',
           '1.min' => 'الاسم الاول يجب ان يتكون على الاقل من خانه واحده',
           '1.max' => ' الاسم يجب ان لا يترك فارغاً.',

           '1a.required' => 'السؤال a1 يجب ان لا يترك فارغاً.',
           '1a.regex' => 'السؤال a1 يجب ان يحتوي ارقام صحيحه.',
           '1.size' => ' السؤال الاول يجب ان يتكون من 6 ارقام.',
           
           '1b.required' => ' السؤال b1 يجب ان لا يترك فارغاً.',
           '1b.regex' => 'السؤال b1 يجب ان يحتوي ارقام صحيحه.',
        
           '2.required' => 'السؤال 2 يجب ان لا يترك فارغاً.',
           '2.regex' => 'السؤال 2 يجب ان يحتوي ارقام صحيحه.',

           '3.required' => ' السؤال 3 يجب ان لا يترك فارغاً.',
           '3.regex' => 'السؤال 3 يجب ان يحتوي ارقام صحيحه.',

           '3b.required' => ' السؤال 3b يجب ان لا يترك فارغاً.',
           '3.regex' => 'السؤال 3b يجب ان يحتوي ارقام صحيحه.',
            
            '4.required' => ' السؤال 4 يجب ان لا يترك فارغاً.',
            '4.regex' => 'السؤال 4 يجب ان يحتوي ارقام صحيحه.',

            '8.required' => ' السؤال 8 يجب ان لا يترك فارغاً.',
            '8.regex' => 'السؤال 8 يجب ان يحتوي ارقام صحيحه.',

            '9.required' => ' السؤال 9 يجب ان لا يترك فارغاً.',
            '9.regex' => 'السؤال 9 يجب ان يحتوي ارقام صحيحه.',

            '10.required' => ' السؤال 10 يجب ان لا يترك فارغاً.',
            '10.regex' => 'السؤال 10 يجب ان يحتوي ارقام صحيحه.',

             // عدد المرافق والسلع في المسكن 
            
            '17.required' => ' السؤال 17 يجب ان لا يترك فارغاً.',
            '17.regex' => 'السؤال 17 يجب ان يحتوي ارقام صحيحه.',

            
            '18.required' => ' السؤال 18 يجب ان لا يترك فارغاً.',
            '18.regex' => 'السؤال 18 يجب ان يحتوي ارقام صحيحه.',

            '19.required' => ' السؤال 19 يجب ان لا يترك فارغاً.',
            '19.regex' => 'السؤال 19 يجب ان يحتوي ارقام صحيحه.',

            '20.required' => ' السؤال 20 يجب ان لا يترك فارغاً.',
            '20.regex' => 'السؤال 20 يجب ان يحتوي ارقام صحيحه.',

            '21.required' => ' السؤال 21 يجب ان لا يترك فارغاً.',
            '21.regex' => 'السؤال 21 يجب ان يحتوي ارقام صحيحه.',

            '22.required' => ' السؤال 22 يجب ان لا يترك فارغاً.',
            '22.regex' => 'السؤال 22 يجب ان يحتوي ارقام صحيحه.',

            '23.required' => ' السؤال 23 يجب ان لا يترك فارغاً.',
            '23.regex' => 'السؤال 23 يجب ان يحتوي ارقام صحيحه.',

            '24.required' => ' السؤال 24 يجب ان لا يترك فارغاً.',
            '24.regex' => 'السؤال 24 يجب ان يحتوي ارقام صحيحه.',

            '25.required' => ' السؤال 25 يجب ان لا يترك فارغاً.',
            '25.regex' => 'السؤال 25 يجب ان يحتوي ارقام صحيحه.',

            '26.required' => ' السؤال 26 يجب ان لا يترك فارغاً.',
            '26.regex' => 'السؤال 26 يجب ان يحتوي ارقام صحيحه.',

            '27.required' => ' السؤال 27 يجب ان لا يترك فارغاً.',
            '27.regex' => 'السؤال 27 يجب ان يحتوي ارقام صحيحه.',

            '28.required' => ' السؤال 28 يجب ان لا يترك فارغاً.',
            '28.regex' => 'السؤال 28 يجب ان يحتوي ارقام صحيحه.',

            '29.required' => ' السؤال 29 يجب ان لا يترك فارغاً.',
            '29.regex' => 'السؤال 29 يجب ان يحتوي ارقام صحيحه.',

            '30.required' => ' السؤال 30 يجب ان لا يترك فارغاً.',
            '30.regex' => 'السؤال 30 يجب ان يحتوي ارقام صحيحه.',

            '31.required' => ' السؤال 31 يجب ان لا يترك فارغاً.',
            '31.regex' => 'السؤال 31 يجب ان يحتوي ارقام صحيحه.',

            '32.required' => ' السؤال 32 يجب ان لا يترك فارغاً.',
            '32.regex' => 'السؤال 32 يجب ان يحتوي ارقام صحيحه.',

            '33.required' => ' السؤال 33 يجب ان لا يترك فارغاً.',
            '33.regex' => 'السؤال 33 يجب ان يحتوي ارقام صحيحه.',

            '34.required' => ' السؤال 34 يجب ان لا يترك فارغاً.',
            '34.regex' => 'السؤال 34 يجب ان يحتوي ارقام صحيحه.',

            '35.required' => ' السؤال 35 يجب ان لا يترك فارغاً.',
            '35.regex' => 'السؤال 35 يجب ان يحتوي ارقام صحيحه.',

            '36.required' => ' السؤال 36 يجب ان لا يترك فارغاً.',
            '36.regex' => 'السؤال 36 يجب ان يحتوي ارقام صحيحه.',

            '37.required' => ' السؤال 37 يجب ان لا يترك فارغاً.',
            '37.regex' => 'السؤال 37 يجب ان يحتوي ارقام صحيحه.',

            '38.required' => ' السؤال 38 يجب ان لا يترك فارغاً.',
            '38.regex' => 'السؤال 38 يجب ان يحتوي ارقام صحيحه.',

            '39.required' => ' السؤال 39 يجب ان لا يترك فارغاً.',
            '39.regex' => 'السؤال 39 يجب ان يحتوي ارقام صحيحه.',

            '40.required' => ' السؤال 40 يجب ان لا يترك فارغاً.',
            '40.regex' => 'السؤال 40 يجب ان يحتوي ارقام صحيحه.',

             // تكنولوجيا النعلومات لدى الاسرة(العدد)

            '41.required' => ' السؤال 41 يجب ان لا يترك فارغاً.',
            '41.regex' => 'السؤال 41 يجب ان يحتوي ارقام صحيحه.',

            '42.required' => ' السؤال 42 يجب ان لا يترك فارغاً.',
            '42.regex' => 'السؤال 42 يجب ان يحتوي ارقام صحيحه.',

            '43.required' => ' السؤال 43 يجب ان لا يترك فارغاً.',
            '43.regex' => 'السؤال 43 يجب ان يحتوي ارقام صحيحه.',

            '44.required' => ' السؤال 44 يجب ان لا يترك فارغاً.',
            '44.regex' => 'السؤال 44 يجب ان يحتوي ارقام صحيحه.',

            '45.required' => ' السؤال 45 يجب ان لا يترك فارغاً.',
            '45.regex' => 'السؤال 45 يجب ان يحتوي ارقام صحيحه.',

            '46.required' => ' السؤال 46 يجب ان لا يترك فارغاً.',
            '46.regex' => 'السؤال 46 يجب ان يحتوي ارقام صحيحه.',

            '47.required' => ' السؤال 47 يجب ان لا يترك فارغاً.',
            '47.regex' => 'السؤال 47 يجب ان يحتوي ارقام صحيحه.',

            '48.required' => ' السؤال 48 يجب ان لا يترك فارغاً.',
            '48.regex' => 'السؤال 48 يجب ان يحتوي ارقام صحيحه.',

            '49.required' => ' السؤال 49 يجب ان لا يترك فارغاً.',
            '49.regex' => 'السؤال 49 يجب ان يحتوي ارقام صحيحه.',
          ];
    
          $this->validate($request, $rules, $customMessages);

            $user_data = array(
                '1'  => $request->input('1'),
                '1a'  => $request->input('1a'),
                '1b'  => $request->input('1b'),
                '2'  => $request->input('2'),
                '3'  => $request->input('3'),
                '3b'  => $request->input('3b'),
                '4' => $request->input('4'),
                '8' => $request->input('8'),
                '9' => $request->input('9'),
                '10' => $request->input('10'),

                '17' => $request->input('17'),
                '18' => $request->input('18'),
                '19' => $request->input('19'),
                '20' => $request->input('20'),
                '21' => $request->input('21'),
                '22' => $request->input('22'),
                '23' => $request->input('23'),
                '24' => $request->input('24'),
                '25' => $request->input('25'),
                '26' => $request->input('26'),
                '27' => $request->input('27'),
                '28' => $request->input('28'),
                '29' => $request->input('29'),
                '30' => $request->input('30'),
                '31' => $request->input('31'),
                '32' => $request->input('32'),
                '33' => $request->input('33'),
                '34' => $request->input('34'),
                '35' => $request->input('35'),
                '36' => $request->input('36'),
                '37' => $request->input('37'),
                '38' => $request->input('38'),
                '39' => $request->input('39'),
                '40' => $request->input('40'),

                '41' => $request->input('41'),
                '42' => $request->input('42'),
                '43' => $request->input('43'),
                '44' => $request->input('44'),
                '45' => $request->input('45'),
                '46' => $request->input('46'),
                '47' => $request->input('47'),
                '48' => $request->input('48'),
                '49' => $request->input('49'),

            );

            // if(Auth::attempt($user_data)){

            //     view('login');
            
            // }else{
            //     return back()->with('error', 'خطأ في انشاء الحساب.');
            // }

    }

    public function confirmation()
    {
        return view('confirmation');
    }


}
