<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DataDisplayController;

// Главная страница
Route::get('/', function () {
    return view('home');
})->name('home');

// Форма
Route::get('/form', [FormController::class, 'showForm'])->name('form.show');
Route::post('/form', [FormController::class, 'submitForm'])->name('form.submit');

// Показ данных
Route::get('/data', [DataDisplayController::class, 'showData'])->name('data.show');


