<?php

declare(strict_types = 1);

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/people', function() {
    return view('people');
});

Route::get('/nesting-events', function() {
    return view('nesting-events');
});

Route::get('/lifecycle-hooks', function() {
    return view('lifecycle-hooks');
});

Route::get('/data-bindings', function() {
    return view('data-bindings');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/image-upload', function() {
    return view('image-upload');
});

Route::get('/file-download', function() {
    return view('file-download');
});

// Supposed to be able to remove views->register.blade.php
//Route::livewire('/register', 'register');
