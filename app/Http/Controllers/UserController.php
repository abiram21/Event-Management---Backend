<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function index()
    {
        
            $user = User::all();
            return new UserResource($user);
            
    }
}
