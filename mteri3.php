<form method="post">
    Masukkan Angka : <input type="number" name="angka">
    <input type="submit" name="kirim" value="kirim">
</form>

<?php
function cekAngkaGanjilGenap($angka) {
    for($i = 1; $i <= $angka; $i++){
        if($i % 2 != 0){
            echo "ganjil $i <br>";
        } else {
            echo "genap $i <br>";
        }
    }
}

// Memanggil function
if(isset($_POST["angka"])){
    $newAngka = $_POST["angka"];
    cekAngkaGanjilGenap($newAngka);
}
?>