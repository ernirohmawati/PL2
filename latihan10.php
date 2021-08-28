<h1>Input Mata kuliah</h1>

<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();

// Perintah insert data ke Database
if(isset($_POST['pencet']))
{
$query=mysqli_query($con,"insert into tbl_matakuliah values(
'".$_POST['kode_mk']."',
'".$_POST['mata_kuliah']."'
)");

header('location:latihan9.php');
}
?>
<form action="" method="POST">
Kode Mata Kuliah <br>
<input type="text" name="kode_mk"><br>
Nama Mata Kuliah <br>
<input type="text" name="mata_kuliah"><br>
<br>
<input type="submit" name="pencet" value="Simpan">
<input type='button' onclick=location.href='latihan9.php' value='Batal' />
</form>