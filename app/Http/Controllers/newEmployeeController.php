<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class newEmployeeController extends Controller
{
    // Cut off the line when the guest open the private page
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view("newEmployee");
    }
    
    public function store(Request $request)
    {
        $users = new User;
        $firstName = $request->input('first_name');
        $secondName = $request->input('second_name');
        $thirdName = $request->input('third_name');
        $fourthName = $request->input('fourth_name');

        $users->name = $firstName . " " . $secondName . " " . $thirdName . " " . $fourthName;
        $users->id = $request->input('id');
        $users->place = $request->input('city');
        $users->mobile = $request->input('phoneNum');
        $users->email = $request->input('email');
        $users->password = Hash::make($request->input('password'));
        $users->privilige = $request->input("privilige");

        $users->save();

        return view("newEmployee");
    }
}
