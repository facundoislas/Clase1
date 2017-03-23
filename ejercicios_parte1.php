
<?php
//ej1
echo "--------------Ejercicio1--------------<br><br>";
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

?>