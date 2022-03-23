<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM 2 SOAL 1</title>
</head>
<body>
    <?php
        if(isset($_POST["urutkan"])){
        $nama1=$_POST["nama1"];
        $nama2=$_POST["nama2"];
        $nama3=$_POST["nama3"];
    }
    ?>

    <form actions="" method="post">
        Nama : 1 <input type="text" name="nama1" value="<?php if (isset($nama1)) echo "$nama1";?>"> <br>
        Nama : 2 <input type="text" name="nama2" value="<?php if (isset($nama2)) echo "$nama2";?>"> <br>
        Nama : 3 <input type="text" name="nama3" value="<?php if (isset($nama3)) echo "$nama3";?>"> <br>
        <button type="submit" name="urutkan"> urutkan </button>
    </form>

    <?php
        if(isset($_POST["urutkan"])){
            echo "<h2>Output : <br></h2>";

            if(($nama1 < $nama2) && ($nama1 < $nama3))
            {
                if($nama2<$nama3)
                {
                    echo "$nama1 <br> $nama2 <br> $nama3";
                }
                else
                {
                    echo "$nama1 <br> $nama3 <br> $nama2";
                }
            }

            else if(($nama2 < $nama1) && ($nama2 < $nama3))
            {
                if($nama1<$nama3)
                {
                    echo "$nama2 <br> $nama1 <br> $nama3";
                }
                else 
                {
                    echo "$nama2 <br> $nama3 <br> $nama1";
                }
            }

            else if(($nama3 < $nama1) && ($nama3 < $nama2))
            {
                if($nama1<$nama2)
                {
                    echo "$nama3 <br> $nama1 <br> $nama2";
                }
                else 
                {
                    echo "$nama3 <br> $nama2 <br> $nama1";
                }
            }
        }
    ?>
</body>
</html>