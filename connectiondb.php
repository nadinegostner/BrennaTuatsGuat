<?php
$db = mysqli_connect("localhost", "brennatuatsguat", "Heisa4Abfackeln", "brennatuatsguat");
if(!$db)
{
    exit("Verbindungsfehler: ".mysqli_connect_error());
}
?>