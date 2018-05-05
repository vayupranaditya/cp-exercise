<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$k);
$height_temp = fgets($handle);
$height = explode(" ",$height_temp);
array_walk($height,'intval');
// your code goes here
$max=$k;
for ($hurdle=0; $hurdle<$n; $hurdle++) {
    if ($max < $height[$hurdle]) {
        $max=$height[$hurdle];
        }
    }
echo $max-$k;
?>