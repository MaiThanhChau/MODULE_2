<?php  
$count = 0;
for ($i=2; $i < 100; $i++) { 
    for ($j=2; $j <= $i; $j++) { 
        if ($i%$j==0) {
            $count++;
        }
    }

}