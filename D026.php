<?php
for($i = 0; $i < 7; $i++){
    $b[$i] = trim(fgets(STDIN));

}

$c= array_count_values($b);
echo $c["no"];
?>
