<?php
session_start();
ini_set('display_errors', true);
error_reporting(E_ALL);

// basic .env file parsing
if (file_exists("../.env")) {
  $variables = parse_ini_file("../.env", true);
  foreach ($variables as $key => $value) {
    putenv("$key=$value");
  }
}

$routes = array(
  'home' => array(
    'controller' => 'Humo',
    'action' => 'index'
  ),
  'details' => array(
    'controller' => 'Humo',
    'action' => 'details'
  ),
  'car' => array(
    'controller' => 'Order',
    'action' => 'car'
  ),
  'begin' => array(
    'controller' => 'Order',
    'action' => 'begin'
  ),
  'bestellen' => array(
    'controller' => 'Order',
    'action' => 'bestellen'
  ),
  'betalen' => array(
    'controller' => 'Order',
    'action' => 'betalen'
  ),
  'bevestiging' => array(
    'controller' => 'Order',
    'action' => 'bevestiging'
  ),
  'longread' => array(
    'controller' => 'Longread',
    'action' => 'longread'
  ),
  'lrverbrand' => array(
    'controller' => 'Longread',
    'action' => 'lrverbrand'
  ),
  'lrgeredt' => array(
    'controller' => 'Longread',
    'action' => 'lrgeredt'
  )
);

if(empty($_GET['page'])) {
  $_GET['page'] = 'home';
}
if(empty($routes[$_GET['page']])) {
  header('Location: index.php');
  exit();
}

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();
