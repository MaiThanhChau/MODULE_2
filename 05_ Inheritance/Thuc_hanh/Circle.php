<?php
include_once ('Shape.php');
class Circle extends Shape{
    protected $radius;
    public function __construct($name,$radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function calculateArea()
    {
        return pi()*pow($this->radius,2);
    }
    public function calculatePerimeter()
    {
        return 2*pi()*$this->radius;
    }
}
