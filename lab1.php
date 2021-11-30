<?php 

function media($a,$b,$c,$d){
	echo"$a,$b,$c,$d \n";
	return ($a + $b + $c + $d)/4;

}

echo(media(1,2,3,4));