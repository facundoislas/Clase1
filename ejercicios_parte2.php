<?php

//ejercicio 6
//constructor

echo "--------------Ejercicio 6--------------<br><br>";
echo "Con constructor<br><br>";
$miArray = array(rand(1,20), rand(1,20),rand(1,20),rand(1,20),rand(1,20));

var_dump($miArray);

//con llaves
echo "<br><br>Con llaves y for, y el promedio<br><br>";
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
echo "<br><br>Con push<br><br>";
$tercerArray = array();
$i;
for($i=0; $i<5; $i++)
{
    array_push($tercerArray, rand(1,20));

}
var_dump($tercerArray);


//ej7
echo "<br>--------------Ejercicio 7--------------<br><br>";

$numeros= array();
$cont=0;
$i=1;

while($cont<10)
{
    if($i%2 != 0)
    {
        $numeros[$cont] = $i;
        $cont++;
    }
    $i++;
}
//imprimo con for
echo "Imprimo con for<br>";
for($i = 0; $i<10;$i++)
{
    echo "<br>".$numeros[$i];
}

echo "<br><br>Imprimo con while<br>";
$cont=0;
while($cont<10)
{
    echo "<br>".$numeros[$cont];
    $cont++;
}

echo "<br><br>Imprimo con foreach<br>";

$cont=0;
foreach ($numeros as $i) 
{
    echo "<br>".$numeros[$cont];
    $cont++;
}



//ej8
echo "<br><br>--------------Ejercicio 8--------------<br><br>";


$v=array(
    1 => 90,
    30 => 7,
    'e'=> 99,
    'hola' => 'mundo'


);

foreach ($v as $key => $value) {
   echo "<br>".$value;
}

//ej9
echo "<br><br>--------------Ejercicio 9--------------<br><br>";

$lapicera= array(

    'color' =>'',
    'marca' =>'',
    'trazo' =>'',
    'precio' =>''

);

$lapicera['color'] = 'rojo';
$lapicera['marca'] = 'bic';
$lapicera['trazo'] = 'fino';
$lapicera['precio'] = '10.00';


echo "<br><br><strong>Primera Lapicera: </strong>";
foreach ($lapicera as $key => $value) {
    echo "<br>".$key.": ".$value;
}

$lapicera['color'] = 'azul';
$lapicera['marca'] = 'mundial';
$lapicera['trazo'] = 'grueso';
$lapicera['precio'] = '20.00';

echo "<br><br><strong>Segunda Lapicera: </strong>";
foreach ($lapicera as $key => $value) {
    echo "<br>".$key.": ".$value;
}


$lapicera['color'] = 'violeta';
$lapicera['marca'] = 'stick';
$lapicera['trazo'] = 'mediano';
$lapicera['precio'] = '15.50';

echo "<br><br><strong>Tercera Lapicera: </strong>";
foreach ($lapicera as $key => $value) {
    echo "<br>".$key.": ".$value;
}
?>