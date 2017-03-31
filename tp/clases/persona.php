<?php

abstract class Persona
{	

	private $_apellido;
	private $_nombre;
	private $_dni;
	private $_sexo;

	function __construct($nombre, $apellido, $dni, $sexo)
	{

		$this->_apellido = $apellido;
		$this->_nombre = $nombre;
		$this->_dni = $dni;
		$this->_sexo = $sexo;
	}
	//getters y setters
	function getApellido()
	{
		return $this->_apellido;

	}

	function getNombre()
	{
		return $this->_nombre;

	}

	function getDni()
	{
		return $this->_dni;

	}

	function getSexo()
	{
		return $this->_sexo;

	}


	abstract function Hablar ($idioma);

	function ToString()
	{

		$cadena= "Apellido ".$this->getApellido()."- Nombre: ".$this->getNombre()."- DNI: ".$this->getDni()."- Sexo: ".$this->getSexo();
		return $cadena;
	}



}


?>