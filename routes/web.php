<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/hello', function (){
//   return response( 'Hello world',200)
//       ->header('Content-Type', 'text/plain');
    return redirect('/world');
});

Route::get('/world', function (){
   return response( 'World Hell',200)
       ->header('Content-Type', 'text/plain');
});


Route::resource('empleado',EmpleadoController::class)->middleware('auth');
Auth::routes(['register'=>true,'reset'=>false]); // para que desaparesca registro y recuperacion del login

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::group(['middleware'=> 'auth'], function(){
   Route::get('/',[EmpleadoController::class,'index'])->name('home');
});
