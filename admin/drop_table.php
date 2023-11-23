<?php
//Löschen einer tabelle, die beim Aufruf
//übergeben wird
include "../inc/functions/connection.php";

$table = $_GET["table"];    //variable global get o post 
//$title = $_GET["title"];

//echo "der title ser seite heist $title";

$sql ="DROP TABLE $table ";  //prüfung relevant für jede tabelle eine drop table machen 

if( $stmt = $pdo->query($sql)){
    echo "Die Tabelle $table wurde gelöoscht.";
}


?>
