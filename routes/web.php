<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('books.index');
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

Route::resource('books', BookController::class);
