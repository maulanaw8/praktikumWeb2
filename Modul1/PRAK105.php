<html>
    <head>
        <title> PRAKTIKUM 1 SOAL 5 </title>
    <style>
        .judul {
        background-color: red;
        font-weight: bold;
        font-size: x-large;
        padding-top: 20;
        padding-bottom: 20;
    }
    </style>
    </head>

    <body>
    <?php
        $samsung = ["SGS22"=>"Samsung Galaxy S22", "SGS22P"=>"Samsung Galaxy S22+", "SGA03"=>"Samsung Galaxy A03", "SGXC5"=>"Samsung Galaxy Xcover 5"];
        echo "<table border = 1>";
            echo "<tr><td class = judul> Daftar Smartphone Samsung </td></tr> ";
            echo "<tr><td>$samsung[SGS22]</td></tr>";
            echo "<tr><td>$samsung[SGS22P]</td></tr>";
            echo "<tr><td>$samsung[SGA03]</td></tr>";
            echo "<tr><td>$samsung[SGXC5]</td></tr>";
        echo "</table>";
    ?>
    </body>
</html>