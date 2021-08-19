<h1>Tambah Mahasiswa</h2>
<a href="latihan1.php"><span><= Kembali</span></a>
<br></br>
<?php
    include 'koneksi.php';
    $db     = new Database();
    $con    = $db->Connect();
    if(isset($_POST['proses']))
    {
    
    $query = mysqli_query($con,"INSERT INTO tbl_mahasiswa ( nama, npm) values('".$_POST['nama']."','".$_POST['npm']."')");
    echo "<script>alert('Data Berhasil Disimpan')('location:latihan1.php');</script>";
    }
?>
<form action="" method="POST">
    <input type="text" name="nama">
    <input type="text" name="npm">
    <input type="submit" name="proses" value="Simpan">
</form> 