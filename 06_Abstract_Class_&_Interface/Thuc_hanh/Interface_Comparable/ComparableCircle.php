<?php
include_once 'Circle.php';
include_once 'Comparable.php';
class ComparableCircle extends Circle implements Comparable{
    public function compareTo($circle2){
        $radius1 = $this->getRadius();
        $radius2 = $circle2->getRadius();
        if ($radius1>$radius2) {
            return 1;
        } else if ($radius1<$radius2) {
                return -1;
            } else {
                return 0;
            }
        }
    }
$Circle1 = new ComparableCircle('Circle 1', 5);
$Circle2 = new ComparableCircle('Circle 2', 4);
$Circle3 = new ComparableCircle('Circle 3', 7);
echo $Circle1->compareTo($Circle2) . '<br>';
echo $Circle1->compareTo($Circle3) . '<br>';
echo $Circle1->compareTo($Circle1) . '<br>';