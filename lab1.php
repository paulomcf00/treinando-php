<?php 

/*Exercicio 1 */

function media($a,$b,$c,$d){
	echo"Variavel 1 =$a\n,Variavel 2 = $b\n,Variavel 3 =$c \n,Variavel 4 = $d \n";
	return ($a + $b + $c + $d)/4;

}


echo"Resultado = ";
echo(media(1,2,3,4));