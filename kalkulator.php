<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>Kalkulator Sederhana</h1>
    <form method="post" action="kalkulator.php">
        Angka pertama: <input type="text" name="angka1"><br>
        Angka kedua: <input type="text" name="angka2"><br>
        Operasi: 
        <select name="operasi">
            <option value="tambah">Tambah</option>
            <option value="kurang">Kurang</option>
            <option value="kali">Kali</option>
            <option value="bagi">Bagi</option>
        </select><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["kalkulator"] == "POST") {
        $angka1 = $_POST["angka1"];
        $angka2 = $_POST["angka2"];
        $operasi = $_POST["operasi"];
        
        switch ($operasi) {
            case "tambah":
                $hasil = $angka1 + $angka2;
                break;
            case "kurang":
                $hasil = $angka1 - $angka2;
                break;
            case "kali":
                $hasil = $angka1 * $angka2;
                break;
            case "bagi":
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    echo "Tidak dapat melakukan pembagian dengan 0.";
                    exit();
                }
                break;
            default:
                echo "Operasi yang tidak valid.";
                exit();
        }

        echo "Hasil: $angka1 $operasi $angka2 = $hasil";
    }
    ?>
</body>

</html>
