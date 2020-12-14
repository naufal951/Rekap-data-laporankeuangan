<?php 
include('koneksi.php');
$id=$_GET['id'];
$query1=mysqli_query($db, "DELETE FROM keuangan WHERE id_laporan='$id' ");
$query=mysqli_query($db,"DELETE FROM laporan WHERE id_laporan='$id' ");
if ($query) {
		echo "
		<script>
		alert('Data Berhasil DIHAPUS')
		document.location.href='index.php?halaman=laporan'
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