<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM 3 SOAL 3</title>
    <style>
        .gambar {
            width: 18px;
            height: 18px;
        }
    </style>
</head>

<body>

    <?php
        if (isset($_POST['submit'])) {
            $bawah = $_POST['bawah'];
            $atas = $_POST['atas'];
        }
    ?>

    <form action="" method="post">
        Batas Bawah: <input type="text" name="bawah" value="<?php if (isset($bawah)) echo "$bawah";?>"><br>
        Batas Atas: <input type="text" name="atas" value="<?php if (isset($atas)) echo "$atas";?>"><br>
        <button type="submit" name="submit">Cetak</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        echo "<br>";
        do {
            if (($bawah + 7) % 5 == 0) {
                echo "<img src='star-image.png' class='gambar'>";
            } else {
                echo "$bawah ";
            }
            $bawah++;
        } while ($bawah <= $atas);
    }

    ?>
</body>
</html>