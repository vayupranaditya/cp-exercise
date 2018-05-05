<?php

$handle = fopen ("php://stdin", "r");
function camelcase($s) {
    // Complete this function
    $res = 0;
    for ($i = 0; $i < strlen($s); $i++) {
        if ((ord($s[$i]) > 64) && (ord($s[$i]) < 91)) {
            $res++;
        }
    }
    return $res+1;
}

fscanf($handle, "%s",$s);
$result = camelcase($s);
echo $result . "\n";

?>
