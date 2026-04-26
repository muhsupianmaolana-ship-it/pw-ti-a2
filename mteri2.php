<form method = "post">
    Masukkan Angka : <input type="number" name="angka"><br>
    <input type="submit" value="kirim">
</form>

<?php
if(isset($_POST['angka'])){
    $data = $_POST['angka'];
    for($i = 1; $i <= $data; $i++){
        echo "angka $i <br>";
    }
}
?>

//looping while dan do-while

<?php 
echo "<br> *ini perulangan while* ";

if (isset($_POST['angka'])){
    $data = $_POST['angka'];
    $i = 1;
    while($i <= $data){
        echo "angka $i <br>";
        $i++;
    }
}

?>

//looping do-while

<?php
echo "<br> ini perulangan do while";

if (isset($_POST["angka"])) {
    $data = $_POST["angka"];
    $i = 1;

    do {
        echo "angka $i<br>";
        $i++;
    } while ($i <= $data);
}
?>