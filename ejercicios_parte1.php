<?php

//ej1
echo "--------------Ejercicio 1--------------<br><br>";
$suma=0;
$cont=1;

while($suma<1000)
{
	$suma+=$cont;
	if($suma<1000)
	{
		echo $suma."-";
		$cont++;
	}
}



echo "<br>Sume ".$cont." numeros";

//ej2
echo "<br><br>--------------Ejercicio 2--------------<br><br>";

date_default_timezone_get();
echo date("D M j Y")."<br>";
echo date("F j, Y")."<br>";
echo date("d-m-Y")."<br>";

switch (date("m")) {
	case '1':
	case '2':
		echo "es verano";
		break;
	case '3':
		if(date("d")>20)
			echo "es otoño";
		else
			echo "es verano";
		break;
	case '4':
	case '5':
		echo "es otoño";
		break;
	case '6':
		if(date("d")>20)
			echo "es invierno";
		else
			echo "es otoño";
		break;
	case '7':
	case '8':
		echo "es invierno";
		break;
	case '9':
		if(date("d")>20)
			echo "es primavera";
		else
			echo "es invierno";
		break;
	case '10':
	case '11':
		echo "es primavera";
		break;
	case '12':
		if(date("d")>20)
			echo "es verano";
		else
			echo "es primavera";
		break;
	default:
		break;
}

//ej3
echo "<br><br>--------------Ejercicio 3--------------<br><br>";


$a=rand(1,20);
$b=rand(1,20);
$c=rand(1,20);
echo "numeros: ".$a."/".$b."/".$c."<br>";
if($a>$b && $a<$c || $a>$c && $a<$b)
{
	echo "el numero del medio es ".$a;
}
elseif($a>$b && $c<$b || $b<$c && $a<$b)
{
	echo "el numero del medio es ".$b;

}
elseif ($c>$b && $c<$a || $c<$b && $a<$c) 
{
	
	echo "el numero del medio es ".$c;
}
else
{
	echo "no hay numero medio";
}

//ej4
echo "<br><br>--------------Ejercicio 4--------------<br><br>";

$operador;
$num=rand(1,4);
$num1=rand();
$num2=rand();
$resul;

switch ($num) {
	case '1':
		$operador='+';
		break;
	case '2':
		$operador='-';
		break;
	case '3':
		$operador='/';
		break;
	default:
		$operador='*';
		break;
}

switch ($operador) {
	case '+':
		$resul= $num1+$num2;
		break;
	case '-':
		$resul= $num1-$num2;
		break;
	case '/':
		$resul= $num1/$num2;
		break;
	default:
		$resul= $num1*$num2;
		break;
}
$resul=number_format($resul,2,',', ' ');
echo $num1.$operador.$num2."=".$resul;



//ej5
echo "<br><br>--------------Ejercicio 5--------------<br><br>";

$num=(string)rand(20,60);
$enLetras;
//decena
switch ($num[0]) {
	case '2':
		if($num[1]==0)
			$enLetras="veinte";
		else
			$enLetras="veinti";
		break;
	case'3':
		if($num[1]==0)
			$enLetras="treinta";
		else
			$enLetras="treinta y ";
		break;
	case'4':
		if($num[1]==0)
			$enLetras="cuarenta";
		else
			$enLetras="cuarenta y ";
		break;
	case'5':
		if($num[1]==0)
			$enLetras="cincuenta";
		else
			$enLetras="cincuenta y ";
		break;
	default:
		if($num[1]==0)
			$enLetras="sesenta";
		else
			$enLetras="sesenta y ";
		break;
}

//unidades
switch ($num[1]) {
	case '1':
		$enLetras= $enLetras."uno";
		break;
	case '2':
		$enLetras= $enLetras."dos";
		break;
	case '3':
		$enLetras= $enLetras."tres";
		break;
	case '4':
		$enLetras= $enLetras."cuatro";
		break;
	case '5':
		$enLetras= $enLetras."cinco";
		break;
	case '6':
		$enLetras= $enLetras."seis";
		break;
	case '7':
		$enLetras= $enLetras."siete";
		break;
	case '8':
		$enLetras= $enLetras."ocho";
		break;
	case '9':
		$enLetras= $enLetras."nueve";
		break;
	default:
		break;
}

echo $num."<br>".$enLetras;


?>