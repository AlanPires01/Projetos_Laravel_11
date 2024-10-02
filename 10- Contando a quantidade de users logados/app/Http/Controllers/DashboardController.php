<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        //Conta quantidade de usuários que estão logados naquele minuto
        $activeUsers=User::where('last_active_at','>=',Carbon::now()->subMinutes(5))->count();
        return view('dashboard.index',['activeUsers'=>$activeUsers]);
    }
}
