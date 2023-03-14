<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    public function getUsersList()
    {
        $users = User::all();

        return view('users', [
            'users' => $users
        ]);
    }
}
