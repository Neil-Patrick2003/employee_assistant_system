<?php

namespace App\Http\Controllers\Applicant;

use App\Models\Company;
use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JobController extends Controller
{
    public function index(){
        
        return view('applicant.index');
    }
}