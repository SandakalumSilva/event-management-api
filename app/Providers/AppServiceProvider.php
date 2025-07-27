<?php

namespace App\Providers;

use App\Interfaces\Api\AttendeeInterface;
use App\Interfaces\Api\EventInterface;
use App\Repositories\Api\AttendeeRepository;
use App\Repositories\Api\EventRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(EventInterface::class,EventRepository::class);
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
