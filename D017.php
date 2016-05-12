<?php

for($i = 0; $i < 5; $i++){
        $b[$i] = trim(fgets(STDIN));
}
$b1 = max($b);
$b2 = min($b);
echo $b1."\n".$b2;
?>
