<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Mail\JobEmail;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use Illuminate\Support\Facades\Mail;
use App\Models\Role;
use App\Models\TotalYearsOfWorkExperience;
use App\Models\PrimarySkill;
use App\Models\YearsOfExperienceWithPrimarySkill;
use App\Models\EnglishProficiency;
use App\Models\Country;

class JobsController extends Controller
{
    public function index()
    {
        // Get roles
        $roles = Role::all();

        // Get Total Years Of Work Experience
        $work_experience = TotalYearsOfWorkExperience::all();

        // Primary Skill
        $primary_skills = PrimarySkill::all();

        // Years Of Experience With Primary Skill
        $years_experience_skills = YearsOfExperienceWithPrimarySkill::all();

        // English Proficiency
        $english_proficiency = EnglishProficiency::all();
        
        // Country
        $countries = Country::all();

        return view('jobs.index', compact('roles', 'work_experience', 'primary_skills', 'years_experience_skills', 'english_proficiency', 'countries'));
    }

    public function store(Request $request)
    {
        foreach($request->data as $field) {
            if($field['name'] == "_token") {
                continue;
            }
            $inputs[$field['name']] = $field['value'];
        }

        Job::create($inputs);
        
        // Mail::to($inputs['email'])->send(new JobEmail($inputs));

        return response()->json([
            'status' => true,
            'message' => 'Data successfully saved'
        ]);
    }

    public function check_email(Request $request){
        if($request->get('email'))
        {
        $email = $request->get('email');
        $data = Job::where('email', $email)->count();
            if($data > 0)
            {
                echo 'not_unique';
            }
            else
            {
                echo 'unique';
            }
        }
    }
}
