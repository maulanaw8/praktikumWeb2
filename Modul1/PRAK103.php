<html>
    <head>
        <title> PRAKTIKUM 1 SOAL 3 </title>
    </head>

    <body>
        <?php
            $celcius = 37.841;
            $reamur = 0.8 * $celcius;
            $fahrenheit = $celcius * 1.8 + 32;
            $kelvin = $celcius + 273.15;

            echo " Fahrenheit (F) = ".number_format($fahrenheit,4)."<br>";
            echo " Reamur (R) = ".number_format($reamur,4)."<br>";
            echo " Kelvin(K) = ".number_format($kelvin,4)."<br>";
        ?>
    </body>
</html>