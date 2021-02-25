<?php

namespace OOP;

class Programmer extends Employee {
    private $salary;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function addLocation($location){
        $this->location = $location;
    }

    public function setSalary($salary){
        $this->salary = $salary;
    }

    public function getInfo()
    {
        return [
            $this->name,
            $this->email,
            $this->location,
            $this->salary
        ];
    }
}