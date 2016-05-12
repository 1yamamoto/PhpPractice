<?php
$input_lines = trim(fgets(STDIN));

$a = explode(" ",$input_lines);
if($a[1]=="cm"){

    echo $a[0]*10;
}elseif($a[1]=="m"){

    echo $a[0]*1000;
}else{

    echo $a[0]*1000000;
}


?>
