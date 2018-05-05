<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$n = readline("");
$temp_s = readline("");
$temp_s = strtolower($temp_s);
$s = str_split($temp_s);
$level = 0;
$level_b4 = 0;
$valley=0;
for ($step=0; $step < count($s); $step++) {
    if ($s[$step] === "u") {
        $level++;
        }
    else {
        $level--;
        }
    if (($level == 0) && ($level_b4 < 0)) {
        $valley++;
        }
    $level_b4=$level;
    }
echo $valley;
?>