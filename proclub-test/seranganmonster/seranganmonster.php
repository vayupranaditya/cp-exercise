<?php
$hp=explode(" ",readline(""));
$playerhp=$hp[0];
$enemyhp=$hp[1];
$turn=readline("");
$action="";
while ($action !== "run" && (($playerhp>0) && ($enemyhp>0))) {
	$fullact=explode(" ", readline(""));
	$action=strtolower($fullact[0]);
	if ($action === "attack") {
		$n=$fullact[1];
		$type=strtolower($fullact[2]);
		if ($type==="critical") {
			$n=2*$n;
			}
		elseif ($type==="dodged") {
			$n=0;
			}
		if (($turn % 2) == 1) {
			$enemyhp=$enemyhp-$n;
			}
		else {
			$playerhp=$playerhp-$n;
			}
		}
	elseif ($action === "heal") {
		$n=$fullact[1];
		if (($turn % 2) == 1) {
			$playerhp=$playerhp+$n;
			}
		else {
			$enemyhp=$enemyhp+$n;
			}
		}
	$turn++;
	}
if ($playerhp<=0) {
	echo "MATI $enemyhp";
	}
elseif ($enemyhp<=0) {
	echo "$playerhp MATI";
	}
else {
	echo "$playerhp $enemyhp";
	}