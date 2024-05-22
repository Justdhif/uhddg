<?php

// fungsi menampilkan (read)
function select($data) {
    global $conn;

    $result = mysqli_query($conn, $data);
    $rows = [ ];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;

    }

    return $rows;
}

// fungsi menambah (create)
function create_barang($post) {
    global $conn;

    $nama = $post["nama"];
    $email = $post["email"];
    $password = $post["password"];

    $query = "INSERT INTO `usr` VALUES(null, '$nama', '$email', '$password')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// fungsi ubah (update)
function update_barang($post) {
    global $conn;

    $id = $post["id"];
    $nama = $post["username"];
    $email = $post["email"];
    $password = $post["password"];

    $query = "UPDATE users SET username = '$nama', email = '$email', password = '$password' WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// fungsi menghapus barang
function delete_barang($id) {
    global $conn;

    $query = "DELETE FROM users WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

require 'db.php'; 
if(isset($_POST["submit"])){ 
    $usernameemail = $_POST["usernameemail"]; 
    $password = $_POST["password"]; 
    $result = mysqli_query($conn, "SELECT * FROM `usr` WHERE username = '$usernameemail' OR email = '$usernameemail'"); 
    $row = mysqli_fetch_assoc($result); 
    if(mysqli_num_rows($result) > 0){ 
        if($password == $row["password"]){ 
        $_SESSION["login"] = true; 
        $_SESSION["id"] =$row ["id"]; 
        header("location: table.php"); 
    } 
    else{ 
        echo 
        "<script> alert ('Wrong Password'); </script>"; 
    } 
 
} 
 
else{ 
    echo 
    "<script> alert ('User not registered'); </script>"; 
} 
} 

