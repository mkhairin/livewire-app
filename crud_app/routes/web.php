<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;

// Departements
use App\Livewire\Departemen\Index;
use App\Livewire\Departemen\Create;
use App\Livewire\Departemen\Edit;

use App\Livewire\Position\IndexPosition;
use App\Livewire\Position\CreatePosition;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', Home::class)->name('home.index');
Route::get('/departement', Index::class)->name('departement.index');
Route::get('/departement/create', Create::class)->name('departement.create');
Route::get('/departement/edit/{id}', Edit::class)->name('departement.edit');

Route::get('/position', IndexPosition::class)->name('position.index');
Route::get('/position/create', CreatePosition::class)->name('position.create');
