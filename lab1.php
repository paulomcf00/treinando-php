<?php 

/*Exercicio 1 - a*/

function media($a,$b,$c,$d){
	echo"EXERCICIO 1-A <br/>";
	echo"Variavel 1 =$a <br/> Variavel 2 = $b </br> Variavel 3 =$c <br/> Variavel 4 = $d <br/>";
	$e = ($a + $b + $c + $d)/4;
	echo "Resultado = $e <br/>";
}

function bombom($din,$dinbom){
	echo"EXERCICIO 1-B <br/>";
	echo"Variavel Dinheiro = $din<br/> Variavel Dinheiro do Bombom = $dinbom <br/>";
	echo"Resultado = ";
	$num_bombom = intdiv($din,$dinbom);
	$troco =  $din%$dinbom;
	echo"Bombons =  $num_bombom, Troco = $troco";
}


echo(media(1,2,3,4));
echo"<br/>";
echo(bombom(5,2));
