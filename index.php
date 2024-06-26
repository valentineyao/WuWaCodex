<?php

require_once './vendor/autoload.php';

$router = new AltoRouter();

if (array_key_exists('BASE_URI', $_SERVER)) {
  $router->setBasePath($_SERVER['BASE_URI']);
} else {
  $_SERVER['BASE_URI'] = '/';
}

$router->map(
  'GET',
  '/',
  [
    'method' => 'home',
    'controller' => '\App\Controllers\MainController'
  ],
  'main-home'
);

$router->map(
  'GET',
  '/characters',
  [
    'method' => 'list',
    'controller' => '\App\Controllers\CharacterController'
  ],
  'character-list'
);

$router->map(
  'GET',
  '/characters/[a:name]',
  [
    'method' => 'read',
    'controller' => '\App\Controllers\CharacterController'
  ],
  'character-read'
);

$router->map(
  'GET',
  '/weapons',
  [
    'method' => 'list',
    'controller' => '\App\Controllers\WeaponController'
  ],
  'weapon-list'
);

$router->map(
  'GET',
  '/weapons/[a:name]',
  [
    'method' => 'read',
    'controller' => '\App\Controllers\WeaponController'
  ],
  'weapon-read'
);

$match = $router->match();

$dispatcher = new Dispatcher($match, '\App\Controllers\ErrorController::error404');

$dispatcher->dispatch();
