<?php
class Shape{
    protected $name;
    public function __construct($name)
    {
        return $this->name = $name;
    }   
    public function show()
    {
        return "I am a shape. My name is $this->name";
    }
}