<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Page::index', ['as' => 'home']);
$routes->get('/plants', 'Page::list', ['as' => 'list']);
$routes->get('/article', 'Page::article', ['as' => 'article']);
