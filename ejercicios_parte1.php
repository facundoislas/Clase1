
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

//ej3
echo "<br><br>--------------Ejercicio3--------------<br><br>";


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



?>