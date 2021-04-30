<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class exportedTableramallahController extends Controller
{
    // Cut off the line when the guest open the private page
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $family = \App\Models\family__data::all();
        // crosJoin Database in two tables
        // table one is family__datas cros table two is family__data_learnings
        $family__data_learnings = DB::table('family__datas')
            ->join('family__data_learnings', 'family__datas.user_id', '=', 'family__data_learnings.user_id')
            ->select('family__datas.*', 'family__data_learnings.*')
            ->where('family__datas.place', '=', 'رام الله')
            ->get();
        $data = array(
            'family__data_learnings' => $family__data_learnings,
        );
        return view('Tables.palestine.ramallah.exportedTableramallah')->with($data);
    }
}
