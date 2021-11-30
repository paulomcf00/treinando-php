<?php 
$space = "<br/>";

/*Exercicio 1 - a*/

function media($a,$b,$c,$d){
	echo"EXERCICIO 1-A <br/>";
	echo"Variavel 1 =$a <br/> Variavel 2 = $b </br> Variavel 3 =$c <br/> Variavel 4 = $d <br/>";
	$e = ($a + $b + $c + $d)/4;
	echo "Media = $e <br/>";
}

function bombom($din,$dinbom){
	echo"EXERCICIO 1-B <br/>";
	echo"Variavel Dinheiro = $din<br/> Variavel Dinheiro do Bombom = $dinbom <br/>";
	$num_bombom = intdiv($din,$dinbom);
	$troco =  $din%$dinbom;
	echo"Bombons =  $num_bombom, Troco = $troco<br/>";
}

function hipotenusa($cat1,$cat2){
	echo"EXERCICIO 2-A <br/>";
	echo"Variavel Cateto 1 = $cat1<br/> Variavel Cateto 2 = $cat2 <br/>";
	$hip = sqrt(($cat1**2)+($cat2**2));
	echo"Hipotenusa = $hip <br/>";
}

media(1,2,3,4);
echo $space;
bombom(5,2);
echo $space;
hipotenusa(5,4);
echo $space;
