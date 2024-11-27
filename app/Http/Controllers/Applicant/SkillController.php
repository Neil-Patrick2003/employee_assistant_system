<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\UserSkill;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
        ]);

        UserSkill::create([
            ...$data,
            'user_id' => Auth::id()
        ]);

        return redirect()->back();
    }

    public function update(Request $request, UserSkill $skill)
    {

        $data = $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $skill->update($data);

        return redirect()->back();
    }

    public function destroy(UserSkill $skill)
    {
        $skill->delete();

        return redirect()->back();
    }
}
