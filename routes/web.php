<?php

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

Route::get('/', \App\Livewire\TeamMember\Index::class)->name('index');
Route::get('/team-members/create', \App\Livewire\TeamMember\Create::class)->name('create');
Route::get('/team-members/{teamMember}/edit', \App\Livewire\TeamMember\Update::class)->name('edit');
