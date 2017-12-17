<?php

$handle = fopen ("php://stdin", "r");
function sockMerchant($n, $ar) {
    // Complete this function
    $get=0;
    for ($i=0; $i<$n; $i++) {
        for ($j=$i+1; $j<$n;$j++) {
            if (($ar[$i] !== "out") && ($ar[$j] !== "out")) {
                if ($ar[$i] == $ar[$j]) {
                    $get++;
                    $ar[$i]="out";
                    $ar[$j]="out";
                    }
                }
            }
        }
    return $get;
    }

fscanf($handle, "%i",$n);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = sockMerchant($n, $ar);
echo $result . "\n";

?>