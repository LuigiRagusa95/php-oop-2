<?php
class User
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function get_name()
    {
        return $this->name;
    }

    # some stuff goes here
}
