<?php
$i = 0;
$value = 1;

while(true){
	$value = $value * 3;
	$i = $i + 1;
	if($value > 10000){
		break;
	} //end of if
} //end of while

print $i;
?>