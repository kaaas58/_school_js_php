<?php

$beispielString = "  Heute lernen wir PHP  ";
$laenge = strlen($beispielString);
echo $laenge;

echo "<br>";

$beispielString = trim($beispielString);
$laenge = strlen($beispielString);
echo $laenge;

echo "<br>";

$beispielString = str_replace("PHP", "String-Funktion", $beispielString);
echo $beispielString;

echo "<br>";

// ab 13te Stelle heisst nach 13. Stelle.
$teilString = substr($beispielString, 13, 3);
echo $teilString;

echo "<br>";

$pos = strpos($beispielString, "wir");
echo $pos;

?>