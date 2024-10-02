<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    public function index(){
        //armazenar twmpo do cache
        $tempo_de_cache = 60;
        $valor_do_cache = "Cesar 4";

        //Cache::put("chave_do_cache", $valor_do_cache, $tempo_de_cache);

        //recuperar dados do cache

        //$valor_do_cache = Cache::get('chave_do_cache');


      


        //Recuperar o valor do cache, caso não tenha valor, criar o mesmo
        $valor_do_cache = Cache::remember("chave-do-cache", $tempo_de_cache, function(){
            return "Cesar 4";
        });

        //Recuperar o valor do cache, caso não tenha valor, criar o mesmo
        $users = Cache::remember('users',$tempo_de_cache, function(){
            return User::orderBy('id','desc')->get();
        });
        
        //Carregar a view
        return view('users.index',[
            'valor_do_cache'=>$valor_do_cache,
            'users'=>$users
        ]);
    }
}
