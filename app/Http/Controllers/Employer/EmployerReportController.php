<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EmployerReportController extends Controller
{
    public function index(){
        return view('employer.report.index');
    }
}
