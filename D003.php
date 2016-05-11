<?php

$input_lines = fgets(STDIN);
   for ( $i=1;$i<9;$i++ )
    {if( $i < 9 )
        {echo $i*$input_lines. " ";}
    }
   for ( $i=1;$i<9;$i++ )
    {if( $i = 9 )
        {echo $i*$input_lines;}
    }
?>
