<?php
namespace OOP;

abstract class Employee{

    protected $name;
    protected $email;
    protected $location;
   
    public function __toString(){
        return $this->name;
    }
    
    public function addLocation($location){}
    public function getInfo(){}
}