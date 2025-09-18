<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;

Route::get('/', function () {
    return view('home');
});
Route::post('/contactform', ContactFormController::class);
