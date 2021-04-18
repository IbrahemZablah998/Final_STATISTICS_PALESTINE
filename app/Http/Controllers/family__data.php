<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class family__data extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $family = \App\family__data::where('user_id', auth()->user()->id)->first();
        $family_learnings = \App\family__data_learnings::where('user_id', auth()->user()->id)->first();
        $family_works = \App\family__data_works::where('user_id', auth()->user()->id)->first();
        $family_marriages = \App\family__data_marriages::where('user_id', auth()->user()->id)->first();

            $housing_data = \App\housing_datas::where('user_id', auth()->user()->id)->first();
            $utilities_and_good = \App\utilities_and_goods::where('user_id', auth()->user()->id)->first();
            $information_technologie = \App\information_technologies::where('user_id', auth()->user()->id)->first();
            $housing_data = \App\housing_datas::where('user_id', auth()->user()->id)->first();
            $utilities_and_good = \App\utilities_and_goods::where('user_id', auth()->user()->id)->first();
            $information_technologie = \App\information_technologies::where('user_id', auth()->user()->id)->first();
            $housing_data_dead = \App\housing_data_dead::where('user_id', auth()->user()->id)->first();

            $data = array(
                'id' => auth()->user(),
                'ff' => $family,
                'ffL' => $family_learnings,
                'family_work' => $family_works,
                'family_marriages' => $family_marriages,
                'housing_data' => $housing_data,
                'utilities_and_goods' => $utilities_and_good,
                'information_technologies' => $information_technologie,
                'housing_data_dead' => $housing_data_dead,
            );
            return view('citizen')->with($data);
        
    }

    public function store(Request $request)
    {
        $family_marriages = \App\family__data_marriages::where('user_id', auth()->user()->id)->first();
        $family_works = \App\family__data_works::where('user_id', auth()->user()->id)->first();
        $family_learnings = \App\family__data_learnings::where('user_id', auth()->user()->id)->first();
        $family = \App\family__data::where('user_id', auth()->user()->id)->first();
        $housing_data = \App\housing_datas::where('user_id', auth()->user()->id)->first();
        $utilities_and_good = \App\utilities_and_goods::where('user_id', auth()->user()->id)->first();
        $information_technologies = \App\information_technologies::where('user_id', auth()->user()->id)->first();
        $housing_data_dead = \App\housing_data_dead::where('user_id', auth()->user()->id)->first();

        // There are the information of the data base family__data
        $field_family__data = request()->validate([
            'relationship' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'nationality' => 'required',
            'placeOfMotherTimeInvidualBirth' => 'required',
            'previous_place' => 'required',
            'reason_change_residence' => 'required',
            'religion' => 'required',
            'asylum_status' => 'required',
            'healthy_condition_difficulties' => 'required',
            'health_insurance' => 'required',
            'disease' => 'required',
            'periodAt_theCurrent_residenceIn_fullTime' => 'required',
        ]);
        if ($family == null) {
            $store_family__data = new \App\family__data;
            $store_family__data->fullName = auth()->user()->name;
            $store_family__data->relationship = ($field_family__data['relationship']);
            $store_family__data->gender = ($field_family__data['gender']);
            $store_family__data->age = ($field_family__data['age']);
            $store_family__data->nationality = ($field_family__data['nationality']);
            $store_family__data->placeOfMotherTimeInvidualBirth = ($field_family__data['placeOfMotherTimeInvidualBirth']);
            $store_family__data->previous_place = ($field_family__data['previous_place']);
            $store_family__data->reason_change_residence = ($field_family__data['reason_change_residence']);
            $store_family__data->religion = ($field_family__data['religion']);
            $store_family__data->asylum_status = ($field_family__data['asylum_status']);
            $store_family__data->healthy_condition_difficulties = ($field_family__data['healthy_condition_difficulties']);
            $store_family__data->health_insurance = ($field_family__data['health_insurance']);
            $store_family__data->disease = ($field_family__data['disease']);
            $store_family__data->place = auth()->user()->place;
            $store_family__data->periodAt_theCurrent_residenceIn_fullTime = ($field_family__data['periodAt_theCurrent_residenceIn_fullTime']);
            $store_family__data->user_id = auth()->user()->id;
            $store_family__data->save();
        }
        // There are the information of the data base family__data_learnings
        $field_family__data_learnings = request()->validate([
            'enroll_education' => 'required',
            'number_of_years_schooling' => 'required',
            'educational_major' => 'required',
            'highest_academic_qualification' => 'required',
            'technical_vocational_qualification' => 'required',

        ]);
        if ($family_learnings == null) {
            $store_family__data_learnings = new \App\family__data_learnings;
            $store_family__data_learnings->enroll_education = $field_family__data_learnings['enroll_education'];
            // $store_family__data_learnings->id = auth()->user()->id;
            $store_family__data_learnings->number_of_years_schooling = $field_family__data_learnings['number_of_years_schooling'];
            $store_family__data_learnings->educational_major = $field_family__data_learnings['educational_major'];
            $store_family__data_learnings->highest_academic_qualification = $field_family__data_learnings['highest_academic_qualification'];
            $store_family__data_learnings->technical_vocational_qualification = $field_family__data_learnings['technical_vocational_qualification'];
            $store_family__data_learnings->user_id = auth()->user()->id;
            $store_family__data_learnings->save();
        }
        // There are the information of the data base family__data_works
        $field_family__data_works = request()->validate([
            'realationship_of_work' => 'required',
            'overtime_work' => 'required',
            'major_occupation' => 'required',
            'major_economic_activity' => 'required',
            'sector' => 'required',
            'workplace' => 'required',
            'main_practical_case' => 'required',
            'work_contract' => 'required',
            'vacations' => 'required',
        ]);
        if ($family_works == null) {
            $store_family__data_works = new \App\family__data_works;
            // $store_family__data_works->id = auth()->user()->id;
            $store_family__data_works->realationship_of_work  = $field_family__data_works['realationship_of_work'];
            $store_family__data_works->overtime_work = $field_family__data_works['overtime_work'];
            $store_family__data_works->major_occupation = $field_family__data_works['major_occupation'];
            $store_family__data_works->major_economic_activity = $field_family__data_works['major_economic_activity'];
            $store_family__data_works->sector = $field_family__data_works['sector'];
            $store_family__data_works->workplace = $field_family__data_works['workplace'];
            $store_family__data_works->main_practical_case = $field_family__data_works['main_practical_case'];
            $store_family__data_works->work_contract = $field_family__data_works['work_contract'];
            $store_family__data_works->vacations = $field_family__data_works['vacations'];
            $store_family__data_works->user_id = auth()->user()->id;
            $store_family__data_works->save();
        }

        // There are the information of the data base family__data_marriages
        $field_family__data_marriages = request()->validate([
            'marriage_status' => 'required',
            'age_first_marriage' => 'required',
            'duration_marriage' => 'required',
            'number_for_life_born_a_live' => 'required',
            'number_for_life_a_live' => 'required',
            'number_for_annual_born_a_live' => 'required',
            'number_for_annual_a_live' => 'required',
        ]);
        if ($family_marriages == null) {
            $store_family__data_marriages = new \App\family__data_marriages;
            // $store_family__data_marriages->id = auth()->user()->id;
            $store_family__data_marriages->marriage_status = $field_family__data_marriages['marriage_status'];
            $store_family__data_marriages->age_first_marriage = $field_family__data_marriages['age_first_marriage'];
            $store_family__data_marriages->duration_marriage = $field_family__data_marriages['duration_marriage'];
            $store_family__data_marriages->number_for_life_born_a_live = $field_family__data_marriages['number_for_life_born_a_live'];
            $store_family__data_marriages->number_for_life_a_live = $field_family__data_marriages['number_for_life_a_live'];
            $store_family__data_marriages->number_for_annual_born_a_live = $field_family__data_marriages['number_for_annual_born_a_live'];
            $store_family__data_marriages->number_for_annual_a_live = $field_family__data_marriages['number_for_annual_a_live'];
            $store_family__data_marriages->user_id = auth()->user()->id;
            $store_family__data_marriages->save();
        }

        // There are the information of the data base housing_datas
        $field_housing_datas = request()->validate([
            'Residential_unit_number' => 'required',
            'Building_condition' => 'required',
            'Building_counter_number' => 'required',
            'condition_ofThe_housingUnit' => 'required',
            'Family_number_in_the_building' => 'required',
            'Family_number_in_the_counting_area' => 'required',
            'Adjective_works' => 'required',
            'Dwelling_type' => 'required',
            'Possession_ofThe_dwelling' => 'required',
            'Dwelling_space' => 'required',
            'numberOfRooms' => 'required',
            'numberOfSleepRooms' => 'required',
            'main_ofDrink_water' => 'required',
            'main_ofElectricity' => 'required',
            'type_of_toilet' => 'required',
            'waste_Disposal' => 'required',
            'main_of_energy_for_cook' => 'required',
            'main_of_energy_for_heat' => 'required',
        ]);
        if ($housing_data == null) {
            $store_housing_datas = new \App\housing_datas;
            // $store_housing_datas->id = auth()->user()->id;
            $store_housing_datas->Residential_unit_number = $field_housing_datas['Residential_unit_number'];
            $store_housing_datas->Building_counter_number = $field_housing_datas['Building_counter_number'];
            $store_housing_datas->Building_condition = $field_housing_datas['Building_condition'];
            $store_housing_datas->condition_ofThe_housingUnit = $field_housing_datas['condition_ofThe_housingUnit'];
            $store_housing_datas->Family_number_in_the_building = $field_housing_datas['Family_number_in_the_building'];
            $store_housing_datas->Family_number_in_the_counting_area = $field_housing_datas['Family_number_in_the_counting_area'];
            $store_housing_datas->Adjective_works = $field_housing_datas['Adjective_works'];
            $store_housing_datas->Dwelling_type = $field_housing_datas['Dwelling_type'];
            $store_housing_datas->Possession_ofThe_dwelling = $field_housing_datas['Possession_ofThe_dwelling'];
            $store_housing_datas->Dwelling_space = $field_housing_datas['Dwelling_space'];
            $store_housing_datas->numberOfRooms = $field_housing_datas['numberOfRooms'];
            $store_housing_datas->numberOfSleepRooms = $field_housing_datas['numberOfSleepRooms'];
            $store_housing_datas->main_ofDrink_water = $field_housing_datas['main_ofDrink_water'];
            $store_housing_datas->main_ofElectricity = $field_housing_datas['main_ofElectricity'];
            $store_housing_datas->type_of_toilet = $field_housing_datas['type_of_toilet'];
            $store_housing_datas->waste_Disposal = $field_housing_datas['waste_Disposal'];
            $store_housing_datas->main_of_energy_for_cook = $field_housing_datas['main_of_energy_for_cook'];
            $store_housing_datas->main_of_energy_for_heat = $field_housing_datas['main_of_energy_for_heat'];
            $store_housing_datas->user_id = auth()->user()->id;
            $store_housing_datas->save();
        }

        // There are the information of the data base utilities_and_goods
        $field_utilities_and_goods = request()->validate([
            'kitchen' => 'required',
            'bathrooms' => 'required',
            'toilets' => 'required',
            'bathroom_toilets' => 'required',
            'privateCar' => 'required',
            'cooker' => 'required',
            'fridge' => 'required',
            'fraser' => 'required',
            'vacuum_cleaner' => 'required',
            'microwave' => 'required',
            'washing_Machine' => 'required',
            'blotter' => 'required',
            'dishwasher' => 'required',
            'filter' => 'required',
            'LCD_LED' => 'required',
            'TV' => 'required',
            'pichup_dish' => 'required',
            'electric_fan' => 'required',
            'conditioner' => 'required',
            'central_adaptation' => 'required',
            'central_heating' => 'required',
            'solar_heater' => 'required',
            'landline_telephone' => 'required',
            'home_library' => 'required',
        ]);

        if ($utilities_and_good == null) {
            $find_housing_datas = \App\housing_datas::where('user_id', auth()->user()->id)->first();
            $store_utilities_and_goods = new \App\utilities_and_goods;
            $store_utilities_and_goods->kitchen = $field_utilities_and_goods['kitchen'];
            $store_utilities_and_goods->bathrooms = $field_utilities_and_goods['bathrooms'];
            $store_utilities_and_goods->id = $find_housing_datas->Family_number_in_the_building;
            $store_utilities_and_goods->toilets = $field_utilities_and_goods['toilets'];
            $store_utilities_and_goods->bathroom_toilets = $field_utilities_and_goods['bathroom_toilets'];
            $store_utilities_and_goods->privateCar = $field_utilities_and_goods['privateCar'];
            $store_utilities_and_goods->cooker = $field_utilities_and_goods['cooker'];
            $store_utilities_and_goods->fridge = $field_utilities_and_goods['fridge'];
            $store_utilities_and_goods->fraser = $field_utilities_and_goods['fraser'];
            $store_utilities_and_goods->vacuum_cleaner = $field_utilities_and_goods['vacuum_cleaner'];
            $store_utilities_and_goods->microwave = $field_utilities_and_goods['microwave'];
            $store_utilities_and_goods->washing_Machine = $field_utilities_and_goods['washing_Machine'];
            $store_utilities_and_goods->blotter = $field_utilities_and_goods['blotter'];
            $store_utilities_and_goods->dishwasher = $field_utilities_and_goods['dishwasher'];
            $store_utilities_and_goods->filter = $field_utilities_and_goods['filter'];
            $store_utilities_and_goods->LCD_LED = $field_utilities_and_goods['LCD_LED'];
            $store_utilities_and_goods->TV = $field_utilities_and_goods['TV'];
            $store_utilities_and_goods->pichup_dish = $field_utilities_and_goods['pichup_dish'];
            $store_utilities_and_goods->electric_fan = $field_utilities_and_goods['electric_fan'];
            $store_utilities_and_goods->conditioner = $field_utilities_and_goods['conditioner'];
            $store_utilities_and_goods->central_adaptation = $field_utilities_and_goods['central_adaptation'];
            $store_utilities_and_goods->central_heating = $field_utilities_and_goods['central_heating'];
            $store_utilities_and_goods->solar_heater = $field_utilities_and_goods['solar_heater'];
            $store_utilities_and_goods->landline_telephone = $field_utilities_and_goods['landline_telephone'];
            $store_utilities_and_goods->home_library = $field_utilities_and_goods['home_library'];
            $store_utilities_and_goods->user_id = auth()->user()->id;
            $store_utilities_and_goods->save();
        }

        // There are the information of the data base information_technologies
        $field_information_technologies = request()->validate([
            'Palestine_internet_line' => 'required',
            'Israel_internet_line' => 'required',
            'Palestine_Cellular' => 'required',
            'Israel_Cellular' => 'required',
            'computer' => 'required',
            'Laptop' => 'required',
            'IPAD' => 'required',
            'Artificial_mobile' => 'required',
            'invedual_uses' => 'required',
        ]);

        if ($information_technologies == null) {
            $find_housing_datas = \App\housing_datas::where('user_id', auth()->user()->id)->first();
            $store_information_technologies = new \App\information_technologies;
            $store_information_technologies->id = $find_housing_datas->Family_number_in_the_building;
            $store_information_technologies->Palestine_internet_line = $field_information_technologies['Palestine_internet_line'];
            $store_information_technologies->Israel_internet_line = $field_information_technologies['Israel_internet_line'];
            $store_information_technologies->Palestine_Cellular = $field_information_technologies['Palestine_Cellular'];
            $store_information_technologies->Israel_Cellular = $field_information_technologies['Israel_Cellular'];
            $store_information_technologies->computer = $field_information_technologies['computer'];
            $store_information_technologies->Laptop = $field_information_technologies['Laptop'];
            $store_information_technologies->IPAD = $field_information_technologies['IPAD'];
            $store_information_technologies->Artificial_mobile = $field_information_technologies['Artificial_mobile'];
            $store_information_technologies->invedual_uses = $field_information_technologies['invedual_uses'];
            $store_information_technologies->user_id = auth()->user()->id;
            $store_information_technologies->save();
        }

        // There are the information of the data base housing_data_dead
        $field_housing_data_dead = request()->validate([
            'Full_name_dead' => 'required',
            'genders' => 'required',
            'relationships' => 'required',
            'ages' => 'required',
            'Death_certificate' => 'required',
            'marriage_status' => 'required',
            'pregnant_at_time_of_death' => 'required',
            'death_during_childbirth' => 'required',
            'death_during_the_42_days_of_birth' => 'required',
            'Death_due_accident' => 'required',
        ]);

        if ($housing_data_dead == null) {

            $find_housing_datas = \App\housing_datas::where('user_id', auth()->user()->id)->first();
            $store_housing_data_dead = new \App\housing_data_dead;
            $store_housing_data_dead->Full_name_dead = $field_housing_data_dead['Full_name_dead'];
            $store_housing_data_dead->house_id = $find_housing_datas->Family_number_in_the_building;
            $store_housing_data_dead->gender = $field_housing_data_dead['genders'];
            $store_housing_data_dead->relationship = $field_housing_data_dead['relationships'];
            $store_housing_data_dead->age = $field_housing_data_dead['ages'];
            $store_housing_data_dead->Death_certificate = $field_housing_data_dead['Death_certificate'];
            $store_housing_data_dead->marriage_status = $field_housing_data_dead['marriage_status'];
            $store_housing_data_dead->pregnant_at_time_of_death = $field_housing_data_dead['pregnant_at_time_of_death'];
            $store_housing_data_dead->death_during_childbirth = $field_housing_data_dead['death_during_childbirth'];
            $store_housing_data_dead->death_during_the_42_days_of_birth = $field_housing_data_dead['death_during_the_42_days_of_birth'];
            $store_housing_data_dead->Death_due_accident = $field_housing_data_dead['Death_due_accident'];
            $store_housing_data_dead->user_id = auth()->user()->id;
            $store_housing_data_dead->save();
        }

        return view('citizen');
    }
}
