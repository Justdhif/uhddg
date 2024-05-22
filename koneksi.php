<?php
    $koneksi = new mysqli (
        "localhost",
        "root",
        "",
        "db_sekolah"
    );

    if ($koneksi -> connect_error) {
        echo $koneksi -> error;
    } else {
    }