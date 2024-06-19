<?php


function addieren(){
    echo "addiert zwei Zahlen";
    echo "<br>";
    $ergebnis = 5 + 7;
    echo $ergebnis;
    echo "<br>";
}

// Funktionen können nicht anhand der Übergabeparameter unterschieden werden!
//function addieren($a, $b){

function addierenZahlen($a, $b){
    echo "mit Übergabeparameter";
    echo "<br>";
    $ergebnis = $a + $b;
    echo $ergebnis;
    echo "<br>";
}


function subtrahieren($a, $b){
    echo "mit Übergabeparameter";
    echo "<br>";
    $ergebnis = $a - $b;
    return $ergebnis;    
}


addieren();
addierenZahlen(6,8);

echo subtrahieren(14, 10.5);
//echo $ergebnis;

?>