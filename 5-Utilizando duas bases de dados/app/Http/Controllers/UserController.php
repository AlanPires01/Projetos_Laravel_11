<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //recuoerar os registrod do bamco dados
        $user = User::get();
        return view("users.index",["user"=>$user]);
    }
        
    
}