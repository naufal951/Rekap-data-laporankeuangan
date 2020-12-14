<?php 
include('koneksi.php');
$id=$_GET['id'];
$query=mysqli_query($db,"DELETE FROM admin WHERE id='$id' ");
if ($query) {
		echo "
		<script>
		alert('Data Berhasil DIHAPUS')
		document.location.href='index.php?halaman=admin'
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