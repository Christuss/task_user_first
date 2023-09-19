<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('/api/task', [TaskController::class, 'index']);
Route::get('/api/task/{id}', [TaskController::class, 'show']);
Route::get('/task/list', [TaskController::class, 'listView']);

//require __DIR__ . '/auth.php';
