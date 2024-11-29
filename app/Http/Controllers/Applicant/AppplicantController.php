<?php

namespace App\Http\Controllers\Applicant;

use App\Models\JobListing;
use App\Models\UserEducation;
use Illuminate\Http\Request;
use App\Models\UserJobPreferences;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Support\Facades\Auth;

class AppplicantController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function profile()
    {
        UserJobPreferences::firstOrCreate(['user_id' => Auth::id()]);

        $user = Auth::user()->loadMissing(['educations', 'skills', 'work_experiences', 'job_preference']);

        return view('applicant.profile.index', [
            'user' => $user,
            'editable' => true
        ]);
    }
}
