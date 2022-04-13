<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM 3 SOAL 1</title>
</head>

<body>

    <?php
        if (isset($_POST['submit'])) {
            $peserta = $_POST['jumlah'];
        }
    ?>

    <form action="" method="post">
        Jumlah Peserta: <input type="text" name="jumlah" value="<?php if (isset($peserta)) echo "$peserta";?>"> <br>
        <button type="submit" name="submit">Cetak</button>
    </form>
    
    <?php
    if (isset($_POST['submit'])) {
        $i = 1;
        while ($i <= $peserta) {
            if ($i % 2 == 0) {
                echo "<h2 style=color:green>Peserta ke-$i</h2>";
            } else {
                echo "<h2 style=color:red>Peserta ke-$i</h2>";
            }
            $i++;
        }
    }
    ?>
</body>
</html>