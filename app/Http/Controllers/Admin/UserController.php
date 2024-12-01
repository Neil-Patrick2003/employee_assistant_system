<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function index(){
        
        $users = User::orderBy('name', 'asc')->get();

        return view('admin.user.index', [
            'users' => $users
        ]);
    }
}
