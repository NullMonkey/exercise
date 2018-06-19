<?php

require_once __DIR__ . '/autoload.php';

/*
$model = new \excercise\Model\Model();


$controller = new \excercise\Controller\Controller($model);
$view = new \excercise\View\View($controller, $model);
echo $view->output();
*/

$newPlayer = new  \excercise\Model\Player('bob', '22', 'waterBoy', '0');

$json = json_encode($newPlayer);
echo $json;