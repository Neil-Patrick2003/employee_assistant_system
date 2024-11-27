<?php

namespace App\Http\Controllers\Applicant;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ApplicationController extends Controller
{
    public function store(){
        Application::create(
            'user_id' => Auth::id()
        );
    }
}
