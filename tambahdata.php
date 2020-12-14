<?php
include('koneksi.php');

if (isset($_POST['simpan'])){
	$id_bulan = $_POST['id_bulan'];
	$Tanggal_rek = $_POST['Tanggal_rek'];
	$Tempat = $_POST['Tempat'];
	$Cuci = $_POST['Cuci'];
	$Servis = $_POST['Servis'];
	$Pasang_Baru = $_POST['Pasang_Baru'];
	$Pasang_Bekas = $_POST['Pasang_Bekas'];
	$jam_kerja = $_POST['jam_kerja'];
	$peralatan = $_POST['peralatan'];
	$Keterangan = $_POST['Keterangan'];
	$query=mysqli_query($db,"INSERT INTO rekap VALUES(NULL,'$id_bulan','$Tanggal_rek','$Tempat','$Cuci','$Servis','$Pasang_Baru','$Pasang_Bekas','$jam_kerja','$peralatan','$Keterangan')");
	if ($query) {
		echo "
		<script>
		alert('Data Berhasil Disimpan')
		document.location.href='index.php?halaman=rekap&id=$id_bulan'
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
<h2>TAMBAH REKAPAN</h2>
<hr>
<center>
<form action="" method="post">
	<div class="input-group">
		<span>ID</span>
		<select name="id_bulan" class="form-control" required="">
			<option>PILIH ID</option>
			<?php 
				$query=mysqli_query($db,"SELECT * FROM bulan");
				while ($row=mysqli_fetch_assoc($query)) {
					echo "<option>".$row['id_bulan']."</option>";
				}
			 ?>
		</select>
	</div>
	<div class="input-group">
		<span>MASUKAN TANGGAL</span>
		<input type="date" name="Tanggal_rek" class="form-control" required="" >
	</div>
	<div class="input-group">
		<span>MASUKAN TEMPAT</span>
		<input type="text" name="Tempat" class="form-control"  >
	</div>
	<div class="input-group">
		<span>MASUKAN CUCI</span>
		<input type="text" name="Cuci" class="form-control" >
	</div>
	<div class="input-group">
		<span>MASUKAN SERVIS</span>
		<input type="text" name="Servis" class="form-control" >
	</div>
	<div class="input-group">
		<span>MASUKAN PASANG BARU</span>
		<input type="text" name="Pasang_Baru" class="form-control" >
	</div>
	<div class="input-group">
		<span>MASUKAN PASANG BEKAS</span>
		<input type="text" name="Pasang_Bekas" class="form-control" >
	</div>
	<div class="input-group">
		<span>MASUKAN JAM KERJA</span>
		<input type="text" name="jam_kerja" class="form-control" >
	</div>
	<div class="input-group">
		<span>MASUKAN P. PERALATAN</span>
		<input type="text" name="peralatan" class="form-control" >
	</div>
	<div class="input-group">
		<span>MASUKAN KETERANGAN</span>
		<input type="text" name="Keterangan" class="form-control" >
	</div>
	<br>
	<input type="submit" name="simpan" class="btn btn-primary" >
</form>
</center>