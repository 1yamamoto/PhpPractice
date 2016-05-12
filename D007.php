<?php
$input_lines = trim(fgets(STDIN));

$a = explode(" ",$input_lines);
for($i=0;$i<$a[0];$i++){
    echo "*";
}
?>
