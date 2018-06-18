<?php

namespace excercise\Models;

class Player
{
    private $name;
    private $age;
    private $job;
    private $salary;

    public function __construct($name, $age, $job, $salary)
    {

        $this->name = $name;
        $this->age = $age;
        $this->job = $job;
        $this->salary = $salary;

        echo __CLASS__ . ' Class<br />';
        echo $this->name;
    }
}