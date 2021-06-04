<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\CreationlivreController;
use App\Http\Controllers\DetaillivreController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\QuestionController;
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


Route::get('/',[IndexController::class,'create'] )->name('get.index');
Route::post('/',[IndexController::class,'create'] )->name('post.index');

Route::get('/accueil',[AccueilController::class,'create'])->name('get.accueil')->middleware('auth');
Route::post('/accueil',[AccueilController::class,'create'])->name('post.accueil');


Route::get('/creationlivre',[CreationlivreController::class,'create'])->name('get.creationlivre');
Route::post('/creationlivre',[CreationlivreController::class,'create'])->name('post.creationlivre');

Route::get('/detaillivre', [DetaillivreController::class,'create'])->name('get.detaillivre');
Route::post('/detaillivre', [DetaillivreController::class,'create'])->name('post.detaillivre');

Route::get('/inscription', [InscriptionController::class,'create'])->name('get.inscription');
Route::post('/inscription', [InscriptionController::class,'create'])->name('post.inscription');

Route::get('/question', [QuestionController::class,'create'])->name('get.question');
Route::post('/question', [QuestionController::class,'create'])->name('post.question');
