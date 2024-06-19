<?php
 
    $einArray = array(); // alte Version
    $nochEinArray = []; // neuer, Kurzschreibweise
 
    var_dump($einArray);
 
    $einArray[] = "Hasi";
    $einArray[] = 15;
    $einArray[] = 23.4;
    $einArray[] = true;
 
    var_dump($einArray);
    echo "<br>";
 
    $einArray[0] = "Mausi";
 
    var_dump($einArray);
    echo "<br>";
 
    echo $einArray[1];
 
    echo "<hr>";
 
    $fruechte = ["Banane", "Apfel", "Kiwi"];
    var_dump($fruechte);
    echo "<br>";
    $gemuese = array("Lauch", "Erbsen", "Bohnen");
    var_dump($gemuese);
 
    echo "<hr>";
    $user = array(
        "name"  => "Max Müller",
        "alter" => 39,
        "beruf" => "Bäcker"
    );
 
    $user["mail"] = "info@test.de";
 
    var_dump($user);
 
    $user["mail"] = "max@mueller.de";
    var_dump($user);
 
    //$user[3] = "mueller@web.de";
    //var_dump($user);
 
    echo "<hr>";
 
    foreach($fruechte as $frucht){
        echo $frucht;
        echo "<br>";
    }
 
    echo "<hr>";
 
    foreach($user as $index => $wert ){
        echo $index, ": ", $wert;
        echo "<br>";
    }
 
 
     echo "<hr>";
 
     for($i = 0; $i < count($fruechte); $i++){
        echo $fruechte[$i];
        echo "<br>";
     }
 
   
 
     echo "<hr>";
     echo "<hr>";
 
     $fruechte[] = "Trauben";
 
 
     for($i = 0; $i < count($fruechte); $i++){
        echo $fruechte[$i];
        echo "<br>";
     }
     echo "<hr>";
     // https://www.php.net/manual/de/function.array-splice.php
     // welches Array, an welche Postion, wieviele löschen, neuer Wert
     array_splice($fruechte, 0, 0, "Ananas");
 
     for($i = 0; $i < count($fruechte); $i++){
     
        echo $fruechte[$i];
        echo "<br>";
     }
     echo "<hr>";
     array_splice($fruechte, 3, 0, "aprikose");
     for($i = 0; $i < count($fruechte); $i++){
     
        echo $fruechte[$i];
        echo "<br>";
     }
 
     array_pop($fruechte);
     echo "<hr>";
     for($i = 0; $i < count($fruechte); $i++){
     
        echo $fruechte[$i];
        echo "<br>";
     }
 
 
     sort($fruechte, SORT_NATURAL| SORT_FLAG_CASE );
 
     echo "<hr>";
     for($i = 0; $i < count($fruechte); $i++){
     
        echo $fruechte[$i];
        echo "<br>";
     }
 
     echo "<hr>";
     if(in_array( "Trauben", $fruechte)){
        echo "vorhanden";
     }else{
        echo "einkaufen";
     }
 
     echo "<hr>";
     echo "<hr>";
 
     $zahlen = range(1,10);
     // var_dump($zahlen);
     foreach($zahlen as $zahl){
        echo $zahl . " " ;
     }
 
     echo "<hr>";
     shuffle($zahlen);
     foreach($zahlen as $zahl){
        echo $zahl . " " ;
     }
 
     
     echo "<hr>";
     sort($zahlen);
     foreach($zahlen as $zahl){
        echo $zahl . " " ;
     }
 
     echo "<hr>";
 
     echo array_sum($zahlen);
     echo "Durchschnitt: " . (array_sum($zahlen)/ count($zahlen));
 
?>