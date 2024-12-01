<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FeedbackController extends Controller
{
    public function index()
    {
        $records = Feedback::with('user')->paginate();

//        dd($records->toArray());

        return view('admin.feedback.index', ['records' => $records]);
    }
}
