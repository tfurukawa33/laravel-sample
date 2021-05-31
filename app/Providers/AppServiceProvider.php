<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // User
        $this->app->bind(
            \App\Repositories\User\UserRepositoryInterface::class,
            \App\Repositories\User\UserRepository::class
        );

        // Album
        $this->app->bind(
            \App\Repositories\Album\AlbumRepositoryInterface::class,
            \App\Repositories\Album\AlbumRepository::class
        );

        // Artist
        $this->app->bind(
            \App\Repositories\Artist\ArtistRepositoryInterface::class,
            \App\Repositories\Artist\ArtistRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
