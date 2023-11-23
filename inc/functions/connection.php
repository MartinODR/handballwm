<?php
//conexion a la base de datos, metodo PDO// casi siempre es localhos t

$server = "mysql:host=localhost;dbname=wm23";
$user = "root";
$pw ="";                          //Password

try{                                //para no mostrar el error publicamente try catch
$pdo = new PDO($server, $user, $pw
  //  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
    
}
catch(PDOException $php_errormsg){    //agarra el error en esa variable 
 
    echo "Fehler bei der Datenbankverbindung<br>";    //3 lineas opcionales mensaje de error 
    echo $php_errormsg;                                //echo del error agarrado 
    die();

}


?>