<?php
//Controller für Spielorte 
//der controller "macht" alles, was die seite leisten soll und übergibt der 
//view eine Variable, in der die Ausgabeinformation enthalten ist


include "../inc/functions/connection.php";

//evtl. Löschen eines eintrag

if(isset($_GET['del'])){
    $id= $_GET['del'];
   // echo" $id soll gelöscht werden";
    $sql = "DELETE FROM spielorte WHERE id_spielorte = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $meldung_del = "Der Spielort wurde erfolgreich gelöscht!";
}


//Die Spielorte werden in $spielorte gespeicher
$table = "spielorte";  //variable global get o post 

$sql ="SELECT * FROM $table ";  //prüfung relevant für jede tabelle eine drop table machen 

if($stmt = $pdo->query($sql)){
    $spielorte = $stmt->fetchall(PDO::FETCH_ASSOC);       //todos los datos en un array 2D //fech_all da todo
   // echo"<pre>";                                         //fetch_assoc da resultados de la tabla asociativos 
   // print_r($spielorte);                                //fetch_NUM        Da los nombres
   // echo "</pre>";
  //die();
}

//$spielorte enthält alle Spielorte als 2D Array

include "./../views/spielorte_view.php";

?>