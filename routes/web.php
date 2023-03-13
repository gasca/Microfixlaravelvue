<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



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


// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'inicio')->name('inicio');
Route::view('/servicios', 'servicios')->name('servicios');
Route::view('/contacto', 'contacto')->name('contacto');


// Route::get('/', 'UserController@microfix')->name('users.microfix');


Route::get('/portal', 'UserController@portal')
->name('users.portal');

Route::get('/usuario/nuevo', [UserController::class, 'create'])->name('users.create');
Route::get('/usuarios/todos', [UserController::class, 'index'])->name('users.index');


Route::get('/usuarios/{user}', [UserController::class, 'show'])
-> where ('user', '[0-9]+')
-> name('users.show');



Route::get('/computadora/nuevo', 'ComputerController@create')->name('computer.create');

//-----------------es importante el orden de las rutas  /usuarios/crear o user--------------------//

// Route::get('/usuarios/nuevo', [UserController::class, 'create'])->name('users.create');


Route::post('/usuarios/crear', [UserController::class, 'store'])->name('users.store');

Route::get('/usuarios/{user}/editar', [UserController::class, 'edit'])->name('users.edit');

// patch actualizar, put remplazar
Route::patch('/usuarios/{user}', [UserController::class ,'update'])->name('users.update');

Route::delete('usuarios/{user}',[UserController::class,'destroy'] )->name('users.destroy');


//----------------------------------//

Route::get('/registro/nuevo', 'ComputerController@create')->name('computer.create');

Route::post('/registro/crear', 'ComputerController@store');
