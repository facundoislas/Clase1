<?php
	
include_once "persona.php";


class Empleado extends Persona
{
	protected $_legajo;
	protected $_sueldo;
	

	function getLegajo ()
	{
		return $this->_legajo;

	}

	function getSueldo ()
	{
		return $this->_sueldo;

	}

	function __construct($nombre, $apellido, $dni, $sexo, $legajo, $sueldo)
	{

		parent::__construct($nombre, $apellido, $dni, $sexo);	// uso primero el otro constructor
		$this->_legajo = $legajo;
		$this->_sueldo = $sueldo;

	}

	 function Hablar ($idioma)
	 {
		//declaro variable Global para luego utilizarla en el tostring
		GLOBAL $aux;
		$aux=$idioma;
	 	$cadena= "El empleado habla ".$idioma."<br>";
	 	return $cadena;
	 }

	 function ToString()
	{

		GLOBAL $aux;//tengo que llamar a la variable local dentro de la funcion
		
		//NO FUNCIONA LO DEL IDIOMA
		$cadena= parent::ToString()."- Legajo: ".$this->getLegajo()."- Sueldo: $".$this->getSueldo()."- ".$this->Hablar($aux)."<br>"; // con el parent uso el otro ToString
		return $cadena;
	}

}



?>
