<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContaRequest;
use App\Models\Estado;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view("users.index",["users"=> $user]);
    }

    public function create(){
        $estado = Estado::orderBy("nome_estado","asc")->get();
        return view("users.create",['estados'=>$estado]);
    }

    public function store(ContaRequest $request){
        $request->validated();
        try{
            DB::beginTransaction();
            
            $user=User::create([
                'cidade_id'=>$request->cidade_id,
                'name'=> $request->name,
                'email'=> $request->email,
                'cpf'=>$request->cpf,
                'password'=> bcrypt($request->password),
            ]);
            DB::commit();
            return redirect()->route('users.index')->with('success','Conta cadastrada com sucesso');
        }catch(Exception $e){
            DB::rollBack();
            return back()->with('error', 'Usuário não cadastrado'.$e->getMessage());
           
        }

    }
}
