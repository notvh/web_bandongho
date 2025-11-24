<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserConTroller extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users', ['users' => $users]);
    }
}
