<?php


/* thinking the PlayersObject might be better as a collection of Players
*/

namespace excercise\Models;

use SplObjectStorage;


class PlayersCollection extends SplObjectStorage
{

    //private $storage;


    public function __construct(){
       // echo '<br /> hello object storage';

    }



}