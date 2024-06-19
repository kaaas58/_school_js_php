<?php

$text = "Hello World";

for($i = 0; $i < 3; $i++){

    $text = "Hallo Welt";
    echo $text;

}

unset($text);

echo "----------";
// Zugriff wäre in Java nicht möglich
echo $text;


if(5 > 4){
    $nocheinText = "in der Bedingung";
    echo $nocheinText;
}


echo "----------";
echo $nocheinText;

?>