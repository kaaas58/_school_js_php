<?php

$zahl = 5;
$wort = "Hallo";
$wahr = true;

$stunden = 40;
$sekunden = $stunden*3600;

echo $sekunden;
echo "<br>";
echo gettype($sekunden);
echo "<br>";

$wert = 123;

echo is_string($wert);
echo is_float($wert);
echo is_bool($wert);
echo is_int($wert);

echo "<br>";

$vartiable;
$vartiable = "PHP lernen";

if(is_string($vartiable)){
    echo "ja";
}else{
    echo "neun";
}

echo"<br>";
$test = 1;

echo is_int($test); 
echo is_string($test);
echo is_float($test);
echo is_bool($test);

echo "<br>";
echo "<hr>";
$zahl = "123";
$integer = intval($zahl);

echo is_int($integer);
echo "<br>";
var_dump($integer);

?>