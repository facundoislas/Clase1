<?php
//ejercicio 6
//constructor

echo "--------------Ejercicio 6--------------<br><br>";
echo "---------Con constructor------------<br><br>";
$miArray = array(rand(1,20), rand(1,20),rand(1,20),rand(1,20),rand(1,20));

var_dump($miArray);

//con llaves
echo "<br><br>---------Con llaves y for, y el promedio------------<br><br>";
$otroArray = array();
$suma;
$prom;
for($i=0; $i<5;$i++)
{
    $otroArray[$i]= rand(1,20);
    @$suma+=$otroArray[$i];//borro el notice

}
$prom = $suma/5;
var_dump($otroArray);
echo "<br>";
if($prom>6)
{
    echo "el promedio es mayor a 6";
}
elseif($prom==6)
{
    echo "el promedio es igual a 6";
}
else{

    echo "el promedio es menor a 6";
}



echo "<br>";
echo "El promedio es ".$prom."<br>";

//push
echo "<br><br>---------Con push------------<br><br>";
$tercerArray = array();
$i;
for($i=0; $i<5; $i++)
{
    array_push($tercerArray, rand(1,20));

}
var_dump($tercerArray);

?>