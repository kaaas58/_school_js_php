<?php


$auswahl = $_POST['auswahl'];
// echo $auswahl;


switch($auswahl){
    case 'standort':
        echo 'nach Standort selektiert';
        break;
    case 'abteilung':
        echo 'nach Abteilung selektiert';
        break;
    case 'eintritt':
        echo 'nach Eintrit selektiert';
        break;
    case 'kombination':
        echo 'nach Kombination selektiert';
        break;

}

// === Funktionen ===

function dbVerbindung(){
    $db = new PDO('mysql:host=localhost; dbname=mitarbeiterverwaltung', 'root', '');
    return $db;
}

function abfragenDB($db, $sql){
    $statement = $db->query($sgl);
    $daten = $statement->fetchAll();
}

function datenAnzeigen(){

}

function nachStandortSelektieren(){
    return sql;
}

function nachAbteilungSelektieren(){
    return sql;
}

function nachEintrittSelektieren(){
    return sql;
}

function nachKombiSelektieren(){
    return sql;
}


?>