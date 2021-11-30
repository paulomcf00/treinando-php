<?php 
$space = "<br/>";  /*para pular linha no navegador local */

/*Exercicio 1 - A */

function media($a,$b,$c,$d){
	echo"EXERCICIO 1-A <br/>";
	echo"Variavel 1 =$a <br/> Variavel 2 = $b </br> Variavel 3 =$c <br/> Variavel 4 = $d <br/>";
	$e = ($a + $b + $c + $d)/4;
	echo "Media = $e <br/>";
}

/*Exercicio 1 - B */

function bombom($din,$dinbom){
	echo"EXERCICIO 1-B <br/>";
	echo"Variavel Dinheiro = $din<br/> Variavel Dinheiro do Bombom = $dinbom <br/>";
	$num_bombom = intdiv($din,$dinbom);
	$troco =  $din%$dinbom;
	echo"Bombons =  $num_bombom, Troco = $troco<br/>";
}

/*Exercicio 2 - A */

function hipotenusa($cat1,$cat2){
	echo"EXERCICIO 2-A <br/>";
	echo"Variavel Cateto 1 = $cat1<br/> Variavel Cateto 2 = $cat2 <br/>";
	$hip = sqrt(($cat1**2)+($cat2**2));
	echo"Hipotenusa = $hip <br/>";
}

/*Exercicio 2 - B */

function coordenada($x1,$y1,$x2,$y2){
	echo"EXERCICIO 2-A <br/>";
	echo "Ponto 1 =  [$x1,$y1]<br/> Ponto 2 = [$x2,$y2] <br/>";
	$dist = sqrt((($x2-$x1)**2) + (($y2-$y1)**2));
	echo "Distancia = $dist <br/>";
}


media(1,2,3,4);
echo $space;
bombom(5,2);
echo $space;
hipotenusa(5,4);
echo $space;
coordenada(1,2,3,2);
echo $space;