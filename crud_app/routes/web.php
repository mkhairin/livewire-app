<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;

// Departements
use App\Livewire\Departemen\Index;
use App\Livewire\Departemen\Create;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', Home::class)->name('home.index');
Route::get('/departement', Index::class)->name('departement.index');
Route::get('/departement/create', Create::class)->name('departement.create');
