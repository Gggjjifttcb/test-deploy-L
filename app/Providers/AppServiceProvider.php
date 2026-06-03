<?php

namespace App\Providers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (app()->runningInConsole()) {
            return;
        }

        if (! Schema::hasTable('books')) {
            Schema::create('books', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('author');
                $table->string('publisher')->nullable();
                $table->unsignedSmallInteger('year')->nullable();
                $table->string('isbn', 50)->nullable();
                $table->unsignedInteger('stock')->default(0);
                $table->text('description')->nullable();
                $table->timestamps();
            });
        }
    }
}
