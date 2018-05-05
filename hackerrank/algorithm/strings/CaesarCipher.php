<?php

$handle = fopen ("php://stdin", "r");
function caesarCipher($s, $k) {
    // Complete this function
    $res = '';
    $k = $k%26;
    for ($i=0; $i<strlen($s); $i++)
    {
        $p=ord($s[$i]);
        if($p >= 65 && $p <= 90)
        {
            $rp = $p+$k;  
            if($rp>90)
            {
                $rp = $rp-90+64;
            }
        } 
        else if($p >= 97 && $p <= 122)
        {
            $rp = $p+$k;
            if($rp>122)
            {
                $rp = $rp-122+96;
            }
        }
        else
        {
            $rp = $p;
        }
        $res = $res.chr($rp);
    }
    return $res;
}

fscanf($handle, "%i",$n);
fscanf($handle, "%s",$s);
fscanf($handle, "%i",$k);
$result = caesarCipher($s, $k);
echo $result . "\n";

?>
