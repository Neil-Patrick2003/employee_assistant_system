<?php

namespace App\Http\Controllers\Employer;

use App\Models\User;
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
        $user = User::with('company')->get();

        dd($user);
    }
}
