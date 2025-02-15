<?php

namespace App\Providers;

use App\Models\Project;
use Illuminate\Support\ServiceProvider;
// use Illuminate\View\View;
use Illuminate\Support\Facades\View;


class NavbarComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('layouts.app', function ($view) {
            $insideProjects = Project::all();
            $view->with('insideProjects', $insideProjects);
        });
    }
}