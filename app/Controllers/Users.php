<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index(): string
    {
        $users = (new UserModel())->findAll();

        return view('users/index', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }
}
