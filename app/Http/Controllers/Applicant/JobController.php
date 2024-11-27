<?php

namespace App\Http\Controllers\Applicant;

use App\Models\User;
use App\Models\JobListing;
use App\Models\Resume;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index()
    {

        $jobs = JobListing::with('company')->get();

        return view('applicant.jobs.index', [
            'jobs' => $jobs,
        ]);

    }


    public function show($id)
    {
        $job = JobListing::with('company')->findOrFail($id);

        $resumes = Resume::with('user')
        ->where('user_id', '=', Auth::id())
        ->get();

    


        return view('applicant.jobs.show', [
            'job' => $job,
            'resumes' => $resumes
        ]);


    }
}
