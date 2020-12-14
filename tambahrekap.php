<?php
include('koneksi.php');
if (isset($_POST['simpan'])){
	$ket_bulan = $_POST['ket_bulan'];
	$query=mysqli_query($db,"INSERT INTO bulan VALUES(NULL,'$ket_bulan') ");
	if ($query){
		echo "
		<script>
		alert('Data Berhasil Ditambah')
		document.location.href='index.php?halaman=bulan'
		</script>";
	}else {
		echo "
		<script>
		alert('Data Gagal Ditambah')
		</script>";
	}
}
?>
<h2>TAMBAH REKAP BULANAN</h2>
<hr>
<center>
<form action="" method="post">
	<div class="input-group">
		<span>MASUKAN KETERANGAN</span>
		<input type="text" name="ket_bulan" class="form-control" required="">
	</div>
	<br>
	<input type="submit" name="simpan" class="btn btn-primary" required="">
</form>
</center>