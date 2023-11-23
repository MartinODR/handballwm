<?php

    include "../inc/functions/connection.php";

    //esto lo envia a la base de datos 
    $sql = "CREATE TABLE spielorte (
        id_spielorte INTEGER(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,     
        land VARCHAR(100),
        stadt VARCHAR(100),
        arena VARCHAR(100),
        kapa INTEGER(11)


    )";   //data definition lenguage //prüfung relevant //no poner coma en ultimo dato 

     if( $stmt = $pdo->query($sql)){
        echo "Die Tabelle Spielorte wurde erfolgreich angelegt";

        //Drei beispielorte eintragen 
        $sql ="INSERT INTO spielorte (land,stadt,arena,kapa)
               VALUES('Polen', 'Krakow', 'Tauron', 15030)";
        $stmt = $pdo->query($sql);
        $sql ="INSERT INTO spielorte (land,stadt,arena,kapa)
               VALUES('Polen', 'Danzig', 'Ergo', 11409)";
        $stmt = $pdo->query($sql);
        $sql ="INSERT INTO spielorte (land,stadt,arena,kapa)
               VALUES('Schweden', 'Krakow', 'Tauron', 19000)";
        $stmt = $pdo->query($sql);
    }

?>