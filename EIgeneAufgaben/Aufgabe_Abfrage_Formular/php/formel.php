

<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $shape = $_POST['shape'];

    switch ($shape){
        case 'quadratische Fläche':
            if(isset($_POST['längeA'])){
                $a = floatval($_POST['längeA']);
                quadrat($a);
            } else {
                echo "Fehlende Eingabe für Länge A.";
            }
            break;
        case 'Viereckige Fläche':
            if(isset($_POST['längeA']) && isset($_POST['längeB'])){
                $a = floatval($_POST['längeA']);
                $b = floatval($_POST['längeB']);
                viereck($a, $b);
            } else {
                echo "Fehlende Eingaben für Länge A und/oder Länge B.";
            }
            break;
        case 'Würfel Flächeninhalt':
            if(isset($_POST['längeA']) && isset($_POST['höhe'])){
                $a = floatval($_POST['längeA']);
                $höhe = floatval($_POST['höhe']);
                flQuadratWuerfel($a, $höhe);
            } else {
                echo "Fehlende Eingaben für Länge A und/oder Höhe.";
            }
            break;
        case 'Kugel Flächeninhalt':
            if(isset($_POST['durchmesser'])){
                $d = floatval($_POST['durchmesser']);
                kugel($d);
            } else {
                echo "Fehlende Eingabe für Durchmesser.";
            }
            break;
        default:
            echo "Ungültige Form.";
            break;
    }
}

function quadrat($a){
    $result = $a * $a;
    echo "Das Quadrat hat eine Fläche von " . $result . " cm²";
}

function viereck($a, $b){
    $result = $a * $b;
    echo "Das Viereck hat eine Fläche von " . $result . " cm²";
}

function flQuadratWuerfel($a, $höhe){
    $result = $a * $a * $höhe;
    echo "Der Würfel hat einen Flächeninhalt von " . $result . " cm³";
}

function kugel($d){
    $result = pow($d, 3) * 3.1416 / 6;
    echo "Die Kugel hat ein Volumen von " . $result . " cm³";
}
?>

<br><br>
<button onclick="window.history.back()">Zurück zur Startseite</button>
