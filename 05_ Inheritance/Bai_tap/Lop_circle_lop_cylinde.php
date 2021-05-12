<?php
class Circle{
    protected $radius;
    protected $color;
    public function __construct($radius,$color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    public function getRadius()
    {
        return $this->radius;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setRadius($newRadius)
    {
        $this->radius = $newRadius;
    }
    public function setColor($newColor)
    {
        $this->color = $newColor;
    }
    public function calculateArea()
    {
        return pi()*pow($this->radius,2);
    }
    public function __toString()
    {
        return "Đây là hình tròn màu $this->color có bán kính $this->radius";
    }
}
class Cylinde extends Circle{
    protected $height;
    public function __construct($radius,$color,$height)
    {
        parent::__construct($radius,$color);
        $this->height = $height;
    }
    public function calculateVolume()
    {
        return parent::calculateArea()*$this->height;
    }
    public function __toString()
    {
        return "Đây là hình trụ màu $this->color có bán kính $this->radius và chiều cao $this->height";
    }
}
$Circle = new Circle(10,'Xanh');
$Cylinde = new Cylinde(20,'Đỏ',40);
echo $Circle->calculateArea().'<br>';
echo $Cylinde->calculateArea().'<br>';
echo $Cylinde->calculateVolume().'<br>';
$Cylinde->setRadius(10);
echo $Cylinde->__toString();
