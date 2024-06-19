<?php


$auswahl = $_POST['auswahl'];
// echo $auswahl;
$sql = '';

switch($auswahl){
    case 'standort':
        $standort = $_POST['standort'];
        echo '<h1> Ergebnisse nach Standort: ' . $standort . ' selektiert. </h1>';
        $sql = nachStandortSelektieren($standort);
        break;
    case 'abteilung':
        $abteilung = $_POST['abteilung'];
        echo '<h1> Ergebnisse nach abteilung: ' . $abteilung . ' selektiert. </h1>';
        $sql = nachAbteilungSelektieren($abteilung);
        break;
    case 'eintritt':
        $von = $_POST['von'];
        $bis = $_POST['bis'];
        echo '<h1> Ergebnisse nach eintritt: ' . $von . ' bis ' . $bis . ' selektiert. </h1>';
        $sql = nachEintrittSelektieren($von, $bis);
        break;
    case 'kombination':
        $standort = $_POST['standort'];
        $abteilung = $_POST['abteilung'];
        $von = $_POST['von'];
        $bis = $_POST['bis'];
        if (condition) {
            echo '<h1> Ergebnisse nach eintritt: ' . $von . ' bis ' . $bis . ' selektiert. </h1>';
        }if else(condition) {
            echo '<h1> Ergebnisse nach abteilung: ' . $abteilung . ' selektiert. </h1>';
        }
        else{
            echo '<h1> Ergebnisse nach Standort: ' . $standort . ' selektiert. </h1>';
        }
        $sql = nachKombiSelektieren();
        break;

}

$db = dbVerbindung();
$daten = abfragenDB($db, $sql);
datenAnzeigen($daten);

// === Funktionen ===

function dbVerbindung(){
    // to-do exeption handling
    $db = new PDO('mysql:host=localhost; dbname=mitarbeiterverwaltung', 'root', '');
    return $db;
}

function abfragenDB($db, $sql){

    // to-do: preparew

    // anfrage an db
    $statement = $db->query($sql);
    // abgreifen von Antworten
    $daten = $statement->fetchAll();
    return $daten;
}

function datenAnzeigen($daten){
    // var_dump($daten);
    // echo $daten[0]['Name'];

    echo '<table border="1">';
    echo '<tr><th>ID</th><th>Name</th><th>Vorname</th><th>Mail</th><th>Abteilung</th><th>Standort</th><th>Eintritt</th></tr>';
    foreach($daten as $mitarbeiter){
        echo '<tr>';
         echo '<td>' .$mitarbeiter['MitarbeiterID']. '</td>';
         echo '<td>' .$mitarbeiter['Name']. '</td>';
         echo '<td>' .$mitarbeiter['Vorname']. '</td>';
         echo '<td>' .$mitarbeiter['Mailadresse']. '</td>';
         echo '<td>' .$mitarbeiter['Abteilung']. '</td>';
         echo '<td>' .$mitarbeiter['Standort']. '</td>';
         echo '<td>' .$mitarbeiter['Eintrittsdatum']. '</td>';
        echo '</tr>';
    }
    echo '</table>';
}

function nachStandortSelektieren($standort){
    // $sql = 'SELECT * FROM mitarbeiter WHERE Standort = "Heidleberg"';
    $sql = 'SELECT * FROM mitarbeiter WHERE Standort = "' . $standort . '";';
    return $sql;
}

function nachAbteilungSelektieren($abteilung){
    $sql = 'SELECT * FROM mitarbeiter WHERE Abteilung = "' . $abteilung . '";';
    return $sql;
}

function nachEintrittSelektieren($von, $bis){
    $sql = 'SELECT * FROM mitarbeiter WHERE Eintrittsdatum BETWEEN "' . $von . '" AND "' . $bis . '";';
    return $sql;
}


function nachKombiSelektieren(){
    return $sql;
}


?>