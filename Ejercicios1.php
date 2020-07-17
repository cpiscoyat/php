<?php

/* Resolución de 
Ejercicios */

//Ejercicio1

$a=4;
$b=6;
$c=8;

$suma= $a+$b+$c;

echo "La suma es ".$suma."\n";
echo "<br>";


//Ejercicio 2
$promedio= ($a+$b+$c)/3;
echo "El promedio es ".$promedio;
echo "<br>";

//Ejercicio 3 Area de un circulo
$radio=5;
$area= pi()*pow($radio,2); // Es para elevar a potencia
echo "El area es". $area;
echo "<br>";


//Ejercicio 4
$precio=12.3;
$IGV=0.18;
$valorfinal= $precio * $IGV;
echo "El precio final es ".$valorfinal;
echo "<br>";

//Ejercicio 5
$numero=12;
if($numero%6 ==0){
	echo  "Es divisible entre 6";
}else{
	echo "No es divisible entre 6";
}
echo "<br>";

//Ejercicio 6
$n1=25;
$n2=5;
$division=$n1/$n2;
if ($n1%$n2==0){
	echo "La división ".$division." es exacta";
}else{
   echo "La división ".$division." no es exacta";
}
echo "<br>";


//Ejercicio 11
$nombre="Jean Ibañez";
echo "La longitud de la cadena es ".strlen($nombre);
echo "<br>";
$posicion= strpos($nombre," ");
echo "La posicion del espacio es ".$posicion;
echo "<br>";
echo "El nombre es ".substr($nombre, 0,$posicion);
echo "<br>";
echo "El apellido es ".substr($nombre,$posicion+1);










?>







