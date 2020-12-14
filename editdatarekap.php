<?php 
include('koneksi.php');
$id=$_GET['id'];
$id1=$_GET['id1'];
$query=mysqli_query($db,"SELECT * FROM rekap WHERE id_rekap='$id' ");
$row=mysqli_fetch_assoc($query);

if(isset($_POST['simpan'])){
	$id_bulan=$_POST['id_bulan'];
	$Tanggal_rek=$_POST['Tanggal_rek'];
	$Tempat=$_POST['Tempat'];
	$Cuci=$_POST['Cuci'];
	$Servis=$_POST['Servis'];
	$Pasang_Baru=$_POST['Pasang_Baru'];
	$Pasang_Bekas=$_POST['Pasang_Bekas'];
	$jam_kerja=$_POST['jam_kerja'];
	$peralatan=$_POST['peralatan'];
	$Keterangan=$_POST['Keterangan'];
	$query=mysqli_query($db,"UPDATE rekap SET id_bulan='$id_bulan',Tanggal_rek='$Tanggal_rek',Tempat='$Tempat',Cuci='$Cuci',Servis='$Servis',Pasang_Baru='$Pasang_Baru',Pasang_Bekas='$Pasang_Bekas',jam_kerja='$jam_kerja',peralatan='$peralatan',Keterangan='$Keterangan' WHERE id_rekap='$id' ");
	if($query){
		echo"
		<script>
		alert('Data Berhasil Diperbaruhi')
		document.location.href='index.php?halaman=rekap&id=$id1'
		</script>";
	} else {
		echo"
		<script>
		alert('Data Gagal Diperbaruhi')
		</script>";
	}
}

?>

<center>
<form action="" method="post">
	<div class="input-group">
		<span>ID</span>
		<select class="form-control" name="id_bulan" required="">
			<option><?php echo $row['id_bulan']; ?></option>
			<?php 
				$query=mysqli_query($db,"SELECT * FROM bulan");
				while ($row1=mysqli_fetch_assoc($query1)) {
					echo "<option>".$row1['id_bulan']."</option>";
				}
			 ?>

		</select>

	</div>
	<div class="input-group">
		<span>MASUKAN TANGGAL</span>
		<input type="date" name="Tanggal_rek" class="form-control" required="" value="<?php echo $row['Tanggal_rek'] ?>">
	</div>
	<div class="input-group">
		<span>MASUKAN TEMPAT</span>
		<input type="text" name="Tempat" class="form-control"  value="<?php echo $row['Tempat'] ?>">
	</div>
	<div class="input-group">
		<span>CUCI</span>
		<input type="text" name="Cuci" class="form-control"  value="<?php echo $row['Cuci'] ?>">
	</div>
	<div class="input-group">
		<span>SERVIS</span>
		<input type="text" name="Servis" class="form-control"  value="<?php echo $row['Servis'] ?>">
	</div>
	<div class="input-group">
		<span>PASANG BARU</span>
		<input type="text" name="Pasang_Baru" class="form-control"  value="<?php echo $row['Pasang_Baru'] ?>">
	</div>
	<div class="input-group">
		<span>PASANG BEKAS</span>
		<input type="text" name="Pasang_Bekas" class="form-control"  value="<?php echo $row['Pasang_Bekas'] ?>">
	</div>
	<div class="input-group">
		<span>MASUKAN JAM KERJA</span>
		<input type="text" name="jam_kerja" class="form-control"  value="<?php echo $row['jam_kerja'] ?>">
	</div>
	<div class="input-group">
		<span>MASUKAN P. PERALATAN</span>
		<input type="text" name="peralatan" class="form-control"  value="<?php echo $row['peralatan'] ?>">
	</div>
	<div class="input-group">
		<span>MASUKAN KETERANGAN</span>
		<input type="text" name="Keterangan" class="form-control"  value="<?php echo $row['Keterangan'] ?>">
	</div>
	<br>
	<input type="submit" name="simpan" class="btn btn-primary" >
</form>
</center>
