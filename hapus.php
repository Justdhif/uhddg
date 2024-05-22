<?php 

include("config/app.php");

$id = (int) $_GET["id"];

if (delete_barang($id) > 0) {
    echo"<script>
            alert('Data berhasil dihapus');
            document.location.href = 'table.php';
        </script>";
} else {
    echo"<script>
            alert('Data gagal dihapus');
            document.location.href = 'table.php';
        </script>";
}