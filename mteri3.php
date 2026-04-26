<form method = "post">
    Masukkan Angka : <input type="number" name="angka">
    <input type="submit" name="kirim" value="kirim">
    </form>

    <?php
if(isset($_POST["angka"])){
$newAngka = $_POST["angka"];
for($i = 1; $i <= $newAngka; $i++){
    if($i % 2 != 0){
        echo "ganjil $i <br>";
    } else {
        echo "genap $i <br>";
    }
}

}
    ?>