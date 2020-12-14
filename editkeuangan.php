<?php 
include('koneksi.php');
$id = $_GET['id'];
$id1 = $_GET['id1'];
$query=mysqli_query($db,"SELECT * FROM keuangan WHERE id_keuangan='$id' ");

$row=mysqli_fetch_array($query);

if(isset($_POST['simpan'])){
	$id_laporan=$_POST['id_laporan'];
	$tanggal_lap=$_POST['tanggal_lap'];
	$ket_laporan=$_POST['ket_laporan'];
	$pendapatan = $_POST['pendapatan'];
	$oprasional = $_POST['oprasional'];
	$inventaris = $_POST['inventaris'];
	$query=mysqli_query($db,"UPDATE keuangan SET id_laporan='$id_laporan',tanggal_lap='$tanggal_lap',ket_laporan='$ket_laporan',pendapatan='$pendapatan',oprasional='$oprasional',inventaris='$inventaris' ");
	if($query){
		echo"
		<script>
		alert('Data Berhasil Diperbaruhi')
		document.location.href='index.php?halaman=keuangan&id=$id1'
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
		<select class="form-control" name="id_laporan" required="">
			<option><?php echo $row['id_laporan']; ?></option>
			<?php 
				$query=mysqli_query($db,"SELECT * FROM laporan");
				while ($row1=mysqli_fetch_array($query1)) {
					echo "<option>".$row1['id_laporan']."</option>";
				}
			 ?>

		</select>

	</div>
	<div class="input-group">
		<span>MASUKAN TANGGAL</span>
		<input type="date" name="tanggal_lap" class="form-control" required="" value="<?php echo $row['tanggal_lap'] ?>">
	</div>
	<div class="input-group">
		<span>MASUKAN KETERANGAN</span>
		<input type="text" name="ket_laporan" class="form-control"  value="<?php echo $row['ket_laporan'] ?>">
	</div>
	<div class="input-group">
		<span>PENDAPATAN</span>
		<input type="text" name="pendapatan" class="form-control"  value="<?php echo $row['pendapatan'] ?>">
	</div>
	<div class="input-group">
		<span>OPRASIONAL</span>
		<input type="text" name="oprasional" class="form-control"  value="<?php echo $row['oprasional'] ?>">
	</div>
		<div class="input-group">
		<span>INVENTARIS KANTOR</span>
		<input type="text" name="inventaris" class="form-control"  value="<?php echo $row['inventaris'] ?>">
	</div>
	<br>
	<input type="submit" name="simpan" class="btn btn-primary" >
</form>
</center>