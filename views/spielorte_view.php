<?php 

$title="Spielorte der WM 2023 Culo";

include "header.php";
?>
    <h1>Spielorte bei der Handball WM 2023</h1>
    <!--Ab hier Fehlermeldung-->
    <?php
    if(!empty($meldung_del)){
        echo "<p class=\"success\">$meldung_del</p>";
    }
?>

<!-- Ab hier soll ein neuer Spielort eingegeben werden können -->
        <!-- Ihr habt eigentlich alle Mittel, das selbst zu tun:
            - erfassen von Daten
            - Verschicken der Daten an den Controller
            - im Controller prüfen, ob Daten eingetragen wurden (der Button gedrückt wurde)
            - die entsprechenden Daten auslesen
            - wenn etwas nicht eingegeben wurde, dann eine Fehlermeldung in einem 
                Array speichern - alle Fehlermeldungen werden ggf. in der view ausgegeben.
            - wenn alles vorhanden ist, dann den Datensatz speicher über INSERT
            - Erfolgreiches speichern verkünden     
        -->

        <!--Ab hier Ausgabe aller Spielorte in Tabellenform-->
    <table>
        <tr>                <!--table row-->
            <th>Land</th>     <!-- table head-->      
            <th>Stadt</th>          
            <th>Stadium</th>         
            <th>Plätze</th> 
            <th>Löschen</th>          
        </tr>
    <?php
    foreach($spielorte as $spielort){
    ?>
        <tr>
            <td><?php echo $spielort["land"] ?></td>  <!--table date-->
            <td><?php echo $spielort["stadt"]  ?></td>
            <td><?php echo $spielort["arena"]  ?></td>
            <td><?php echo $spielort["kapa"]  ?></td>
            <td><a href="../controller/spielorte.php?del=<?php echo $spielort['id_spielorte']?>">Löschen</a></td>
        </tr>
<?php 
} 
?>

    </table>

<?php
//Die Fußzeile wird eingelesen
include "footer.php";
?>