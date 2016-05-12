<?php
$input_lines = trim(fgets(STDIN));
$a = explode(" ",$input_lines);
echo substr($a[0],0,1).".".substr($a[1],0,1);
?>
