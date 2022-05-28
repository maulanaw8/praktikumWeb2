<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data Member</title>
</head>
<body class="p-3">
    <?php
    require('./Model.php');
    if (isset($_GET['id_member'])) {
        deleteMember($_GET['id_member']);
    }
    ?>
    <h2><center>Data Member</center></h2>
    <center><a href="FormMember.php"><button class="btn btn-warning mb-1" >Tambah Data Member</button></a></center>
    <a href="index.php"><button class="btn btn-dark mb-4">Kembali</button></a>
    <table class="table table-striped table-dark"> 
    <thead>
        <tr>
            <th>ID Member</th>
            <th>Nama Member</th>
            <th>Nomor Member</th>
            <th>Alamat Member</th>
            <th>Tanggal Mendaftar</th>
            <th>Tanggal Terakhir Bayar</th>
            <th>Aksi</th>
        </tr>
    </thead>
        <?php readData("member") ?>
    </table>
</body>
</html>