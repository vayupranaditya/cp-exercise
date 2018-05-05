<?php

$handle = fopen ("php://stdin", "r");
function getMoneySpent($keyboards, $drives, $s){
    // Complete this function
    $max=-1;
    for ($k=0; $k < count($keyboards); $k++) {
        for ($d=0; $d < count($drives); $d++) {
            $price=$keyboards[$k]+$drives[$d];
            if (($price <= $s) && ($price > $max)) {
                $max=$price;
                }
            }
        }
    return $max;
    }

fscanf($handle,"%d %d %d",$s,$n,$m);
$keyboards_temp = fgets($handle);
$keyboards = explode(" ",$keyboards_temp);
$keyboards = array_map('intval', $keyboards);
$drives_temp = fgets($handle);
$drives = explode(" ",$drives_temp);
$drives = array_map('intval', $drives);
//  The maximum amount of money she can spend on a keyboard and USB drive, or -1 if she can't purchase both items
$moneySpent = getMoneySpent($keyboards, $drives, $s);
echo $moneySpent . "\n";

?>