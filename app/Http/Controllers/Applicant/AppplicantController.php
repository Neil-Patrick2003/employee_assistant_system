<?php

namespace App\Http\Controllers\Applicant;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AppplicantController extends Controller
{
    public function index(){
        return view('applicant.profile.index');
    }

    public function store(){
        dd(request()->toArray());
    }
}
