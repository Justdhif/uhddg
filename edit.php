<?php 

include("layout/header.php");
$id = (int)$_GET['id'];
$barang = select("SELECT * FROM users WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (update_barang($_POST) > 0) {
        echo'<script>
                alert("Data berhasil diubah");
                document.location.href = "table.php";
            </script>';
    } else {
        echo'<script>
                alert("Data gagal diubah");
                document.location.href = "table.php";
            </script>';
    }
}

?>

<div class="container mt-5">

<h1>Edit</h1>
<hr class="mb-3">

<form action="" method="post">
    <input type="hidden" name="id" value="<?= $barang['id'] ?>">
    <div class="mb-3">
        <label for="username" class="form-label">Your Name</label>
        <input type="text" class="form-control" id="username" name="username" required value="<?= $barang['username'] ?>" placeholder="your name">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Your Email</label>
        <input type="email" class="form-control" id="email" name="email" required value="<?= $barang['email'] ?>" placeholder="your email">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Your password</label>
        <input type="password" class="form-control" id="password" name="password" required value="<?= $barang['password'] ?>" placeholder="your password">
    </div>

    <button type="submit" name="ubah" class="btn btn-primary mt-3" style="float: right;">Submit</button>
</form>
</div>

<?php include("layout/footer.php"); ?>