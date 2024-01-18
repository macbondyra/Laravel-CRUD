<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

 
Route::get('Bondyra/310470/people/get', [PeopleController::class, 'index']);

 
Route::post('Bondyra/310470/people/post', [PeopleController::class, 'store']);

 
Route::get('Bondyra/310470/people/get/{id}', [PeopleController::class, 'show']);


Route::put('Bondyra/310470/people/put/{id}', [PeopleController::class, 'update']);


Route::delete('Bondyra/310470/people/delete/{id}', [PeopleController::class, 'destroy']);
