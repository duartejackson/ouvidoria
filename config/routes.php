<?php
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return static function (RouteBuilder $routes) {
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder) {
        $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
        $builder->connect('/estatisticas', ['controller' => 'Pages', 'action' => 'display', 'estatisticas']);
        $builder->connect('/faq', ['controller' => 'Pages', 'action' => 'display', 'faq']);
        $builder->connect('/admin', ['controller' => 'Settings', 'action' => 'edit']);

        $builder->connect('/pages/*', 'Pages::display');

        $builder->fallbacks();
    });
};
