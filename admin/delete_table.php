<?php
//löschen aller Datensätze aus der tabelle, ohne die tabelle selbst zu löschen 
//DELETE FROM Tabellenname

include "../inc/functions/connection.php";

$table = $_GET["table"];    //variable global get o post 
//$title = $_GET["title"];

//echo "der title ser seite heist $title";

$sql ="DELETE FROM $table ";  //prüfung relevant für jede tabelle eine drop table machen 

if( $stmt = $pdo->query($sql)){
    echo "Die Tabelle $table wurde geleert.";
}



?>