<?php

namespace Kpacha\ReactiveHateoas;

use Kpacha\ReactiveSilex\ReactiveApplication;
use Popshack\Silex\Provider\Hal\HalServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\ServiceProviderInterface;
use SilexHal\Providers\ControllersProvider;

class ApplicationBuilder
{

    public static function build(ServiceProviderInterface $resourceHubProvider, array $values = array())
    {
        $app = new ReactiveApplication($values);

        $app->register(new ServiceControllerServiceProvider());
        $app->register(new HalServiceProvider());
        $app->register(new ControllersProvider());

        $app->register($resourceHubProvider);

        return $app;
    }

}
