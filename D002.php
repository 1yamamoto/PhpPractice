<?php
$input_lines = trim(fgets(STDIN));

$a = explode(" ",$input_lines);
if($a[0] > $a[1]){
    echo $a[0];
}
elseif($a[0] < $a[1]){
    echo $a[1];
}
else{
    echo eq;
}

?>
