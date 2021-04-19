<?php

namespace App\Http\Controllers;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class charts2Controller extends Controller
{
    public function index()
    {
        // statistics male and female in the palestine
        $chart = (new LarapexChart)->pieChart()
            ->setTitle('ذكر و انثى')
            ->addData([
                \App\Models\family__data::where('gender', '=', 'ذكر')->count(),
                \App\Models\family__data::where('gender', '=', 'انثى')->count(),
            ])
            ->setLabels(['ذكر', 'انثى']);

        // statistics population city in the palestine
        $chart1 = (new LarapexChart)->pieChart()
            ->setTitle('نسبة السكان في كل محافظة في فلسطين')
            ->addData([
                \App\Models\User::where('place', '=', 'نابلس')->count(),
                \App\Models\User::where('place', '=', 'جنين')->count(),
                \App\Models\User::where('place', '=', 'رام الله')->count(),
            ])
            ->setLabels(['جنين', 'نابلس', 'رام الله']);

        // statistics religion in the palestine
        $chart2 = (new LarapexChart)->polarAreaChart()
            ->setTitle('نسبة الديانات في فلسطين')
            ->addData([
                \App\Models\family__data::where('religion', '=', 'مسلم')->count(),
                \App\Models\family__data::where('religion', '=', 'مسيحي')->count(),
            ])
            ->setLabels(['مسلم', 'مسيحي']);

        
        $usersmale = DB::table('family__data_marriages')->get();
        $chart3 = (new LarapexChart)->pieChart()
            ->setTitle('نسبة الولادات طيله الحياه الزوجيه(للنساء14 فاكثر)ٍ في فلسطين')
            ->addData([
                $usersmale->sum('number_for_life_born_a_live'),
                $usersmale->sum('number_for_life_a_live'),
            ])
            ->setLabels(['عدد من ولدو احياء	', 'عدد الباقين منهم على قيد الحياه	']);


        $usersmale = DB::table('family__data_marriages')->get();
        $chart4 = (new LarapexChart)->radialChart()
            ->setTitle('الولادات خلال ال12 شهر السابقه(للنساء14-54)ٍ')
            ->addData([
                $usersmale->sum('number_for_annual_born_a_live'),
                $usersmale->sum('number_for_annual_a_live'),
            ])
            ->setLabels(['عدد من ولدو احياء	', 'عدد الباقين منهم على قيد الحياه	']);


        $chart5 = (new LarapexChart)->donutChart()
            ->setTitle('الحالة الزواجية في فلسطين')
            ->addData([
                \App\Models\family__data_marriages::where('marriage_status', '=', 'متزوج')->count(),
                \App\Models\family__data_marriages::where('marriage_status', '=', 'مطلق')->count(),
            ])
            ->setLabels(['متزوج', 'مطلق']);

        $usersmale = DB::table('Information_technologies')->get();
        $chart6 = (new LarapexChart)->donutChart()
            ->setTitle('تكنولوجيا النعلومات لدى الاسرة(العدد)')
            ->addData([
                $usersmale->sum('Palestine_internet_line'),
                $usersmale->sum('Israel_internet_line'),
                $usersmale->sum('Palestine_Cellular'),
                $usersmale->sum('Israel_Cellular'),
                $usersmale->sum('computer'),
                $usersmale->sum('Laptop'),
            ])
            ->setLabels([
                'عدد خطوط الانترنت الفلسطينية',
                'عدد خطوط الانترنت الاسرائلية',
                'عدد الشرائح الوطنية',
                'عدد الشرائح الاسرئلية',
                'عدد الاجهزة الكمبيوتر',
                'عدد الاجهزة اللابتوب',
            ]);

        $chart7 = (new LarapexChart)->pieChart()
            ->setTitle('نسبة عدد الوفايات ')
            ->setSubtitle('حسب الجنس')
            ->addData([
                \App\Models\housing_data_dead::where('gender', '=', 'ذكر')->count(),
                \App\Models\housing_data_dead::where('gender', '=', 'انثى')->count(),
            ])
            ->setLabels(['ذكر', 'انثى']);

        $chart8 = (new LarapexChart)->pieChart()
            ->setTitle('نسبة عدد الوفايات ')
            ->setSubtitle('حسب العمر')
            ->addData([
                \App\Models\housing_data_dead::where('age', '>=', 50)->count(),
                \App\Models\housing_data_dead::where('age', '<', 50)->count(),
            ])
            ->setLabels(['ما فوق ال 50 عاما', 'ما ادنى من 50 عاما']);

        $send = [
            'chart' => $chart,
            'chart1' => $chart1,
            'chart2' => $chart2,
            'chart3' => $chart3,
            'chart4' => $chart4,
            'chart5' => $chart5,
            'chart6' => $chart6,
            'chart7' => $chart7,
            'chart8' => $chart8,
        ];
        return view('Charts.charts2', $send);
    }
}
