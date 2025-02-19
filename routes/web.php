<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user-form', function () {
    return view('user_form');
});
Route::get('/hello', function () {
    return view('Hello Laravel');
})->name('greeting');

Route::get('/show-greeting', [WelcomeController::class, 'showGreeting']);
Route::get('/redirect-greeting', [WelcomeController::class, 'redirectGreeting']);

//GET with optional parameters
Route::get('/user/{name?}', function ($name = null) {
    if ($name){
        return 'User ID is '.$name;
    } else {
    return 'No name provided';
    }
});
//POST Request
Route::post('/submit-form',[UserController::class, 'submitForm']);
//PUT Request
Route::put('/update-user/{id}',[UserController::class, 'updateUser']);
//PATCH Request
Route::patch('/modify-user/{id}',[UserController::class, 'modifyeUser']);
//DELETE Request
Route::delete('/delete-user/{id}',[UserController::class, 'deleteUser']);

//things to remember: git status, git add ., git commit -m "explanation", git push origin main, git pull origin main