<?php

namespace excercise\View;

class CLI_VIEW{
   public $players;

    public function __construct($source)
    {
        $players = json_encode($source);

        echo "Current Players: \n";
        echo print_r($players);

        //echo serialize($players);
        //foreach ($players as $value) {
            //echo "\tName: $value->name\n";
            //echo "\tAge: $value->age\n";
            //echo "\tSalary: $value->salary\n";
            //echo "\tJob: $value->job\n\n";
       // }
        /*foreach ($players as $player) {

            echo "\tName: $player->name\n";
            echo "\tAge: $player->age\n";
            echo "\tSalary: $player->salary\n";
            echo "\tJob: $player->job\n\n";
        }
        */

    }

}