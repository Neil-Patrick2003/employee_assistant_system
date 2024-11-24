<?php

namespace App\Http\Controllers\Applicant;

use App\Models\JobListing;
use Illuminate\Routing\Controller;

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

        return view('applicant.jobs.show', [
            'job' => $job
        ]);


    }
}
