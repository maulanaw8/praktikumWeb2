<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data Member</title>
</head>

<body>
    <?php
    require('./Model.php');
    if (isset($_SESSION['nomor_member']) == false) {
        header('Location: ErrorPage.php');
    }

    if (isset($_GET['id_member'])) {
        deleteMember($_GET['id_member']);
    }
    ?>
    <div class="px-4">
        <h3 class="pt-4">Data Member</h3>
        <a href='FormMember.php'> <button type="button" class="btn btn-secondary mb-4">Tambah Data</button></a>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID Member</th>
                    <th>Nama Member</th>
                    <th>Nomor Member</th>
                    <th>Password</th>
                    <th>Alamat Member</th>
                    <th>Tanggal Mendaftar</th>
                    <th>Tanggal Terakhir Bayar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php readData("member") ?>
        </table>
    </div>
</body>

</html>