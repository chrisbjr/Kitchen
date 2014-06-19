<?php namespace Chrisbjr\Kitchen;

use Illuminate\Support\ServiceProvider;

class KitchenServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('chrisbjr/kitchen');

        $this->app->register('Zizaco\Confide\ConfideServiceProvider');
        $this->app->register('Zizaco\Entrust\EntrustServiceProvider');
        $this->app->register('Thomaswelton\LaravelGravatar\LaravelGravatarServiceProvider');

        include __DIR__ . '/../../routes.php';
        include __DIR__ . '/../../filters.php';
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('Cartalyst\Sentry\SentryServiceProvider');
    }

}
