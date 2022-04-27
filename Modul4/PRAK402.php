<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM 4 SOAL 2</title> 
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
        $nilai= [
            [
                'nama' => "Andi",
                'NIM' => "2101001",
                'UTS' => 87,
                'UAS' => 65
            ],

            [
                'nama' => 'Budi',
                'NIM' => '2101002',
                'UTS' => 76,
                'UAS' => 79
            ],

            [
                'nama' => 'Tono',
                'NIM' => '2101003',
                'UTS' => 50,
                'UAS' => 41
            ],

            [
                'nama' => 'Jessica',
                'NIM' => '2101004',
                'UTS' => 60,
                'UAS' => 75
            ],
        ];

        for ($i=0; $i<count($nilai); $i++){
            
            $nilai[$i]['akhir'] = ($nilai[$i]['UTS'] * 0.4 ) + ($nilai[$i]['UAS'] * 0.6 );

            if($nilai[$i]['akhir'] >= 80){
                $nilai[$i]['huruf'] = "A";
            }
            else if($nilai[$i]['akhir'] >= 70 and $nilai[$i]['akhir'] < 80){
                $nilai[$i]['huruf'] = "B";
            }
            else if($nilai[$i]['akhir'] >= 60 and $nilai[$i]['akhir'] < 70){
                $nilai[$i]['huruf'] = "C";
            }
            else if($nilai[$i]['akhir'] >= 50 and $nilai[$i]['akhir'] <60 ){
                $nilai[$i]['huruf'] = "D";
            }
            else if($nilai[$i]['akhir'] < 50){
                $nilai[$i]['huruf'] = "E";
            }
        }

        echo "<table border='1'>";
        echo "<tr style='background-color: grey'>";
        echo "<th width='100px' height='25px'> Nama </th>";
        echo "<th width='100px' height='25px'> NIM </th>";
        echo "<th width='100px' height='25px'> Nilai UTS </th>";
        echo "<th width='100px' height='25px'> Nilai UAS </th>";
        echo "<th width='100px' height='25px'> Nilai Akhir </th>";
        echo "<th width='75px' height='25px'> Huruf </th>";
        echo "</tr>";

        foreach($nilai as $key){
            echo "<tr>";
            echo "<td> $key[nama] </td>";
            echo "<td> $key[NIM] </td>";
            echo "<td> $key[UTS] </td>";
            echo "<td> $key[UAS] </td>";
            echo "<td> $key[akhir] </td>";
            echo "<td> $key[huruf] </td>";
            echo "</tr>";
        }
        echo "</table>";    
    ?>

</body>
</html>