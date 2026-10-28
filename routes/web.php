<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/projects/ideal-pos', function () {
    return view('projects.ideal-pos');
})->name('projects.ideal-pos');

Route::get('/projects/dawami-hr', function () {
    return view('projects.dawami-hr');
})->name('projects.dawami-hr');

Route::get('/projects/housemart', function () {
    return view('projects.housemart');
})->name('projects.housemart');

