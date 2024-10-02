<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Jobs\JobSendWelcomeEmail;
use App\Mail\WelcomeEmail;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function create()
    {
        //Carregar a VIEW
        return view('users.create');
    }

    public function store(UserRequest $request){
        $request->validated();
        DB::beginTransaction();
        try{
            $user = User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password,
            ]);

            // //Enviar e-mail
            // Mail::to($user->email)->send(new WelcomeEmail($user));
            //Agendar o envio do email no job
            JobSendWelcomeEmail::dispatch($user->id)->onQueue('default');
            DB::commit();
            return redirect()->route('users.create')->with('success','Usuário cadastardo com sucesso!');
            
        }catch(Exception $e){
            DB::rollBack();
            return redirect()->route('users.create')->with('error', $e->getMessage());
        }
        
    }
}
