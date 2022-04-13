<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM 3 SOAL 2</title>
    <style>
        .gambar {
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>

    <?php
        if (isset($_POST['submit'])) {
            $tinggi = $_POST['tinggi'];
            $url = $_POST['url'];
        }
    ?>

    <form action="" method="post">
        Tinggi : <input type="text" name="tinggi" value="<?php if (isset($tinggi)) echo "$tinggi";?>"> <br>
        Alamat Gambar : <input type="text" name="url" value="<?php if (isset($url)) echo "$url";?>"> <br>
        <button type="submit" name="submit">Cetak</button>
    </form>

    <?php
        echo "<br>";
        if (isset($_POST['submit'])) {
        $a = 1;
        while ($a <= $tinggi) {
            $b = 1;
            while ($b < $a) {
                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                $b++;
            }
            $c = $tinggi;
            while ($c >= $a) {
                echo "<img src='$url'class='gambar'>";
                $c--;
            }
            echo '<br>';
            $a++;
        }
        }

    ?>
</body>
</body>
</html>