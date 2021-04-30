<?php

namespace App\Http\Controllers;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class charts2Controller extends Controller
{
    // Cut off the line when the guest open the private page
    public function __construct()
    {
        $this->middleware('auth');
    }
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
                \App\Models\family__data::where('place', '=', 'نابلس')->count(),
                \App\Models\family__data::where('place', '=', 'جنين')->count(),
                \App\Models\family__data::where('place', '=', 'رام الله')->count(),
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

        $chart9 = (new LarapexChart)->lineChart()
            ->setTitle('احصائية اعداد نمو السكان ')
            ->setSubtitle('جميع المحافظات خلال 6 سنوات')
            ->addData('اجمالي عدد السكان في فلسطين', [2000248, 3111248, 3781248, 3999248, 4781248, 5781248])
            ->setXAxis(['2016', '2017', '2018', '2019', '2020', '2021']);

        $chart10 = (new LarapexChart)->barChart()
            ->setTitle('نسبة عدد السكان في كل محافظة')
            ->setSubtitle('حسب الجنس')
            // 6, 9, 3, 4, 10, 
            // 7, 3, 8, 2, 6, 
            ->addData('الذكور', [
                \App\Models\family__data::where('place', '=', 'نابلس')->where('gender', '=', 'ذكر')->count(),
                \App\Models\family__data::where('place', '=', 'جنين')->where('gender', '=', 'ذكر')->count(),
                \App\Models\family__data::where('place', '=', 'رام الله')->where('gender', '=', 'ذكر')->count(),
                \App\Models\family__data::where('place', '=', 'الخليل')->where('gender', '=', 'ذكر')->count(),
                \App\Models\family__data::where('place', '=', 'قلقيلة')->where('gender', '=', 'ذكر')->count(),
                \App\Models\family__data::where('place', '=', 'طولكرم')->where('gender', '=', 'ذكر')->count(),
            ])
            ->addData('الاناث', [
                \App\Models\family__data::where('place', '=', 'نابلس')->where('gender', '=', 'انثى')->count(),
                \App\Models\family__data::where('place', '=', 'جنين')->where('gender', '=', 'انثى')->count(),
                \App\Models\family__data::where('place', '=', 'رام الله')->where('gender', '=', 'انثى')->count(),
                \App\Models\family__data::where('place', '=', 'الخليل')->where('gender', '=', 'انثى')->count(),
                \App\Models\family__data::where('place', '=', 'قلقيلة')->where('gender', '=', 'انثى')->count(),
                \App\Models\family__data::where('place', '=', 'طولكرم')->where('gender', '=', 'انثى')->count(),
            ])
            ->setXAxis(['نابلس', 'جنين', 'رام الله', 'الخليل', 'قلقيلة', 'طولكرم']);


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
            'chart9' => $chart9,
            'chart10' => $chart10,
        ];
        return view('Charts.charts2', $send);
    }
}
