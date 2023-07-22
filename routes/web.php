<?php

use App\Http\Controllers\frontendController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [frontendController::class, 'welcome']);

Route::post("/store", [NoteController::class, 'store']);
Route::get("/note-delete/{id}", [NoteController::class, 'destroy']);
Route::get("/note-edit/{id}", [NoteController::class, 'edit']);
Route::post("/note-update/{id}", [NoteController::class, 'update']);
