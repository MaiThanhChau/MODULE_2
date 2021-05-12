<?php
if ($_POST["hinh"]=="hcn") {
    for ($i=0; $i < 3; $i++) { 
        for ($j=0; $j < 7; $j++) { 
            echo "* ";
        }
        echo "<br>";
    }
}
if ($_POST["hinh"]=="bottom-left") {
    for ($i=0; $i <= 5; $i++) {
        for ($j=0; $j < $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}
if ($_POST["hinh"]=="top-left") {
    for ($i=5; $i >= 0; $i--) { 
        for ($j=0; $j < $i; $j++) { 
            echo "* ";
        }
        echo "<br>";
    }
}
if ($_POST["hinh"]=="bottom-right") {
    for ($i=0; $i < 5; $i++) { 
        for ($x=0; $x < $i; $x++) { 
            echo "&#160&#160&#160";
        }
        for ($y=5; $y > $i; $y--) { 
            echo "* ";
        }
        echo "<br>";
    }
}
if ($_POST["hinh"]=="top-right") {
    for ($i=0; $i < 5; $i++) { 
        for ($x=4; $x > $i; $x--) { 
            echo "&#160&#160&#160";
        }
        for ($y=0; $y <= $i ; $y++) { 
            echo "* ";
        }
        echo "<br>";
    }
}
if ($_POST["hinh"]=="tgCan") {
    for ($i=0; $i < 5; $i++) { 
        for ($x=5; $x > $i; $x--) { 
            echo "&#160&#160";
        }
        for ($y=0; $y <= $i ; $y++) { 
            echo "&#160*&#160";
        }
        echo "<br>";
    }
}
