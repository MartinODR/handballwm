<?php
//Einfügen von Beispielen 


include "../inc/functions/connection.php";

$table = $_GET["table"];    //variable global get o post 

//Drei Beispielorte eintragen

$sql ="INSERT INTO spielorte (land,stadt,arena,kapa)
VALUES('Polen', 'Katowice', 'Spodek', 11063)";
$stmt = $pdo->query($sql);
$sql ="INSERT INTO spielorte (land,stadt,arena,kapa)
VALUES('Schweden', 'Gotebörg', 'Scandinavium', 11409)";
$stmt = $pdo->query($sql);
$sql ="INSERT INTO spielorte (land,stadt,arena,kapa)
VALUES('Schweden', 'Mälmo', 'Mälmo Arena', 13000)";
$stmt = $pdo->query($sql);
echo"Die Spielorte wurden eingefügt";

?>