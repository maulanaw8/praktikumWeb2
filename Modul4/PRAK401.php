<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM 4 SOAL 1</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 1px solid #000;
            padding: 5px;
        }
        th{
            border: 1px solid #000;
            padding: 5px;
        }
    </style>  
</head>
<body>
    <?php
        if(isset($_POST["submit"])){
            $panjang = $_POST["panjang"];
            $lebar = $_POST["lebar"];
            $nilai = $_POST["nilai"];
        }
    ?>

    <form action="" method="post">
        Panjang : <input type="text" name="panjang" value="<?php if (isset($panjang)) echo "$panjang";?>"> <br>
        Lebar : <input type="text" name="lebar" value="<?php if (isset($lebar)) echo "$lebar";?>"> <br>
        Nilai : <input type="text" name="nilai" value="<?php if (isset($nilai)) echo "$nilai";?>"><br>
        <button type="submit" name="submit"> Cetak </button>
    </form>

    <?php
        if(isset($_POST["submit"])){
            $panjangNilai = $panjang*$lebar;
            $hasil = explode(" ", $nilai);
            echo "<br>";

            if($panjangNilai != count($hasil)){
                echo "Panjang nilai tidak sesuai dengan ukuran matriks";
            }

            else{   
                echo "<table border='1' width='150px' height='150px'>";
                for($i=0; $i<$panjangNilai; $i++){
                    if($i % $panjang == 0){
                        echo "<tr>";
                    }

                    echo "<td>".$hasil[$i]."</td>";

                    if( ($i+1) % $panjang == 0){
                        echo "</tr>";
                    }

                }
                echo "</table>";
            }
        }
    ?>

</body>
</html>