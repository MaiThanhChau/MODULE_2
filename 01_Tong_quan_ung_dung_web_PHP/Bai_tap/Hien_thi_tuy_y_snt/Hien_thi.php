<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $number = $_POST["so"];
    $count = 0;
    $N=2;
    while($count<$number){
        $count_uoc_so = 0;
        for($y=2;$y <= $N;$y++){
            if($N % $y == 0 && $y <= $N){
                $count_uoc_so++;
            } 
        } 
        if($count_uoc_so == 1){
            $count++;
            echo $N.' ';                   
        } 
    $N++;                            
    }        
}
