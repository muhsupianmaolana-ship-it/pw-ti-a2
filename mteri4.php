<?php
include "koneksi.php";

function hapusData($koneksi){
    if(isset($_GET['aksi']) && $_GET['aksi'] == 'hapus' && isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM user WHERE ID='$id'";
        if(mysqli_query($koneksi, $query)){
            echo "Data berhasil dihapus<br>";
        } else {
            echo "Error: Data gagal dihapus - " . mysqli_error($koneksi) . "<br>";
        }
    }
}

function editData($koneksi){
    if(isset($_GET['aksi']) && $_GET['aksi'] == 'edit' && isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM user WHERE ID='$id'";
        $result = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($result);
        echo "
        <h3>Edit Data</h3>
        <form action='' method='post'>
            <input type='hidden' name='id_edit' value='" . $row['ID'] . "'>
            ID : <input type='text' name='ID' value='" . $row['ID'] . "' readonly><br><br>
            Username : <input type='text' name='Username' value='" . $row['Username'] . "'><br><br>
            Pasword  : <input type='password' name='Pasword' value='" . $row['Pasword'] . "'><br><br>
            nama     : <input type='text' name='nama' value='" . $row['nama'] . "'><br><br>
            email    : <input type='text' name='email' value='" . $row['email'] . "'><br><br>
            <input type='submit' name='simpan_edit' value='Simpan Edit'><br><br>
        </form>";
    }

    if(isset($_POST['simpan_edit'])){
        $id       = $_POST['id_edit'];
        $Username = $_POST['Username'];
        $Pasword  = $_POST['Pasword'];
        $nama     = $_POST['nama'];
        $email    = $_POST['email'];

        $query = "UPDATE user SET Username='$Username', Pasword='$Pasword', nama='$nama', email='$email' WHERE ID='$id'";
        if(mysqli_query($koneksi, $query)){
            echo "Data berhasil diupdate<br>";
        } else {
            echo "Error: Data gagal diupdate - " . mysqli_error($koneksi) . "<br>";
        }
    }
}

hapusData($koneksi);
editData($koneksi);

// Proses INSERT - PERBAIKAN DI SINI
if(isset($_POST["kirim"])){   
    // Pastikan semua field ada sebelum digunakan
    if(isset($_POST['ID']) && isset($_POST['Username']) && isset($_POST['Pasword']) && isset($_POST['nama']) && isset($_POST['email'])){
        
        $ID       = $_POST['ID'];
        $Username = $_POST['Username'];
        $Pasword  = $_POST['Pasword'];
        $nama     = $_POST['nama'];
        $email    = $_POST['email'];

        // Cek apakah ID sudah ada
        $cek_query = "SELECT * FROM user WHERE ID='$ID'";
        $cek_result = mysqli_query($koneksi, $cek_query);
        
        if(mysqli_num_rows($cek_result) > 0){
            echo "<div style='color: red;'>Error: ID sudah ada! Gunakan ID yang lain.<br></div>";
        } else {
            $query = "INSERT INTO user (ID, Username, Pasword, nama, email) VALUES ('$ID', '$Username', '$Pasword', '$nama', '$email')";
            if(mysqli_query($koneksi, $query)){
                echo "<div style='color: green;'>Data berhasil disimpan<br></div>";
            } else {
                echo "Error: Data gagal ditambahkan<br>";
                echo "MySQL Error: " . mysqli_error($koneksi) . "<br>";
            }
        }
    }
}
?>

<form action="" method="post">
    ID       : <input type="text" name="ID" required><br><br>
    Username : <input type="text" name="Username" required><br><br>
    pasword  : <input type="password" name="Pasword" required><br><br>
    nama     : <input type="text" name="nama" required><br><br>
    email    : <input type="text" name="email" required><br><br>
    <input type="submit" name="kirim" value="Simpan"><br><br>
</form>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Pasword</th>
        <th>nama</th>
        <th>email</th>
        <th>Aksi</th>
    </tr>

    <?php
    $query  = "SELECT * FROM user ORDER BY ID ASC";
    $result = mysqli_query($koneksi, $query);
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['ID'];
        echo "<tr>";
        echo "<td>" . $id . "</td>";
        echo "<td>" . $row['Username'] . "</td>";
        echo "<td>" . $row['Pasword'] . "</td>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>
                <a href='mteri4.php?aksi=edit&id=$id'>edit</a> | 
                <a href='mteri4.php?aksi=hapus&id=$id' onclick='return confirm(\"Yakin hapus?\")'>hapus</a>
              </td>";
        echo "</tr>";
    }
    ?>
</table>