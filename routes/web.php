<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CompanyController;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');

Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');


Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');

Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');

Route::get('/companies/{id}', [CompanyController::class, 'show'])->name('companies.show');
