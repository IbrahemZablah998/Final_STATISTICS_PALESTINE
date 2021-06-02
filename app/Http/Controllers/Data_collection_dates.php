<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class Data_collection_dates extends Controller
{
    // Cut off the line when the guest open the private page
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        $Nablus = DB::table('DataCollectionDates')->where('city', '=', 'نابلس')->get();
        $Jnin = DB::table('DataCollectionDates')->where('city', '=', 'جنين')->get();
        $Ramallah = DB::table('DataCollectionDates')->where('city', '=', 'رام الله')->get();
        $Tulkarem = DB::table('DataCollectionDates')->where('city', '=', 'طولكرم')->get();

        $data = array(
            'Nabluscreated_at' => date('Y-m-d',strtotime($Nablus[0]->created_at)),
            'Nablusended_at' => date('Y-m-d',strtotime($Nablus[0]->ended_at)),

            'Jnincreated_at' => date('Y-m-d',strtotime($Jnin[0]->created_at)),
            'Jninended_at' => date('Y-m-d',strtotime($Jnin[0]->ended_at)),

            'Ramallahcreated_at' => date('Y-m-d',strtotime($Ramallah[0]->created_at)),
            'Ramallahended_at' => date('Y-m-d',strtotime($Ramallah[0]->ended_at)),

            'Tulkaremcreated_at' => date('Y-m-d',strtotime($Tulkarem[0]->created_at)),
            'Tulkaremended_at' => date('Y-m-d',strtotime($Tulkarem[0]->ended_at)),
        );
        return view("Data_collection_dates")->with($data);
    }

    public function update(Request $request)
    {
        $created_atNablus = $request->input('created_atNablus');
        $ended_atNablus = $request->input('ended_atNablus');

        $created_atJnin = $request->input('created_atJnin');
        $ended_atJnin = $request->input('ended_atJnin');

        $created_atRamallah = $request->input('created_atRamallah');
        $ended_atRamallah = $request->input('ended_atRamallah');

        $created_atTulkarem = $request->input('created_atTulkarem');
        $ended_atTulkarem = $request->input('ended_atTulkarem');


        if (DB::table('DataCollectionDates')->get()->first() == null) {

            DB::table('DataCollectionDates')->insert([
                'created_at' => $created_atNablus,
                'ended_at' => $ended_atNablus,
                'city' => 'نابلس',
            ]);

            DB::table('DataCollectionDates')->insert([
                'created_at' => $created_atJnin,
                'ended_at' => $ended_atJnin,
                'city' => 'جنين',
            ]);

            DB::table('DataCollectionDates')->insert([
                'created_at' => $created_atRamallah,
                'ended_at' => $ended_atRamallah,
                'city' => 'رام الله',
            ]);

            DB::table('DataCollectionDates')->insert([
                'created_at' => $created_atTulkarem,
                'ended_at' => $ended_atTulkarem,
                'city' => 'طولكرم',
            ]);
        } else {
            DB::update('update DataCollectionDates set created_at = ?, ended_at = ? where city = ?', [$created_atNablus, $ended_atNablus, "نابلس"]);
            DB::update('update DataCollectionDates set created_at = ?, ended_at = ? where city = ?', [$created_atJnin, $ended_atJnin, "جنين"]);
            DB::update('update DataCollectionDates set created_at = ?, ended_at = ? where city = ?', [$created_atRamallah, $ended_atRamallah, "رام الله"]);
            DB::update('update DataCollectionDates set created_at = ?, ended_at = ? where city = ?', [$created_atTulkarem, $ended_atTulkarem, "طولكرم"]);
        }
        return redirect("Data_collection_dates");
    }
}
