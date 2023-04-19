<?php
$mdb = mysqli_connect($servername, $username, $password, $dbname);
    
    if (!$mdb) {
      die("Nie udało się połączyć: " . mysqli_connect_error());
    }
?>