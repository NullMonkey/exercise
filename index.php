<?php

/* just some test */

require_once __DIR__ . '/autoload.php';

/* testing the player class */

$newPlayer = new  \excercise\Models\Player('bob', '22', 'waterBoy', '0');

$json = json_encode($newPlayer);
echo $json;

//echo serialize($newPlayer);

$newCollect = new excercise\Models\PlayersCollection();

echo '<br />';

$newCollect->attach($newPlayer);

//echo '<br />'.print_r($newCollect);

//echo $newCollect->serialize()."\n";

foreach ($newCollect as $value) {
    $obj = $newCollect->current(); // current object
    $assoc_key  = $newCollect->getInfo(); // return, if exists, associated with cur. obj. data; else NULL
    $json = json_encode($obj);
    echo $json;

}
