<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM 2 SOAL 4</title>
</head>
<body>

    <?php
        if(isset($_POST["submit"])){
        $nilai = $_POST["nilai"];
        }
    ?>

    <form action="" method="post">
        Nilai : <input type="number" name="nilai" value="<?php if (isset($nilai)) echo "$nilai";?>"> <br>
        <button type="submit" name="submit"> Konversi </button>
    </form>

    <?php
        if (isset($_POST["submit"])) {
            if ($nilai >= 0 and $nilai <= 1000) 
            {
                if ($nilai == 0) {
                    echo "<h2> Hasil : Nol </h2>";
                }
                elseif ($nilai >= 1 and $nilai <= 9) {
                    echo "<h2> Hasil : Satuan </h2>";
                }
                elseif ($nilai >=11 and $nilai <= 19) {
                    echo "<h2> Hasil : Belasan </h2>";
                }
                elseif (($nilai >= 20 and $nilai <= 99) or $nilai == 10) {
                    echo "<h2> Hasil : Puluhan </h2>";
                }
                elseif ($nilai >= 100 and $nilai <1000){
                    echo "<h2> Hasil : Ratusan </h2>";
                }
                elseif($nilai == 1000){
                    echo "<h2> Anda menginput melebihi limit bilangan </h2>";
                }
            }
            else {
                echo "<h2> Anda menginput melebihi limit bilangan </h2>";
            }
        }
    ?>
    
</body>
</html>