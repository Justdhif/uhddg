<?php

include("config/app.php");
$data = select("SELECT * FROM users ORDER BY id DESC"); 

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>CRUD PHP</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
        }

        .content-data {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            width: 100%;
            gap: 20px;

            & p {
                font-weight: 700;
            }

            & img {
                width: 70px;
                height: 70px;
                border-radius: 100%;
                object-fit: cover;
            }

            & .test {
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 20px;

                & .nama {
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: flex-start;


                    & h3 {
                        font-size: 20px;
                        font-weight: 700;
                    }

                    & p  {
                        font-size: 13px;
                        font-weight: 500;
                    }
                }
            }

                & .ct {
                    display: flex;
                    justify-content: center;
                    align-items: center;


                    & a {
                        font-size: 20px;
                        color: #006769;
                        margin-left: 20px;

                    & .fa-trash {
                        color: red;
                    }

                }
            }
        }

    </style>
</head>
<body>

<div class="container mt-5">

<h1>Data User</h1>
<hr>
<a href="home.php" class="btn btn-primary mb-4">Back</a>

        <?php $no = 1; ?>
        <?php foreach( $data as $table ) : ?>
            <div class="content-data">
                <div class="test">
                    <p><?= $no++; ?></p>
                    <img src="img/bg.jpg" alt="">
                    <div class="nama">
                        <h3><?= $table['username'] ?></h3>
                        <p><?= $table['email'] ?></p>
                    </div>
                </div>
                <div class="ct">
                    <a href="hapus.php?id=<?= $table['id'] ?>" onclick="return confirm('Yakin mau dihapus?');"><i class="fa-solid fa-trash"></i></a>
                    <a href="edit.php?id=<?= $table['id']; ?>"><i class="fa-solid fa-pencil"></i></a>
                </div>
            </div>
                    
        <?php endforeach; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>