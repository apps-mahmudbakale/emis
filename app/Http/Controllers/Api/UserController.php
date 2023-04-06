<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users =  User::whereHas(
            'roles',
            function ($q) {
                $q->where('name', 'user');
            }
        )->get();

        return response()->json($users);
    }
}
