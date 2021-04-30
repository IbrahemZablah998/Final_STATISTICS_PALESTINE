<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class groupTableqalqilyaController extends Controller
{
    // Cut off the line when the guest open the private page
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $family__data_learnings = DB::table('family__datas')
            ->join('family__data_learnings', 'family__datas.user_id', '=', 'family__data_learnings.user_id')
            ->select('family__datas.*', 'family__data_learnings.*')
            ->where('family__datas.place', '=', 'قلقيلية')
            ->get();
        $data = array(
            'family__data_learnings' => $family__data_learnings,
        );
        return view('Tables.palestine.qalqilya.gropTableqalqilya')->with($data);
    }
}
