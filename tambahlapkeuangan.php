<?php 
include('koneksi.php');
if (isset($_POST['simpan'])){
	$id_laporan = $_POST['id_laporan'];
	$tanggal_lap = $_POST['tanggal_lap'];
	$ket_laporan = $_POST['ket_laporan'];
	$pendapatan = $_POST['pendapatan'];
	$oprasional = $_POST['oprasional'];
	$inventaris = $_POST['inventaris'];
	$query=mysqli_query($db,"INSERT INTO keuangan VALUES(NULL,'$id_laporan','$tanggal_lap','$ket_laporan','$pendapatan','$oprasional','$inventaris')");
	if ($query) {
		echo "
		<script>
		alert('Data Berhasil Disimpan')
		document.location.href='index.php?halaman=keuangan&id=$id_laporan'
		</script>
		";
	} else {
		echo "
		<script>
		alert('Data Gagal Disimpan')
		</script>
		";
	}
}
?>
<h2>TAMBAH LAPORAN</h2>
<hr>
<center>
<form action="" method="post">
	<div class="input-group">
		<span>ID</span>
		<select name="id_laporan" class="form-control" required="">
			<option>PILIH ID</option>
			<?php 
				$query=mysqli_query($db,"SELECT * FROM laporan");
				while ($row=mysqli_fetch_assoc($query)) {
					echo "<option>".$row['id_laporan']."</option>";
				}
			 ?>
		</select>
	</div>
	<div class="input-group">
		<span>MASUKAN TANGGAL</span>
		<input type="date" name="tanggal_lap" class="form-control" required="">
	</div>
	<div class="input-group">
		<span>MASUKAN KETERANGAN</span>
		<input type="text" name="ket_laporan" class="form-control">
	</div>
	<div class="input-group">
		<span>MASUKAN PENDAPATAN</span>
		<input value="0" type="text" name="pendapatan" class="form-control" required="">
	</div>
	<div class="input-group">
		<span>MASUKAN OPRASIONAL</span>
		<input value="0" type="text" name="oprasional" class="form-control" required="">
	</div>
	<div class="input-group">
		<span>MASUKAN INVENTARIS KANTOR</span>
		<input value="0" type="text" name="inventaris" class="form-control" required="">
	</div>
	<br>
	<input type="submit" name="simpan" class="btn btn-primary" required="">
</form>
</center>