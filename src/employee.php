<?php

class Employee {
    public $id;
    public $name;
    public $city;
    public $salary;
    public function __construct($id, $name, $city, $salary) {
        $this->id = $id;
        $this->name = $name;
        $this->city = $city;
        $this->salary = $salary;
    }
}
