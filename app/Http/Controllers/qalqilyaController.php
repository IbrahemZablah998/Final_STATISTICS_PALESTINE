<?php

namespace App\Http\Controllers;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class qalqilyaController extends Controller
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
            ->setTitle('نسبة الذكر والانثى في محافظة قلقيلة')
            ->addData([
                \App\Models\family__data::where('place', '=', 'قلقيلة')->where('gender', '=', 'ذكر')->count(),
                \App\Models\family__data::where('place', '=', 'قلقيلة')->where('gender', '=', 'انثى')->count(),
            ])
            ->setLabels(['ذكر', 'انثى']);

        // statistics population city in the palestine
        $chart1 = (new LarapexChart)->pieChart()
            ->setTitle('عدد السكان في محافظة قلقيلة')
            ->addData([
                \App\Models\family__data::where('place', '=', 'قلقيلة')->count(),
            ])
            ->setLabels(['قلقيلة']);

        // statistics religion in the palestine
        $chart2 = (new LarapexChart)->polarAreaChart()
            ->setTitle('نسبة الديانات في محافظة قلقيلة')
            ->addData([
                \App\Models\family__data::where('place', '=', 'قلقيلة')->where('religion', '=', 'مسلم')->count(),
                \App\Models\family__data::where('place', '=', 'قلقيلة')->where('religion', '=', 'مسيحي')->count(),
            ])
            ->setLabels(['مسلم', 'مسيحي']);


        $usersmale = DB::table('family__datas')
            ->join('family__data_marriages', 'family__datas.user_id', '=', 'family__data_marriages.user_id')
            ->select('family__datas.*', 'family__data_marriages.*')
            ->where('family__datas.place', '=', 'قلقيلة')
            ->get();
        $chart3 = (new LarapexChart)->pieChart()
            ->setTitle('نسبة الولادات طيله الحياه الزوجيه(للنساء14 فاكثر)ٍ في محافظة قلقيلة')
            ->addData([
                $usersmale->sum('number_for_life_born_a_live'),
                $usersmale->sum('number_for_life_a_live'),
            ])
            ->setLabels(['عدد من ولدو احياء	', 'عدد الباقين منهم على قيد الحياه	']);

        $usersmale = DB::table('family__datas')
            ->join('family__data_marriages', 'family__datas.user_id', '=', 'family__data_marriages.user_id')
            ->select('family__datas.*', 'family__data_marriages.*')
            ->where('family__datas.place', '=', 'قلقيلة')
            ->get();
        $chart4 = (new LarapexChart)->radialChart()
            ->setTitle('نسبة الولادات خلال ال 12 شهر السابقة (للنساء 14-54) في محافظة قلقيلة')
            ->addData([
                $usersmale->sum('number_for_annual_born_a_live'),
                $usersmale->sum('number_for_annual_a_live'),
            ])
            ->setLabels(['عدد من ولدو احياء	', 'عدد الباقين منهم على قيد الحياه	']);


        $usersmale = DB::table('family__datas')
            ->join('family__data_marriages', 'family__datas.user_id', '=', 'family__data_marriages.user_id')
            ->select('family__datas.*', 'family__data_marriages.*')
            ->where('family__datas.place', '=', 'قلقيلة')
            ->get();

        $chart5 = (new LarapexChart)->donutChart()
            ->setTitle('الحالة الزواجية في محافظة قلقيلة')
            ->addData([
                $usersmale->where('marriage_status', '=', 'متزوج')->count(),
                $usersmale->where('marriage_status', '=', 'لم يتزوج ابدا')->count(),
            ])
            ->setLabels(['متزوج', 'لم يتزوج ابدا']);


        $usersmale = DB::table('family__datas')
            ->join('Information_technologies', 'family__datas.user_id', '=', 'Information_technologies.user_id')
            ->select('family__datas.*', 'Information_technologies.*')
            ->where('family__datas.place', '=', 'قلقيلة')
            ->get();
        $chart6 = (new LarapexChart)->donutChart()
            ->setTitle('تكنولوجيا النعلومات لدى الاسرة(العدد) في محافظة قلقيلة')
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

        $usersmale = DB::table('family__datas')
            ->join('housing_data_deads', 'family__datas.user_id', '=', 'housing_data_deads.user_id')
            ->select('family__datas.*', 'housing_data_deads.*')
            ->where('family__datas.place', '=', 'قلقيلة')
            ->get();
        $chart7 = (new LarapexChart)->pieChart()
            ->setTitle('نسبة عدد الوفايات في محافظة قلقيلة')
            ->setSubtitle('حسب الجنس')
            ->addData([
                $usersmale->where('gender', '=', 'ذكر')->count(),
                $usersmale->where('gender', '=', 'انثى')->count(),
            ])
            ->setLabels(['ذكر', 'انثى']);


        $usersmale = DB::table('family__datas')
            ->join('housing_data_deads', 'family__datas.user_id', '=', 'housing_data_deads.user_id')
            ->select('family__datas.*', 'housing_data_deads.*')
            ->where('family__datas.place', '=', 'قلقيلة')
            ->get();
        $chart8 = (new LarapexChart)->pieChart()
            ->setTitle('نسبة عدد الوفايات في محافظة قلقيلة')
            ->setSubtitle('حسب العمر')
            ->addData([
                $usersmale->where('age', '>=', 50)->count(),
                $usersmale->where('age', '<', 50)->count(),
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
        return view('Palestine.qalqilya.qalqilya', $send);
    }
}
