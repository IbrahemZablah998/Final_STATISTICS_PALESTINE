<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class groupTableController extends Controller
{
    public function index()
    {
        $family = \App\Models\family__data::all();
        // crosJoin Database in two tables
        // table one is family__datas cros table two is family__data_learnings
        $family__data_learnings = DB::table('family__datas')
                                                    ->join('family__data_learnings', 'family__datas.user_id', '=', 'family__data_learnings.user_id')
                                                    ->select('family__datas.*', 'family__data_learnings.*')
                                                    ->get();
        $data = array(
            'id' => auth()->user(),
            'family' => $family,
            'family__data_learnings' => $family__data_learnings,
        );
        return view('Tables.gropTable')->with($data);
    }
}
