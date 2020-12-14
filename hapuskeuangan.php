<?php 
include('koneksi.php');
$id=$_GET['id'];
$id1=$_GET['id1'];
$query=mysqli_query($db,"DELETE FROM keuangan WHERE id_keuangan='$id' ");
if ($query) {
		echo "
		<script>
		alert('Data Berhasil DIHAPUS')
		document.location.href='index.php?halaman=keuangan&id=$id1'
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
