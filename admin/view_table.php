<?php
//Gibt den inhalt eine tabelle aus
include "../inc/functions/connection.php";

$table = $_GET["table"];    //variable global get o post 
//$title = $_GET["title"];

//echo "der title ser seite heist $title";

$sql ="SELECT * FROM $table ";  //prüfung relevant für jede tabelle eine drop table machen 

if( $stmt = $pdo->query($sql)){
    $spielorte = $stmt->fetchall(PDO::FETCH_ASSOC);       //todos los datos en un array 2D //fech_all da todo
    echo"<pre>";                                         //fetch_assoc da resultados de la tabla asociativos 
    print_r($spielorte);                                //fetch_NUM        Da los nombres
    echo "</pre>";

}






?>