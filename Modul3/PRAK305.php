<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM 3 SOAL 5</title>
</head>
<body>

    <form action="" method="post">
        <input type="text" name="input">
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $kata = $_POST['input'];
        $jumlahKata = strlen($kata);
        $arrayKata = str_split($kata);

        echo "<h2>Input:</h2>";
        echo $kata;
        echo "<h2>Output:</h2>";
        
        for($x=0; $x <$jumlahKata; $x++){
            for ($i = 0; $i < $jumlahKata; $i++) {
                if ($i == 0) {
                    echo strtoupper($arrayKata[$x]);
                } else {
                    echo strtolower($arrayKata[$x]);
                }
            }
        }
    }
    ?>
</body>
</html>