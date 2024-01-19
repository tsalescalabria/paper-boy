<?php

namespace App\Providers;

use App\Services\UploadPhoto;
use Illuminate\Support\ServiceProvider;
use App\Services\Messages;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind("photo.send", UploadPhoto::class);
        $this->app->bind("message.check", Messages::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
