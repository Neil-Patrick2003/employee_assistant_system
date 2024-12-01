<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => 'required|string',
            'message' => 'required|string'
        ]);

        Feedback::create([...$data, 'user_id' => Auth::id()]);

        return redirect()->back();
    }
}
