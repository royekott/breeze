<?php

namespace App\Providers;

use App\Models\ExampleFacade;
use App\Models\Example;
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
        $this->app->bind(Example::class, function () {
            return new Example('api-key-here');
        });
//        $this->app->bind('example', function () {
//            return new Example();
//        });
//        $this->app->singleton('App\Models\Example', function () {
//            $collaborator = new ExampleFacade();
//            $foo = 'foobar';
//
//            return new Example($collaborator, $foo);
//        });
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
