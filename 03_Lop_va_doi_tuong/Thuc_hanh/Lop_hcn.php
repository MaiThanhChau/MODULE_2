<?php
class HCN{
    public $width;
    public $height;
    public function __construct($width,$height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea()
    {
        $this->area = $this->width * $this->height;
        return $this->area;
    }
    public function getPerimeter()
    {
        $this->perimeter = ($this->width + $this->height) * 2;
        return $this->perimeter;
    }
    public function display()
    {
        echo "Diện tích là: ".$this->area."<br>Chu vi là: ".$this->perimeter;
    }
}
