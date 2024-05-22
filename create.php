<?php

include("config/app.php");
if (isset($_POST['tambah'])) {
    if (create_barang($_POST) > 0) {
        echo'<script>
                alert("Data berhasil ditambah");
                document.location.href = "login.php";
            </script>';
    } else {
        echo'<script>
                alert("Data gagal ditambah");
                document.location.href = "create.php";
            </script>';
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD PHP</title>
</head>
<body>

<div class="container mt-5">

<h1>Register</h1>
<hr class="mb-3">

<form action="" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Your Name</label>
        <input type="text" class="form-control" id="nama" name="nama" required placeholder="Your name">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Your Email</label>
        <input type="email" class="form-control" id="email" name="email" required placeholder="Your email">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Your password</label>
        <input type="password" class="form-control" id="password" name="password" required placeholder="Your password">
    </div>

    <button type="submit" name="tambah" class="btn btn-primary mt-3" style="float: right;">Submit</button>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>