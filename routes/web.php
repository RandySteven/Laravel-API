<?php

use App\Http\Controllers\PostController;
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
//GET ==> Read
//POST ==> Create
//PUT/PATCH ==> Update
//DELETE ==> Delete

// Route::get('/', function () {
//     return '<h1>Hello</h1>';
// });
Route::get('/', [PostController::class, 'index']);
Route::get('/create-post', [PostController::class, 'create']);
Route::post('/store-post', [PostController::class, 'store'])->name('post.store');
// Route::view('/', 'welcome');