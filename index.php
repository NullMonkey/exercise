<?php

require_once __DIR__ . '/autoload.php';


$newPlayer = new  \excercise\Model\Player('bob', '22', 'waterBoy', '0');

$team = new \excercise\ViewModel\PlayersVM();
$team->attach($newPlayer);



$playersView = new \excercise\ViewModel\DisplayVM($team);