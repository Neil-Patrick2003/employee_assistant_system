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

    public function profile(){
        $user_education = UserEducation::where('user_id', '=', Auth::id());

        return view('applicant.profile.index', [
            'user_education' => $user_education
        ]);
    }

    
    public function store(){
        dd(request()->toArray());
    }
}
