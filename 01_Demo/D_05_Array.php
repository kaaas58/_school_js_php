<?php

$einArray = array();
$nochEinArray = [];
var_dump($einArray);
echo "<br>";

$einArray[] = "Hasi";
$einArray[] = 15;
$einArray[] = 23.5;
$einArray[] = true;
var_dump($einArray);
echo "<br>";

$einArray[0] = "Mausi";
var_dump($einArray);
echo "<br>";

echo $einArray[1];
echo "<br>";

$fruechte = ["Banane", "Apfel", "Kiwi"];
var_dump($fruechte);
echo "<br>";

$gemuese = array("Lauch", "Erbsen", "Bohnen");
var_dump($gemuese);
echo "<br>";

$user = array(
    "name" => "Max Müller",
    "alter" => 39,
    "beruf" => "Bäcker"
    );
    
    $user["mail"] = "info@test.de";
    var_dump($user);
    echo "<br>";
    
    $user["mail"] = "info@betahh.de";
    var_dump($user);

    echo "<br>";
    echo "<br>";

    foreach($fruechte as $frucht){
        echo $frucht;
        echo "<br>";
    }

    echo "<hr>";

    foreach($user as $index => $wert){
        echo $index, ": ", $wert;
        echo "<br>";
    }

    echo "<hr>";
    
    $fruechte[] = "Trauben";
    echo "<br>";
    
    var_dump($fruechte);
    echo count($fruechte);
    for($i = 0; $i < count($fruechte); $i++){
        echo $fruechte[$i];
        echo "<br>";
        echo "<hr>";
        echo "<hr>";
    }
        

    array_splice($fruechte, 0, 0, "Ananas");

     for($i = 0; $i < count($fruechte); $i++){

        echo $fruechte[$i];
        echo "<br>";
     } 

     $zahlen = range(1,10);
     var_dump($zahlen);

    ?>