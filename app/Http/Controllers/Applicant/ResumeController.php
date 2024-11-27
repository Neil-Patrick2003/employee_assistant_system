<?php

namespace App\Http\Controllers\Applicant;

use App\Models\JobListing;
use App\Models\UserEducation;
use Illuminate\Http\Request;
use App\Models\UserJobPreferences;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Support\Facades\Auth;

class ResumeController extends Controller
{
    public function index(){
        return view('resumes.index');
    }

    public function create(Request $request)
    {
        $user = Auth::user()->load(['educations', 'skills', 'work_experiences']);

        return view('resumes.create', ['user' => $user]);
    }
}
