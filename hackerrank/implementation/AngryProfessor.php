<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d %d",$n,$k);
    $a_temp = fgets($handle);
    $a = explode(" ",$a_temp);
    array_walk($a,'intval');
    //start here
    $p=0;
    for ($s=0; $s < $n; $s++) {
        if ($a[$s] <= 0) {
            $p++;
            }
        }
    if ($p < $k) {
        echo "YES \n";
        }
    else {
        echo "NO \n";
        }
}

?>