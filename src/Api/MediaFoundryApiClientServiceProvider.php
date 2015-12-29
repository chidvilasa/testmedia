<?php

namespace MediaFoundry\Api;

use GuzzleHttp\Client as GuzzleClient;
use Illuminate\Support\ServiceProvider;

/**
 * MediaFoundry API service provider.
 *
 * @package    MediaFoundry
 * @subpackage Api
 * @copyright  2015 Hostworks Ltd
 * @author     Michael Dyrynda <michaeld@hostworks.com.au>
 */
class MediaFoundryApiClientServiceProvider extends ServiceProvider
{

    protected $defer = true;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/mediafoundry_api.php' => config_path('mediafoundry_api.php'),
        ]);
    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/mediafoundry_api.php', 'mediafoundry_api'
        );

        // Build up the MediaFoundry API client
        $this->app->singleton(\MediaFoundry\Api\Contracts\ApiClient::class, function () {
            return new Client(
                config('mediafoundry_api.base_uri'),
                new GuzzleClient
            );
        });
    }


    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [ \MediaFoundry\Api\Contracts\ApiClient::class, ];
    }

}
