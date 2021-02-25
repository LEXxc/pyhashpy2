<?php

namespace OOP;

class Tester extends Employee {
    private $salary;
    private $tasks = [];

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
    public function addTask($task){
        $this->tasks = $task;
    }

    public function getInfo()
    {
        return [
            $this->name,
            $this->email,
            $this->location,
            $this->salary,
            $this->tasks
        ];
    }
}