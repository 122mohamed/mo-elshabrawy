<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/projects/ideal-pos', function () {
    return view('projects.ideal-pos');
})->name('projects.ideal-pos');

