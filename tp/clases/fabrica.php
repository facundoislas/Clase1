<?php
include_once "empleado.php";
	
class Fabrica 
{
	
	private $_empleados;
	private $_razonSocial;

	function __construct($razonSocial)
	{
		$this->_razonSocial = $razonSocial;
		$this->_empleados = array();		//inicializo el array
		

	}


	function AgregarEmpleado ($persona)
	{

		array_push($this->_empleados, $persona);		//agrego elementos al array
		$this->_empleados = $this->EliminarEmpleadosRepetidos();		//copio el array sin duplicados
		return TRUE;

	}

	function ToString()
	{
		echo "<strong><br>Razon Social: ".$this->_razonSocial."</strong><br><br>"; 
		for($i=0; $i< count($this->_empleados) ; $i++)
		{
			
			echo $this->_empleados[$i]->ToString()."<br>";
		}
		
	}

	function CalcularSueldos()
	{
		$sueldoTotal= 0;
		for($i=0; $i< count($this->_empleados) ; $i++)
		{
			$sueldoTotal+= $this->_empleados[$i]->getSueldo();

		}

		return "El sueldo acumulado de la fabrica es $".$sueldoTotal."<br>";

	}


	function EliminarEmpleado ($persona)
	{
		$i=0;
		foreach ($this->_empleados as $empleado) 
		{
						
			if($persona==$empleado)
			{
				unset($this->_empleados[$i]);
				sort($this->_empleados);
			}
			$i++;
		}

		
		
	}

	private function EliminarEmpleadosRepetidos()
	{
		$aux = array();
		$aux=array_unique($this->_empleados, SORT_REGULAR);		//el Regular compara ítems normalmente (no cambia los tipos), retorna un array
		return $aux;
	}

}

?>
