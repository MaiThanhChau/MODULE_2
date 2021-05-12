<?php
class QuadraticEquation{
    public $a;
    public $b;
    public $c;
    public function __construct($a,$b,$c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function geta()
    {   
        return $this->a;
    }
    public function getb()
    {   
        return $this->b;
    }public function getc()
    {   
        return $this->c;
    }
    public function getDiscriminant()
    {
        $this->delta = $this->b*$this->b - 4*$this->a*$this->c;
        return $this->delta;
    }
    public function getRoot()
    {
        if ($this->delta>0) {
            $this->r1 = (-$this->b+pow($this->delta,0.5))/2*$this->a;
            $this->r2 = (-$this->b-pow($this->delta,0.5))/2*$this->a;
            return "Phương trình có 2 nghiệm là $this->r1 và $this->r2";
        } else {
            if ($this->delta == 0) {
                $this->r = -$this->b / 2*$this->a;
                return "Phương trình có nghiệm duy nhất là $this->r";
            } else {
                return "Phương trình vô nghiệm";
            }
        }
    }
}
$pt = new QuadraticEquation(1,2,1);
$pt->getDiscriminant();
echo $pt->getRoot();
