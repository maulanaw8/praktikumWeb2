<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM 3 SOAL 4</title>
    <style>
        .gambar {
            width: 75px;
            height: 75px;
        }
    </style>
</head>
<body>
    
    <?php
        if (isset($_POST['nilai'])) {
            $nilai = $_POST['nilai'];
        }

        if (isset($_POST['tambah'])) {
            $nilai += 1;
        }

        if (isset($_POST['kurang'])) {
            $nilai -= 1;
        }
    ?>

    <?php
    if (empty($nilai)) : ?>
    <form action="" method="post">
        Jumlah Bintang: <input type="text" name="nilai"><br>
        <button type="submit" name="masuk">Submit</button>
    </form>

    <?php
    endif;

    if (!empty($nilai)) :
    ?>
        jumlah bintang <?= $nilai; ?>
        <br>
        <br>

        <?php
        for ($i = 0; $i < $nilai; $i++) {
            echo "<img src='star-image.png' class='gambar'>";
        }
        ?>
        

        <form action="" method="post">
            <br>
            <input type="text" name="nilai" value="<?= $nilai ?>" hidden>
            <button type="submit" name="tambah" value="tambah">tambah</button>
            <button type="submit" name="kurang" value="kurang">kurang</button>
        </form>

    <?php endif; ?>
</body>
</html>
