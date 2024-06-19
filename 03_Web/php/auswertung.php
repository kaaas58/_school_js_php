<?php

// method = post im Formular
//echo $_POST['vorname'];
//echo "<br>";
//echo $_POST['nachname'];


// method = get im Formular
//echo $_GET['vorname'];
//echo "<br>";
//echo $_GET['nachname'];

// request kann get und post auswerten
//echo $_REQUEST['vorname'];
//echo "<br>";
//echo $_REQUEST['nachname'];


function sagHallo($vorname, $nachname){
    echo "Hallo " . $vorname . " " . $nachname;
}


/*
// wurde Variable deklariert?
if(isset($_REQUEST['test'])){
    sagHallo($_REQUEST['vorname'], $_REQUEST['nachname']);
}else{
    echo "nicht gesetzt";
}


// enthält Variable einen Wert?
if(!empty($_REQUEST['vorname'])){
    // htmlspecialchars wandelt tags um/ macht sie unbrauchbar
    //$vorname = htmlspecialchars($_REQUEST['vorname']);
    // strip_tags entfernt tags - Ausnahmen möglich
    // $vorname = strip_tags($_REQUEST['vorname'], '<b>');
    sagHallo($_REQUEST['vorname'], $_REQUEST['nachname']); 
}else{
    echo "Kein Vorname";
}

*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Auswertung der Daten</h1>
    <?php
         if(!empty($_REQUEST['vorname']) && !empty( $_REQUEST['nachname'])){
            $vorname = strip_tags($_REQUEST['vorname']);
            $nachname = strip_tags($_REQUEST['nachname']);
            sagHallo($vorname, $nachname); 
        }else{
            echo "Hallo lieber Benutzer!";
        }
    ?>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, ullam debitis esse rem ad reprehenderit repudiandae non consequatur quos molestiae corporis doloribus placeat quis id vel dolor expedita nisi iure.</p>
</body>
</html>