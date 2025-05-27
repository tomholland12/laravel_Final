<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Policies\PostPolicy;


class AppServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        \App\Models\Post::class => \App\Policies\PostPolicy::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Register bindings or services here if needed
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
