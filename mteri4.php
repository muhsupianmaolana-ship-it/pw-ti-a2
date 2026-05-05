<form action"" method="post">
    Username : <input type="text" name="Username"><br><br>
    pasword : <input type="password" name="password"><br><br>
    nama : <input type="text" name="nama"><br><br>
    email : <input type="text" name="email"><br><br>
    <input type="submit" name="kirim" value="login"><br><br>
</form>

<?php
include "koneksi.php";
if(isset ($_POST["kirim"])){   
    $Username = $_POST['Username'];
    $pasword = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $query = "INSERT INTO user (Username, pasword, nama, email) VALUES ('$Username', '$pasword', '$nama', '$email')";
    if(mysqli_query($koneksi, $query)){
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . "Data gagal ditambahkan";
    }
}