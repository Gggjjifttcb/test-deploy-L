<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('deploy', [
        'appName' => config('app.name', 'Laravel'),
        'environment' => config('app.env', 'production'),
        'phpVersion' => PHP_VERSION,
        'laravelVersion' => app()->version(),
        'host' => request()->getHost(),
    ]);
});

Route::get('/healthz', function () {
    return response()->json([
        'status' => 'ok',
        'app' => config('app.name', 'Laravel'),
        'environment' => config('app.env', 'production'),
        'php' => PHP_VERSION,
        'laravel' => app()->version(),
    ]);
});
