<?php
function koneksi()
{
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=perpustakaan', "root", "");
        $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      }
      catch (PDOException $e) {
        print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
        die();
      }
    return $dbh;
}
?>