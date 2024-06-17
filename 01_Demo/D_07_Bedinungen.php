<?php

$text = "Hallo";

if($text){
    echo "Was passiert?";
    echo "String wird als True gewertet";
}


if(42){
    echo "Sinn des Lebens?";
    echo "Zahlen sind True... bis auf die 0";
}

//$text = "1234 Hasen";

if("1234 Hasen" == 1234){
    echo "auch seltsam";
}

$ergebnis = 10 + $text;
echo $ergebnis;


?>