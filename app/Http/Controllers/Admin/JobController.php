<?php

namespace App\Http\Controllers\Admin;

use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JobController extends Controller
{
    public function index(){

        $jobs = JobListing::with('company')
        ->orderBy('title', 'asc')
        ->get();


        return view('admin.job.index', [
            'jobs' => $jobs
        ]);
    }
}
