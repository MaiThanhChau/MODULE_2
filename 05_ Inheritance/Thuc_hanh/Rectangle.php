<?php
include_once ('Shape.php');
class Rectangle extends Shape{
    protected $height;
    protected $width;
    public function __construct($name,$height,$width)
    {
        parent::__construct($name);
        $this->height = $height;
        $this->width = $width;
    }
    public function calculateArea()
    {
        return $this->height*$this->width;
    }
    public function calculatePerimeter()
    {
        return 2*($this->height+$this->width);
    }
}

