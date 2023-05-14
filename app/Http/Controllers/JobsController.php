<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Mail\JobEmail;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use Illuminate\Support\Facades\Mail;

class JobsController extends Controller
{
    public function index()
    {
        return view('jobs.index');
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
        
        Mail::to($inputs['email'])->send(new JobEmail($inputs));

        return response()->json([
            'status' => true,
            'message' => 'Data successfully saved'
        ]);
    }
}
