<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/api', function () {
    return ['Hello, API!' => 'This is an API endpoint'];
});

require __DIR__ . '/auth.php';
