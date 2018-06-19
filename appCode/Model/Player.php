<?php

namespace excercise\Model;

use JsonSerializable;

class Player implements JsonSerializable
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
    public function jsonSerialize()
    {
        $vars = get_object_vars($this);
        return $vars;
    }
}