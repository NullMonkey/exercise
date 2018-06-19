<?php

require_once __DIR__ . '/autoload.php';


$newPlayer = new  \excercise\Model\Player('bob', '22', 'waterBoy', '0');
$newPlayer2 = new  \excercise\Model\Player('joe', '25', 'sweeper', '0');

$team = new \excercise\ViewModel\PlayersVM();

//$json = json_encode($newPlayer2);
$team->addItem($newPlayer2 );
$team->addItem($newPlayer);

$test = $team->getCollection();

$playersView = new \excercise\ViewModel\DisplayVM($team);