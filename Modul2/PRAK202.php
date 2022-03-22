<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM 2 SOAL 2</title>

    <style>
    .error {
        color: red;
    }
    </style>

</head>
<body>
    <?php
    $nama = "";
    $nim = "";
    $jenisKelamin = "";
    $errorNama = "";
    $errorNim = "";
    $errorJenisKelamin = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["nama"])) 
        {
            $errorNama = "Nama tidak boleh kosong";
        } 
        else
        {
            $nama = $_POST["nama"];
        }
        
        if (empty($_POST["nim"]))
        {
            $errorNim = "NIM tidak boleh kosong";
        }
        else
        {
            $nim = $_POST["nim"];
        }

        if (empty($_POST["jenisKelamin"]))
        {
            $errorJenisKelamin = "Jenis kelamin tidak boleh kosong";
        }
        else 
        {
            $jenisKelamin = $_POST["jenisKelamin"];
        }
    }
    ?>

    <form method="post" name="nama">
        Nama :  <input type="text" name="nama" value="<?php echo $nama ?>"> <span class="error"> * <?php echo $errorNama ?> </span><br>
        NIM: <input type="text" name="nim" value="<?php echo $nim ?>"><span class="error">* <?php echo $errorNim ?> </span><br>
        Jenis Kelamin: <span class="error">* <?php echo $errorJenisKelamin ?> </span><br>
        <input type="radio" name="jenisKelamin" value="Laki-laki" <?php if (isset($jenisKelamin) and $jenisKelamin == "Laki-laki") echo "checked";?>>Laki-Laki<br>
        <input type="radio" name="jenisKelamin" value="Perempuan" <?php if (isset($jenisKelamin) and $jenisKelamin == "Perempuan") echo "checked";?>>Perempuan<br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if(($nama != "") or ($nim != "") or ($jenisKelamin != "")){
        echo "<h2> Output : </h2>";
        echo $nama . "<br>";
        echo $nim . "<br>";
        echo $jenisKelamin . "<br>";
    }
    ?>
</html>