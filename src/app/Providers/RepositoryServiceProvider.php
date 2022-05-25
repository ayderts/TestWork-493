<?php

namespace App\Providers;

use App\Repositories\GroupRepository;
use App\Repositories\Interfaces\GroupRepositoryInterface;
use App\Repositories\Interfaces\TeacherRepositoryInterface;
use App\Repositories\TeacherRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            TeacherRepositoryInterface::class,
            TeacherRepository::class,


        );
        $this->app->bind(
            GroupRepositoryInterface::class,
            GroupRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
