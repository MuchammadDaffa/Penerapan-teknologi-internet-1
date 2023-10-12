<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FORM INPUT</title>
</head>
	
<body>
	<form method="post" action="1b-proses.php">
    Awal : <input type="text" name="angka1" /><br />
    Akhir : <input type="text" name="angka2" /><br />
    <select name="operasi">
            <option value="tambah">Tambah</option>
            <option value="kurang">Kurang</option>
            <option value="kali">Kali</option>
            <option value="bagi">Bagi</option>
        </select><br>
    <input type="submit" value="Hitung" />
    <input type="reset" value="Reset" />
    </form>          	
</body>
</html>