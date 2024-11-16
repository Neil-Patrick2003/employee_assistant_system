<?php

namespace App\Http\Controllers\Employer;

use App\Models\JobSkill;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JobSkillController extends Controller
{
    public function store(Request $request){

        //validate forms
        $request->validate([
            'job_skill' => ['required' , 'max:255']
        ]);

        JobSkill::create([
            'name' => $request->job_skill
        ]);

        return redirect()->back()->with('sucess', 'Added Sucessfully');
    }
}
