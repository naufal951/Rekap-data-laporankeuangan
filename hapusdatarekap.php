<?php
include('koneksi.php');
$id=$_GET['id'];
$id1=$_GET['id1'];
//$query=mysqli_query($db,"SELECT * FROM bulan WHERE id_bulan");
$query=mysqli_query($db,"DELETE FROM rekap WHERE id_rekap='$id' ");
if ($query) {
		echo "
		<script>
		alert('Data Berhasil DIHAPUS')
		document.location.href='index.php?halaman=rekap&id=$id1'
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