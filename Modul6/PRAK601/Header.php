<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/headers.css" rel="stylesheet">
    <title>Header</title>
</head>

<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-3 text-white">Home</a></li>
                    <li><a href="Buku.php" class="nav-link px-3 text-white">Data Buku</a></li>
                    <li><a href="Member.php" class="nav-link px-3 text-white">Data Member</a></li>
                    <li><a href="Peminjaman.php" class="nav-link px-3 text-white">Data Peminjaman</a></li>
                </ul>

                <div class="text-end">
                    <?php
                    if (isset($_SESSION['nomor_member']) == false) {
                        echo "<a href=\"FormLogin.php\"> <button type=\"button\" class=\"btn btn-outline-light me-2\">Login</button></a>";
                    } else {
                        echo "<a href=\"Logout.php\"> <button type=\"button\" class=\"btn btn-outline-light me-2\">Logout</button></a>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>

</body>

</html>