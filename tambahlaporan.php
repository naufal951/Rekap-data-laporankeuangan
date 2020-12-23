<?php 
include('koneksi.php');
if (isset($_POST['simpan'])){
	$keterangan_lap = $_POST['keterangan_lap'];
	$query=mysqli_query($db,"INSERT INTO laporan VALUES(NULL,'$keterangan_lap') ");
		echo "
		<script>
		alert('Data Berhasil Ditambah')
		document.location.href='index.php?halaman=laporan'
		</script>";
	}//else {
		//echo "
		//<script>
		//alert('Data Gagal Ditambah')
		//</script>";
	//}
?>
<h2>TAMBAH LAPORAN KEUANGAN BULANAN</h2>
<hr>
<center>
<form action="" method="post">
	<div class="input-group">
		<span>MASUKAN KETERANGAN</span>
		<input type="text" name="keterangan_lap" class="form-control" required="">
	</div>
	<br>
	<input type="submit" name="simpan" class="btn btn-primary" required="">
</form>
</center>