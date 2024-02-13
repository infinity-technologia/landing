<?php

use App\Livewire\AboutArea;
use App\Livewire\Contact;
use App\Livewire\HomeArea;
use App\Livewire\Service;
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

Route::get('/', HomeArea::class);
Route::get('/about', AboutArea::class);
Route::get('/services', Service::class);
Route::get('/contact', Contact::class);
