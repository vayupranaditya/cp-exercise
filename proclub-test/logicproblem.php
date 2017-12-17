<?php
	$t=readline("");
	$max=array();
	for ($tx=1;$tx<=$t;$tx++){
		$nab=explode(" ",readline(""));
		$n=$nab[0];
		$a=$nab[1];
		$b=$nab[2];
		$arr=explode(" ",readline(""));
		$max[$tx-1]=0;
		for ($cn=0;$cn<$n;$cn++) {
			$nx=$cn;
			$length=0; 
			while ($nx<$n && ($arr[$nx]>=$a && $arr[$nx]<=$b)) {
				$length++;
				$nx=$nx+$arr[$nx];
				}
			if ($max[$tx-1]<=$length) {
				$max[$tx-1]=$length;
				}
			}
		}
	for ($tx=1;$tx<=$t;$tx++) {
		echo "Case #".$tx.": ".$max[$tx-1]."\n";
		}
?>