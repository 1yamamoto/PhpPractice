<?php

    $input_lines = trim(fgets(STDIN));
    $n = $input_lines;
    $a = "Hello". " ";
    for($i = 1; $i <= $n; $i++){
        $b[$i] = trim(fgets(STDIN));

        if($i < $n){
            $a .= $b[$i]. ",";
        }
        else if($i==$n){
            $a .= $b[$i]. ".";
        }
    }
    echo $a;
?>
