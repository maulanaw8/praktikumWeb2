<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM 4 SOAL 3</title>
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

<?php
        $nilai= [

            [
                "nomor" => 1,
                "nama" => "Ridho", 
                "matkul" =>
                [
                    ["namaMatkul" =>"Pemrograman I", "SKS" => 2], 
                    ["namaMatkul" => "Praktikum Pemrograman I", "SKS" => 1],
                    ["namaMatkul" => "Pengantar Lingkungan Lahan Basah", "SKS" => 2], 
                    ["namaMatkul" => "Arsitektur Komputer", "SKS" => 3]
                ]
            ],

            [
                "nomor" => 2,
                "nama" => "Ratna", 
                "matkul" => 
                [
                    ["namaMatkul" =>"Basis Data I", "SKS" => 2], 
                    ["namaMatkul" => "Praktikum Basis Data I", "SKS" => 1],
                    ["namaMatkul" => "Kalkulus", "SKS" => 3]
                ]
            ],

            [
                "nomor" => 3,
                "nama" => "Tono", 
                "matkul" => 
                [
                    ["namaMatkul" => "Rekayasa Perangkat Lunak", "SKS" => 3], 
                    ["namaMatkul" => "Analisis dan Perancangan Sistem", "SKS" => 3],
                    ["namaMatkul" => "Komputasi Awan", "SKS" => 3], 
                    ["namaMatkul" => "Kecerdasan Bisnis", "SKS" => 3]
                ]
            ]

        ];

        echo "<table border='1'>";
        echo "<tr style='background-color: grey'>";
        echo "<th width='25px' height='35px'> No </th>";
        echo "<th width='100px' height='35px'> Nama </th>";
        echo "<th width='250px' height='35px'> Mata Kuliah diambil </th>";
        echo "<th width='60px' height='35px'> SKS </th>";
        echo "<th width='100px' height='35px'> Total SKS </th>";
        echo "<th width='100px' height='35px'> Keterangan </th>";
        echo "</tr>";

        for ($i=0; $i < count($nilai); $i++) {
            $nilai[$i]['jumlahSKS'] = 0;
            for ($j=0; $j < count($nilai[$i]["matkul"]); $j++) { 
                $nilai[$i]['jumlahSKS'] += $nilai[$i]["matkul"][$j]["SKS"];
            }
            if ($nilai[$i]["jumlahSKS"] < 7) {
                $nilai[$i]["keterangan"] = "Revisi KRS";
            }
            else {
                $nilai[$i]["keterangan"] = "Tidak Revisi";
            }
        }
                
        for ($i=0; $i < count($nilai); $i++) {
            for ($j=0; $j < count($nilai[$i]["matkul"]); $j++) { 
                echo "<tr>";
                if ($j == 0) {
                    echo "<td>".$nilai[$i]["nomor"]."</td>";
                    echo "<td>".$nilai[$i]["nama"]."</td>";
                    echo "<td>".$nilai[$i]["matkul"][$j]["namaMatkul"]."</td>";
                    echo "<td>".$nilai[$i]["matkul"][$j]["SKS"]."</td>";
                    echo "<td>".$nilai[$i]["jumlahSKS"]."</td>";
                    if ($nilai[$i]["jumlahSKS"] < 7){
                        echo "<td style='background-color: red'>".$nilai[$i]["keterangan"]."</td>";
                    }
                    else{
                        echo "<td style='background-color: green'>".$nilai[$i]["keterangan"]."</td>";
                    }
                }
                else {
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td>".$nilai[$i]["matkul"][$j]["namaMatkul"]."</td>";
                    echo "<td>".$nilai[$i]["matkul"][$j]["SKS"]."</td>";
                    echo "<td></td>";
                    echo "<td></td>";
                }
                echo "</tr>";
            }
        }

        echo "</table>";    

?>
    
</body>
</html>