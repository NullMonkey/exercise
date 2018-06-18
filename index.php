<?php

/* just some test */

require_once __DIR__ . '/autoload.php';

/* testing the player class */

$newPlayer = new  \excercise\Models\Player('bob', '22', 'waterBoy', '0');

echo serialize($newPlayer);

$newCollect = new excercise\Models\PlayersCollection();

echo '<br />';




