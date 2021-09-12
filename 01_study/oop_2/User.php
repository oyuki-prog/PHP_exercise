<?php

class User{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function selfIntroduction()
    {
        return "私の名前は{$this->name}です<br>年齢は{$this->age}歳です<br>";
    }
}