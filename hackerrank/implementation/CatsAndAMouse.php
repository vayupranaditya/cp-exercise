<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$q);
for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle,"%d %d %d",$x,$y,$z);
    $da=abs($x-$z);
    $db=abs($y-$z);
    if ($da < $db) {
        echo "Cat A";
        }
    elseif ($db < $da) {
        echo "Cat B";
        }
    else {
        echo "Mouse C";
        }
    echo "\n";
    }
?>