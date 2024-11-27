<?php

namespace App\Http\Controllers\Applicant;

use Illuminate\Http\Request;
use App\Models\UserEducation;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class UserEducationController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'level' => 'required',
            'description' => 'required|max:255'
        ]);



        UserEducation::create([
            'user_id' => Auth::id(),
            'level' => $request->level,
            'description' => $request->description
            
        ]);


        return redirect()->back()->with('success', '.Education Added Successfully.');

    }
}
