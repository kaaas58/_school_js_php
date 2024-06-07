// PHP zeigt false und in dem Sinne 0 nicht an. Nur true oder 1.
<?php

    $vorname = "Horst";
    
    // var_dump() --> nützlich 4 Debugging
    var_dump($vorname);
    // liefert den Datentyp zurück.
    echo gettype($vorname);
    // prüft auf Datentyp, liefert true oder false
    echo is_string($vorname);

    echo "<hr>";
    echo "Hallo ", $vorname, "!";
    echo "<br>";
    echo "<br>";
    echo 'Hallo ', $vorname, '!';
    echo "<br>";
    echo "<br>";

    //'gfg' Nicht interpretierter String
    echo 'Hallo $vorname ';
    echo "<br>";
    echo "<br>";
    //"gfg" Interpretierter String
    echo "Hallo $vorname !";
    echo "<br>";
    echo "<br>";
    echo "Hallo ".$vorname."!";
    echo "<br>";
    echo "<br>";
    echo 'Hallo '.$vorname.'!';

    $vorname = 42;
    echo $vorname;
    echo "<br>";
    echo "Ergebnis -String: " .is_string($vorname); 
    echo "<br>";
    echo "Ergrbnis -Integer" .is_integer($vorname);
    echo "<br>";
    $vorname = 42.5;
    echo "Ergebnis -Integer: " .is_integer($vorname);
    echo "<br>";
    echo "Ergebnis -float:" .is_float($vorname);
    echo "<br>";
    echo "ergebnis -numeric:" .is_numeric($vorname);
    echo "<br>";
    echo "<hr>";
    
    if(is_numeric($vorname)){
        echo "Berechnung möglich";
    }else{
        echo "Keine Zahl";
    }
    
    echo "<br>";
    echo "<hr>";
    
    $vorname=true;
    echo gettype($vorname); // gibt Datentyp zurück
    echo "<br>";
    echo "Ergebnis-bool: " .is_bool($vorname);
    echo "<br>";
    echo "<hr>";
    echo is_bool($vorname);

    echo "<br>";
?>