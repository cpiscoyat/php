<?php
/*Ejercicio 01*/

$frase="Programación avanzada con PHP";

$palabras=explode(" ",$frase); //divide una cadena a partir de un elemento y genera un array
$letras=str_split($frase);

echo "La frase ".$frase." tiene ".count($palabras)." palabras";
echo "<br>";
echo "La frase ".$frase." tiene ".count($letras)." carácteres";


/*Ejercicio 02*/

$lista1=array(1,5,8,9,12);
$lista2=array(8,12,20,24,35);
echo "<br>";
print_r($lista1);
echo "<br>";
print_r($lista2);

echo "<br>";
var_dump($lista1);
echo "<br>";
var_dump($lista2);


$unido=array_merge($lista1,$lista2);
echo "<br>";
print_r($unido);
sort($unido);
echo "<br>";
print_r($unido);

//Ejercicio 3

function maximo($n1,$n2){
 if($n1>=$n2){
 	return $n1;
 }else{
 	return $n2;
 }
}

/*Ejercicio 4*/
function maximo2($n1,$n2,$n3){
	return max($n1,$n2,$n3);
}

echo "<br>";
echo "El máximo de 4 y 8 es ".maximo(4,8);
echo "<br>";
echo "El máximo de 5,9,1 es ".maximo2(5,9,1);

//Ejercicio 5
//$caracter="d";

function EsVocal($c){
	if(strtolower($c)=="a" or strtolower($c)=="e" or strtolower($c)=="i" 
		or strtolower($c)=="o" or strtolower($c)=="u"){
		echo $c." si es una vocal";
	}else{
		echo $c." no es una vocal";
	}
}
echo "<br>";
EsVocal("a");
echo "<br>";
EsVocal("b");
echo "<br>";
EsVocal("A");
echo "<br>";

//Ejercicio 6

$numeroLatas=55; //1+2+3+4+5+6+7+8+9+10
$sumador=0;
$i=1;
for($i=1;$i<$numeroLatas;$i++){
		$sumador=$sumador+$i;
		if($sumador>=$numeroLatas){
          break;
		}
}

if ($sumador==$numeroLatas){
	echo "Si se puede apilar en ".$i. " filas";
}else{
	echo "No se puede apilar";
}



//Ejercicio 11

$numeros=array(0,1,2,3,4,5,6,7,8,9);
$nombres=array("Cero","Uno","Dos","Tres","Cuatro","Cinco","Seis","Siete","Ocho","Nueve");

$valor=157684;
$valorString=(String) $valor;
echo "<br>";
echo $valor;
echo "<br>";
echo $valorString;
echo "<br>";
$valoresSeparados=str_split($valorString);

foreach ($valoresSeparados as $cifra) { //Recorrer
	for($i=0;$i<count($numeros);$i++){
			if($cifra== (String)$numeros[$i]){
					echo $nombres[$i]."-";
				}
	}
}


?>









