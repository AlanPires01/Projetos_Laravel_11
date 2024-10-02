<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/users', function (Request $request) {
//     return response()->json([
//         'status'=>true,
//         'message'=>"Listar usuários",
//     ],200);
// });


Route::get('/users',[UserController::class,'index']); //{{URL}}/api/users?page=1
Route::get('/users/{user}',[UserController::class,'show']);//{{URL}}/api/users/5
Route::post('/users',[UserController::class,'store']);//{{URL}}/api/users/
Route::put('/users/{user}',[UserController::class,'update']);//{{URL}}/api/users/7
Route::delete('/users/{user}',[UserController::class,'destroy']);//{{URL}}/api/users/25