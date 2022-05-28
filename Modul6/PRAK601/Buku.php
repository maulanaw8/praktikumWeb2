<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data Buku</title>
</head>

<body>
    <?php
    require('./Model.php');
    if (isset($_SESSION['nomor_member']) == false) {
        header('Location: ErrorPage.php');
    }

    if (isset($_GET['id_buku'])) {
        deleteBuku($_GET['id_buku']);
    }
    ?>
    <div class="px-4">
        <h3 class="pt-4">Data Buku</h3>
        <a href='FormBuku.php'> <button type="button" class="btn btn-secondary mb-4">Tambah Data</button></a>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php readData("buku") ?>
        </table>
    </div>
</body>

</html>