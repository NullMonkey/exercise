<?php

namespace excercise\ViewModel;

use excercise\View\CLI_VIEW;
//use excercise\View\HTML_VIEW;

class DisplayVM
{
    //private $players;

    public function __construct( $source, $filename = null){

        //$players = '[{"name":"Jonas Valenciunas","age":26,"job":"Center","salary":"4.66m"},{"name":"Kyle Lowry","age":32,"job":"Point Guard","salary":"28.7m"},{"name":"Demar DeRozan","age":28,"job":"Shooting Guard","salary":"26.54m"},{"name":"Jakob Poeltl","age":22,"job":"Center","salary":"2.704m"}]';

        //$players = $this->readPlayers($source, $filename);
        //$this->players = $filename;

        if (PHP_SAPI == 'cli') {
            echo json_encode($source);
            $o = new CLI_VIEW($source);

        } else {

            echo 'is not command line';
        }
    }



}