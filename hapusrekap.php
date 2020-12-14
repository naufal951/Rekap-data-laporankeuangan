<?php
include('koneksi.php');
$id=$_GET['id'];
$query1=mysqli_query($db,"DELETE FROM rekap WHERE id_bulan='$id'");
$query=mysqli_query($db,"DELETE FROM bulan WHERE id_bulan='$id'");

if ($query) {
		echo "
		<script>
		alert('Data Berhasil DIHAPUS')
		document.location.href='index.php?halaman=bulan'
		</script>
		";
	} else {
		echo "
		<script>
		alert('Data Gagal DIHAPUS')
		</script>
		";
	}
?>