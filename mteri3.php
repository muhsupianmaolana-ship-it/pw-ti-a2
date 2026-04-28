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


<?php
echo "<br><br>========================================================<br></br>";

function hello()
{
    echo "Hello World";
}
hello();
?>



<?php

echo "<br><br>========================================================<br></br>";

function tambah(int $a, int $b)
{
    return $a + $b;
}

function kali(int $a, int $b)
{
    return $a * $b;
}

function kurang(int $a, int $b)
{
    return $a - $b;
}

function bagi(int $a, int $b)
{
    if($b == 0) {
        return "Error: Tidak boleh dibagi 0";
    }
    return $a / $b;
}
?>

<style>
    .calculator-form {
        background-color: #46c794;

        padding: 20px;
        width: 300px;
        margin: 10px 0;
    }
    .input-group {
        margin-bottom: 15px;
    }
    input[type="number"] {
        width: 100%;
        padding: 8px;
        margin: 5px 0;
        box-sizing: border-box;
    }
    .button-group {
        display: flex;
        gap: 10px;
        margin-top: 15px;
    }
    button {
        flex: 1;
        padding: 10px;
        font-size: 16px;
        cursor: pointer;
        background-color: #064108;
        color: white;
        border: none;
        border-radius: 4px;
    }
    button:hover {
        background-color: #3cc30f;
    }
    .result {
        margin-top: 20px;
        padding: 15px;
        background-color: #034210;
        border-radius: 4px;
        font-size: 18px;
        font-weight: bold;
        color: white;
    }
</style>

<div class="calculator-form">
    <h2>Kalkulator</h2>
    <form method="post">
        <div class="input-group">
            <label>Angka Pertama:</label>
            <input type="number" name="a" required step="any">
        </div>
        
        <div class="input-group">
            <label>Angka Kedua:</label>
            <input type="number" name="b" required step="any">
        </div>
        
        <div class="button-group">
            <button type="submit" name="operasi" value="tambah">+ </button>
            <button type="submit" name="operasi" value="kurang">- </button>
            <button type="submit" name="operasi" value="kali">× </button>
            <button type="submit" name="operasi" value="bagi">÷ </button>
        </div>
    </form>

    <?php
    if(isset($_POST["operasi"])){
        $a = $_POST["a"];
        $b = $_POST["b"];
        $operasi = $_POST["operasi"];
        
        echo "<div class='result'>";
        echo "Hasil: $a ";
        
        switch($operasi){
            case 'tambah':
                echo "+ $b = " . tambah($a, $b);
                break;
            case 'kurang':
                echo "- $b = " . kurang($a, $b);
                break;
            case 'kali':
                echo "× $b = " . kali($a, $b);
                break;
            case 'bagi':
                echo "÷ $b = " . bagi($a, $b);
                break;
        }
        echo "</div>";
    }
    ?>
</div>