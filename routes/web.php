<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ClientController::class, 'accueil']);

// Admin controller


Route::get('/login', [AdminController::class, 'login']);
Route::get('/admin/dashbord', [AdminController::class, 'admin']);
Route::get('/admin/addforms', [AdminController::class, 'addforms']);
Route::post('/admin/savedomaine', [AdminController::class, 'savedomaine']);
Route::post('/acceslogin', [AdminController::class, 'acceslogin']);
Route::get('/deconnexion', [AdminController::class, 'deconnexion']);
Route::delete('/admin/deletedomaine/{id}', [AdminController::class, 'deletedomaine']);
Route::get('/admin/editdomaine/{id}', [AdminController::class, 'editdomaine']);
Route::put('/admin/updatedomaine/{id}', [AdminController::class, 'updatedomaine']);

