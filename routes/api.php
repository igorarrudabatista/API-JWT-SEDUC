<?php
use Illuminate\Support\Facades\Route;


Route::post('login', 'App\Http\Controllers\api\Auth\LoginJwtController@login');


// Rotas paras as API
 Route::apiResource('seduc/professor',  'App\Http\Controllers\api\Educartech_professor')
        ->middleware('jwt.auth');
 
        Route::apiResource('seduc/aluno',      'App\Http\Controllers\api\Educartech_aluno')    
        ->middleware('jwt.auth');
 