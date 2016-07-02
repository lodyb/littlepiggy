<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    public function view() {

        $users = User::all();
        return view('mod.user.list')
            ->with('ctx', 'users')
            ->with('data', $users);
    }
}
