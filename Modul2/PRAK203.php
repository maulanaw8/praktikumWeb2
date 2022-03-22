<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM 2 SOAL 3</title>
</head>
<body>
    <?php
        error_reporting(0);
        $nilai=$_POST["nilai"];
        $suhuAwal=$_POST["suhuAwal"];
        $suhuKonversi=$_POST["suhuKonversi"];
    ?>

    <form action="" method="post">
        Nilai : <input type="text" name="nilai" value="<?php if (isset($nilai)) echo $nilai ?>"> <br>
        Dari: <br>
        <input type="radio" name="suhuAwal" <?php if (isset($suhuAwal) && $suhuAwal == "Celcius") echo "checked"; ?> value="Celcius"> Celcius <br>
        <input type="radio" name="suhuAwal" <?php if (isset($suhuAwal) && $suhuAwal== "Fahrenheit") echo "checked"; ?> value="Fahrenheit"> Fahrenheit <br>
        <input type="radio" name="suhuAwal" <?php if (isset($suhuAwal) && $suhuAwal == "Rheamur") echo "checked"; ?> value="Rheamur"> Rheamur <br>
        <input type="radio" name="suhuAwal" <?php if (isset($suhuAwal) && $suhuAwal == "Kelvin") echo "checked"; ?> value="Kelvin"> Kelvin <br>

        Ke : <br>
        <input type="radio" name="suhuKonversi" <?php if (isset($suhuKonversi) && $suhuKonversi == "Celcius") echo "checked"; ?> value="Celcius"> Celcius <br>
        <input type="radio" name="suhuKonversi" <?php if (isset($suhuKonversi) && $suhuKonversi== "Fahrenheit") echo "checked"; ?> value="Fahrenheit"> Fahrenheit <br>
        <input type="radio" name="suhuKonversi" <?php if (isset($suhuKonversi) && $suhuKonversi == "Rheamur") echo "checked"; ?> value="Rheamur"> Rheamur <br>
        <input type="radio" name="suhuKonversi" <?php if (isset($suhuKonversi) && $suhuKonversi == "Kelvin") echo "checked"; ?> value="Kelvin"> Kelvin <br>

        <button type="submit" name="submit"> Konversi </button>
    </form>

    <?php     
        if(isset($_POST["submit"])){
        //Celcius
        if(($suhuAwal=="Celcius") and ($suhuKonversi=="Celcius")){
            $hasilKonversi = $nilai;
            echo "<h2> Hasil Konversi: " . $hasilKonversi . "°C</h2>";
        }
        elseif(($suhuAwal=="Celcius") and ($suhuKonversi=="Fahrenheit")){
            $hasilKonversi = $nilai * 1.8 + 32;
            echo "<h2> Hasil Konversi: " . $hasilKonversi . "°F</h2>";
        }
        elseif(($suhuAwal=="Celcius") and ($suhuKonversi=="Rheamur")){
            $hasilKonversi = $nilai * 0.8;
            echo "<h2> Hasil Konversi: " . $hasilKonversi . "°R</h2>";
        }
        elseif(($suhuAwal=="Celcius") and ($suhuKonversi=="Kelvin")){
            $hasilKonversi = $nilai + 273;
            echo "<h2> Hasil Konversi: " . $hasilKonversi . "°K</h2>";
        }

        //Fahrenheit
        elseif(($suhuAwal=="Fahrenheit") and ($suhuKonversi=="Celcius")){
            $hasilKonversi = ($nilai- 32) * 5 / 9;
            echo "<h2> Hasil Konversi: " . $hasilKonversi . "°C</h2>";
        }
        elseif(($suhuAwal=="Fahrenheit") and ($suhuKonversi=="Fahrenheit")){
            $hasilKonversi = $nilai;
            echo "<h2> Hasil Konversi: " . $hasilKonversi . "℉</h2>";
        }
        elseif(($suhuAwal=="Fahrenheit") and ($suhuKonversi=="Rheamur")){
            $hasilKonversi = ($nilai - 32) * 0.44444;
            echo "<h2> Hasil Konversi: " . $hasilKonversi . "°R</h2>";
        }
        elseif(($suhuAwal=="Fahrenheit") and ($suhuKonversi=="Kelvin")){
            $hasilKonversi = ($nilai - 32) * 5 / 9 + 273;
            echo "<h2> Hasil Konversi: " . $hasilKonversi . "°K</h2>";
        }

        //Rheamur
        elseif(($suhuAwal=="Rheamur") and ($suhuKonversi=="Celcius")){
            $hasilKonversi = $nilai  / 0.8;
            echo "<h2> Hasil Konversi: " . $hasilKonversi . "°C</h2>";
        }
        elseif(($suhuAwal=="Rheamur") and ($suhuKonversi=="Fahrenheit")){
            $hasilKonversi = $nilai * 2.25 + 32;
            echo "<h2> Hasil Konversi: " . $hasilKonversi . "℉</h2>";
        }
        elseif(($suhuAwal=="Rheamur") and ($suhuKonversi=="Rheamur")){
            $hasilKonversi = $nilai;
            echo "<h2> Hasil Konversi: " . $hasilKonversi . "°R</h2>";
        }
        elseif(($suhuAwal=="Rheamur") and ($suhuKonversi=="Kelvin")){
            $hasilKonversi = ($nilai / 0.8) + 273;
            echo "<h2> Hasil Konversi: " . $hasilKonversi . "°K</h2>";
        }

        //Kelvin
        elseif(($suhuAwal=="Kelvin") and ($suhuKonversi=="Celcius")){
            $hasilKonversi = $nilai - 273;
            echo "<h2> Hasil Konversi: " . $hasilKonversi . "°C</h2>";
        }
        elseif(($suhuAwal=="Kelvin") and ($suhuKonversi=="Fahrenheit")){
            $hasilKonversi = ($nilai- 273) * 9 / 5 + 32;
            echo "<h2> Hasil Konversi: " . $hasilKonversi . "℉</h2>";
        }
        elseif(($suhuAwal=="Kelvin") and ($suhuKonversi=="Rheamur")){
            $hasilKonversi = ($nilai - 273) * 4 / 5;
            echo "<h2> Hasil Konversi: " . $hasilKonversi . "°R</h2>";
        }
        elseif(($suhuAwal=="Kelvin") and ($suhuKonversi=="Kelvin")){
            $hasilKonversi = $nilai;
            echo "<h2> Hasil Konversi: " .  $hasilKonversi . "°K</h2>";
        }
        else {
            echo "Invalid";
        }
    }

    ?>

</body>
</html>