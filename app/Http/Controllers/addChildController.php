<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addChildController extends Controller
{
    // Cut off the line when the guest open the private page
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('addChild');
    }

    public function store(Request $request)
    {
        $store_family__data = new \App\Models\family__data;
        $store_family__data->fullName = $request->input('FullName');
        $store_family__data->relationship = $request->input('relationship');
        $store_family__data->gender = $request->input('gender');
        $store_family__data->age = $request->input('age');
        $store_family__data->nationality = $request->input('nationality');
        $store_family__data->placeOfMotherTimeInvidualBirth = $request->input('placeOfMotherTimeInvidualBirth');
        $store_family__data->previous_place = $request->input('previous_place');
        $store_family__data->reason_change_residence = " ";
        $store_family__data->religion = $request->input('religion');
        $store_family__data->asylum_status = " ";
        $store_family__data->healthy_condition_difficulties = $request->input('healthy_condition_difficulties');
        $store_family__data->health_insurance = $request->input('health_insurance');
        $store_family__data->disease = $request->input('disease');
        $store_family__data->place = $request->input('place');
        $store_family__data->periodAt_theCurrent_residenceIn_fullTime = $request->input('periodAt_theCurrent_residenceIn_fullTime');
        $store_family__data->user_id = $request->input('id');
        $store_family__data->save();

        // There are the information of the data base family__data_learnings
        $field_family__data_learnings = request()->validate([
            'enroll_education' => 'required',
            'number_of_years_schooling' => 'required',
            'educational_major' => 'required',
            'highest_academic_qualification' => 'required',
            'technical_vocational_qualification' => 'required',

        ]);
        $store_family__data_learnings = new \App\Models\family__data_learnings;
        $store_family__data_learnings->enroll_education = $field_family__data_learnings['enroll_education'];
        $store_family__data_learnings->number_of_years_schooling = $field_family__data_learnings['number_of_years_schooling'];
        $store_family__data_learnings->educational_major = $field_family__data_learnings['educational_major'];
        $store_family__data_learnings->highest_academic_qualification = $field_family__data_learnings['highest_academic_qualification'];
        $store_family__data_learnings->technical_vocational_qualification = $field_family__data_learnings['technical_vocational_qualification'];
        $store_family__data_learnings->user_id = $request->input('id');
        $store_family__data_learnings->save();
        
        return redirect('citizen');
    }
}
