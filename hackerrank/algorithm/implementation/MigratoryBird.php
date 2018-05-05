<?php

$handle = fopen ("php://stdin", "r");
function migratoryBirds($n, $ar) {
    // Complete this function
    $nums = array();
    for ($i = 0; $i < $n; $i++)
    {
        array_push($nums, 0);
    }
    for ($i = 0; $i < $n; $i++)
    {
        $t = $ar[$i]-1;
        $nums[$t]++;
    }
    $max = $nums[0];
    $max_id = 1;
    for ($j = 0; $j < $n; $j++)
    {
        if ($nums[$j] > $max)
        {
            $max = $nums[$j];
            $max_id = $j+1;
        }
    }
    return $max_id;
}

fscanf($handle, "%i",$n);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = migratoryBirds($n, $ar);
echo $result . "\n";

?>
