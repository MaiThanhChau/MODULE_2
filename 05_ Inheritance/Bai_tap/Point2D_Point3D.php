<?php
class Point2D{
    protected $x;
    protected $y;
    protected $array;
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
        $this->array[] = $x;
        $this->array[] = $y;
    }
    public function Point2D()
    {
    }
    public function getX()
    {
        return $this->x;
    }
    public function getY()
    {
        return $this->y;
    }
    public function setX($newX)
    {
        $this->x = $newX;
    }
    public function setY($newY)
    {
        $this->y = $newY;
    }
    public function getXY()
    {
        return $this->array;
    }
    public function setXY($newX,$newY)
    {
        $this->array = [];
        $this->array[] = $newX;
        $this->array[] = $newY;
    }
    public function __toString()
    {
        return "Đây là lớp 2D";
    }
}
class Point3D extends Point2D{
    protected $z;
    public function __construct($x,$y,$z)
    {
        parent::__construct($x,$y);
        $this->z = $z;
        $this->array[] = $z;
        return $this->array;
    }
    public function Point3D()
    {
    }
    public function getZ()
    {
        return $this->z;
    }
    public function setZ($newZ)
    {
        return $this->z = $newZ;
    }
    public function getXYZ()
    {
        return $this->array;
    }
    public function setXYZ($newX,$newY,$newZ)
    {
        $this->array = [];
        $this->array[] = $newX;
        $this->array[] = $newY;
        $this->array[] = $newZ;
        return $this->array;
    }
    public function __toString()
    {
        return "Đây là lớp 3D";
    }
}
$Point2D = new Point2D(1.1,2.2);
echo implode(', ', $Point2D->getXY()).'<br>';
$Point3D = new Point3D(1,2,3);
echo implode(', ', $Point3D->getXYZ()).'<br>';
echo implode(', ', $Point3D->setXYZ(3,2,1));

