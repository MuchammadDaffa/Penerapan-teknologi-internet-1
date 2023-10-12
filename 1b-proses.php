<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Coba deret</title>
</head>
<body>
	<?php
    for($i=$_POST["awal"];$i<=$_POST["akhir"];$i++)
		{
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
		}
    ?>
</body>
</html>