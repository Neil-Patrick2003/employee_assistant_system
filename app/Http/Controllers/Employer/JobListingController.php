<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JobListingController extends Controller
{
    public function index(){
        return view('employer/job_listing/index');
    }

    public function create(){
        return view('employer/job_listing/create');
    }

    public function store(){
        dd(request()->toArray());
    }
}
