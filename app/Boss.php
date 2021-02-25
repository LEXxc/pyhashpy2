<?php

namespace OOP;

class Boss extends Employee {
    private $roomNr;

    public function __construct($name, $email, $roomNr)
    {
        $this->name = $name;
        $this->email = $email;
        $this->roomNr = $roomNr;
    }

    public function addLocation($location){
        $this->location = $location;
    }

    public function getInfo()
    {
        return [
            $this->name,
            $this->email,
            $this->location,
            $this->roomNr,
        ];
    }
}