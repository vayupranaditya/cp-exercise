<?php

$handle = fopen ("php://stdin", "r");
function divisibleSumPairs($n, $k, $ar) {
    // Complete this function
    $res=0;
    $j=0;
    for ($j=0; $j<$n;$j++) {
        for ($i=0; $i<$j;$i++) {
            $subj=$ar[$j]+$ar[$i];
            if (($subj % $k) == 0) {
                $res++;
                }
            }
        }
    return $res;
}

fscanf($handle, "%i %i", $n, $k);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = divisibleSumPairs($n, $k, $ar);
echo $result . "\n";

?>