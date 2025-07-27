<?php

namespace App\Providers;

use App\Interfaces\Api\AttendeeInterface;
use App\Repositories\Api\AttendeeRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AttendeeInterface::class, AttendeeRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
