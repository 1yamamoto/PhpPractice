<?php
    $a = trim(fgets(STDIN));

    if($a<10){
        echo "00".$a;
    }
    elseif($a<100){
        echo "0".$a;
    }
    else{
        echo $a;
    }
?>
