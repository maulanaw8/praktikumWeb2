<html>
    <head>
        <title> PRAKTIKUM 1 SOAL 4 </title>
        <style>
            .judul {
            font-weight: bold;
        }
        </style>
    </head>

    <body>
        <?php
            $samsung = ["Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5"];
            echo "<table border = 2>";
                echo "<tr><td class = judul> Daftar Smartphone Samsung </td> </tr>";
                echo "<tr><td>$samsung[0]</td></tr>";
                echo "<tr><td>$samsung[1]</td></tr>";
                echo "<tr><td>$samsung[2]</td></tr>";
                echo "<tr><td>$samsung[3]</td></tr>";
            echo "</table>";
        ?>
    </body>
</html>