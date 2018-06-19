<?php


namespace excercise\ViewModel;



class PlayersVM
{
    private $players;

    public function __construct(){
        $this->players = array();
     }


    public function addItem($obj, $key = null) {
        $json = json_encode($obj);
        //echo $json;
        if ($key == null) {
            $this->players[] = $json ;
            echo $this->players[0];
        }
        else {
            if (isset($this->players[$key])) {
               echo 'Key'.$key .'already in use';
            }
            else {
                $this->players[$key] = $json ;
            }
        }
    }

    public function deleteItem($key) {
        if (isset($this->players[$key])) {
            unset($this->players[$key]);
    }
        else {
            echo 'Invalid key '.$key;
        }
    }

    public function getItem($key) {
        if (isset($this->players[$key])) {
            return $this->players[$key];
        }
        else {
            echo 'Invalid key '.$key;
            }
    }

    public function getCollection() {
            return $this->players;
    }
}