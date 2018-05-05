<?php

$handle = fopen ("php://stdin", "r");
function introTutorial($V, $arr) {
    // Complete this function
    $i = 0;
    while ($arr[$i] <> $V) {
        $i++;
    }
    return $i;
}

fscanf($handle, "%i",$V);
fscanf($handle, "%i",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
$arr = array_map('intval', $arr);
$result = introTutorial($V, $arr);
echo $result . "\n";

?>
