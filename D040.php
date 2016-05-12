<?php
$a = array();
for($i = 0; $i < 7; $i++){
    $b[$i] = trim(fgets(STDIN));
    if($b[$i]<=30){

        array_push($a,$b[$i]);
    }
    }
echo count($a);

?>
