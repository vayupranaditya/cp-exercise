<?php

$handle = fopen ("php://stdin", "r");
function bonAppetit($n, $k, $b, $ar) {
    // Complete this function
    $total=0;
    for ($i=0; $i < $n; $i++) {
        $total=$total+$ar[$i];
        }
    $cost=($total-$ar[$k])/2;
    if ($cost == $b) {
        return "Bon Appetit";
        }
    else {
        return $b-$cost;
        }
}

fscanf($handle, "%i %i", $n, $k);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
fscanf($handle, "%i",$b);
$result = bonAppetit($n, $k, $b, $ar);
echo $result . "\n";

?>