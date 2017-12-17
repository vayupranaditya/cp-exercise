<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d",$n);
    $h=1;
    for ($g=1; $g <= $n; $g++) {
        if (($g % 2) == 1) {
            $h=$h+$h;
            }
        else {
            $h++;
            }
        }
    echo "$h \n";
    }

?>
