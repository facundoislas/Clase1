<?php

include_once "./clases/fabrica.php";

//Creo empleados
$persona1 = new Empleado("Facundo", "Islas", 35329414, 'm', 99, 25.50);
$persona2 = new Empleado("Nicolas", "Islas", 38261523, 'm', 170, 40);
$persona3 = new Empleado("Barbara", "Mariño", 35402822, 'f', 1982, 15.9);
$persona4 = new Empleado("Roberto", "Martinez", 2123123, 'm', 100, 12.371);
$persona5 = new Empleado("Carla", "Perez", 435345, 'f', 001, 34.56);

//Defino que idioma habla cada empleado
$persona1->Hablar("Español");
$persona2->Hablar("Ingles");
$persona3->Hablar("Portugues");
$persona4->Hablar("Italiano");
$persona5->Hablar("Español");


$Prisma = new Fabrica ("Prisma");	// creo objeto fabrica, array de empleados

//agrego empleados
$Prisma->AgregarEmpleado($persona4);
$Prisma->AgregarEmpleado($persona2);
$Prisma->AgregarEmpleado($persona1);
$Prisma->AgregarEmpleado($persona4); // agrego mismo empleado

//var_dump($Prisma);// con esto muestro todo el array

echo "<br>Imprimo fabrica<br>";
echo $Prisma->ToString();	//imprimo el array

echo $Prisma->CalcularSueldos();	//calculo sueldos total

$Prisma->EliminarEmpleado($persona2);	//elimino empleado y se reordena array

echo "<br>Imprimo con el empleado ya eliminado<br>";
echo $Prisma->ToString();	//imprimo array
echo $Prisma->CalcularSueldos();	//calculo sueldos total

$Visa = new Fabrica ("Visa");	// creo objeto fabrica, array de empleados

//agrego empleados
$Visa->AgregarEmpleado($persona3);
$Visa->AgregarEmpleado($persona1);
$Visa->AgregarEmpleado($persona5);	

echo "<br>Imprimo fabrica<br>";
echo $Visa->ToString();				//imprimo el array
echo $Visa->CalcularSueldos();		//calculo sueldos total


$Visa->EliminarEmpleado($persona1); // Elimino persona 1

echo "<br>Imprimo fabrica con empleado borrado<br>";
echo $Visa->ToString();				//imprimo el array
echo $Visa->CalcularSueldos();		//calculo sueldos total


//echo $persona1->ToString(); // imprimo persona1



?>
