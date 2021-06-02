<?php

namespace App\Http\Controllers;
use DB;
use App\Models\User;

class showEmployeeCotroller extends Controller
{
    // Cut off the line when the guest open the private page
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = DB::table('users')->where('privilige', '=', 'موظف')->get();

        $data = array(
            'users' => $users,
        );
        return view("showEmployee")->with($data);
    }
}
