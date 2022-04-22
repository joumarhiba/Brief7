<?php

use App\Models\Demandes;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\DemandesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AnnonceLikeController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DemandeLikeController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/demandes',[DemandesController::class,'index'])->name('demandes');
Route::post('/demandes',[DemandesController::class,'store']);
Route::delete('/demandes/{demande}',[DemandesController::class,'destroy'])->name('demandes.destroy');
Route::get('/search2',[DemandesController::class,'search'])->name('demandes.search2');

Route::post('/demandes/{demande}/likes',[DemandeLikeController::class,'store'])->name('demandes.likes');

Route::get('/annonces',[AnnonceController::class,'index'])->name('annonces');
Route::post('/annonces',[AnnonceController::class,'store']);
Route::delete('/annonces/{annonce}',[AnnonceController::class,'destroy'])->name('annonces.destroy');
Route::get('/search',[AnnonceController::class,'search'])->name('annonces.search');

Route::post('/annonces/{annonce}/likes',[AnnonceLikeController::class,'store'])->name('annonces.likes');

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);

Route::post('/logout',[LogoutController::class,'store'])->name('logout');

Route::get('/editD/{id}',[DemandesController::class,'showData']);
Route::post('/update',[DemandesController::class,'save']);

Route::get('/edit/{id}',[AnnonceController::class,'edit']);
Route::post('/edit',[AnnonceController::class,'save']);

// Route::get('annonces/search',[AnnonceController::class,'search'])->name('search');