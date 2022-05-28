<?php
    include("Koneksi.php");
    if (isset($_SESSION['nomor_member'])) {
        echo "<script>alert('Anda sudah login!');
                window.location='index.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/signin.css" rel="stylesheet">
    <title>Login</title>
</head>

<body class="text-center">
    <main class="form-signin">
        <form action="Login.php" method="post" enctype="multipart/form-data">
            <h1 class="h3 mb-3 fw-normal">Please Login</h1>

            <div class="form-floating">
                <input type="text" class="form-control" name="nomor_member" id="nomor_member" placeholder="081234567890">
                <label for="nomor_member">Nomor Member</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="password" placeholder="password">
                <label for="password">Password</label>
            </div>

            <button class="w-100 btn btn-mb btn-primary" type="submit" name="login">Login</button>
            <p class="mt-5 mb-3 text-muted">2022</p>
        </form>
</body>

</html>