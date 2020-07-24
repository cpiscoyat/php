<?php

class Alumno{  // defino la clase

	//Defino propiedades o atributos
	private $codigo;
	private $nombre;
	private $apellido;
	private static $instituto="Davinci";


	//metodo mágico
	public function __construct($c,$n,$a){
		$this->codigo=$c;
		$this->nombre=$n;
		$this->apellido=$a;
	}

	//Para obtener el valor de la propiedad codigo
	public function getCodigo(){
		return $this->codigo;
	}

	//Para establecer el valor de la propiedad codigo
	public function setCodigo($c){
		$this->codigo=$c;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($n){
		$this->nombre=$n;
	}

	public function getApellido(){
		return $this->apellido;
	}

	public function setApellido($a){
		$this->apellido=$a;
	}

	public static function getInstituto(){
		return self::$instituto;
	}

	public function __toString(){
		return "El alumno es ". $this->nombre;

	}

}

$pepito= new Alumno(1,"Pepito","Gonzáles"); //Instanciando un objeto $pepito
//Asignado valores a sus propiedades.
//$pepito->setCodigo(1);
//$pepito->setNombre("Pepito");
$pepito->setApellido("Fernández");


$luchito= new Alumno(2,"Luchito","Olano");
/*$luchito->setCodigo(2);
$luchito->setNombre("Luchito");
$luchito->setApellido("Olano");*/

// Imprimiendo propiedades
echo "El alumno de codigo " .$pepito->getCodigo(). " es ".$pepito->getNombre()." ".$pepito->getApellido()." y estudia en ".$pepito::getInstituto();
echo "<br>";

echo $pepito->__toString();

echo "<br>";
echo "El alumno de codigo " .$luchito->getCodigo(). " es ".$luchito->getNombre()." ".$luchito->getApellido() ." y estudia en ".$luchito::getInstituto();
echo "<br>";
$exi=isset($pepito) ? 'true' : 'false'; // forma corta del if
echo "Existe?". $exi;

unset($pepito); //borrado
echo "<br>";
$exi=isset($pepito) ? 'true' : 'false'; // forma corta del if
echo "Existe?".$exi;
echo $pepito;

?>