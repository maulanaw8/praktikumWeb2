<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Peminjaman</title>
</head>
<body class="p-3">
    <?php
        require('./Model.php');
        if (isset($_GET['id_peminjaman'])) {
            deletePeminjaman($_GET['id_peminjaman']);
        }
    ?>
    <h2><center>Data Peminjaman</center></h2>
    <center><a href="FormPeminjaman.php"><button class="btn btn-warning mb-1">Tambah Data Peminjaman</button></a></center>
    <a href="index.php"><button class="btn btn-dark mb-4">Kembali</button></a>
    <table class="table table-striped table-dark">
    <thead> 
        <tr>
            <th>ID Peminjaman</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
    </thead>
        <?php readData("peminjaman") ?>
    </table>
</body>
</html>