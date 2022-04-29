<?php
namespace Zuogechengxu\Wechat\Work\Auth;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        isset($app['access_token']) || $app['access_token'] = function ($app) {
            return new AccessToken($app);
        };
    }
}