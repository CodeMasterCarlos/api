<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/v1/user', function (Request $request) {
    return [
        'user' => 'test'
    ];
});
