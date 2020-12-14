<?php
include('koneksi.php');
$no=1;
$query=mysqli_query($db,"SELECT * FROM bulan");

if (isset($_POST['cari'])) {
	$id=$_POST['cari'];
	$query=mysqli_query($db,"SELECT * FROM bulan WHERE ket_bulan LIKE '%$id%'");
}
?>
<h2>REKAP</h2>
<div class="row">
	<div class="col-md-9">
		<a href="index.php?halaman=tambahrekap" class="btn btn-primary">TAMBAH</a>
	</div>
	<div class="col-md-3">
		<form action="" method="post">
			<div class="input-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Nama">
			</div>
		</form>
	</div>
</div>
<hr>
<table class="table">
	<tr>
		<th>NO</th>
		<th>ID</th>
		<th>Keterangan Bulan</th>
		<th>Aksi</th>
	</tr>
	<?php while ($row=mysqli_fetch_assoc($query)): ?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $row['id_bulan'] ?></td>
		<td><?php echo $row['ket_bulan'] ?></td>
		<td>
			<a href="index.php?halaman=rekap&id=<?php echo $row['id_bulan'] ?>" class="btn btn-primary">Edit</a>
			<a href="hapusrekap.php?id=<?php echo $row['id_bulan'] ?>" class="btn btn-warning">Hapus</a>
			<a target="_BLANK" href="eksportdata.php?id=<?php echo $row['id_bulan'] ?>" class="btn btn-primary" style="margin-bottom: 5px;">EKSPORT</a>
		</td>
	</tr>
<?php endwhile ?>
</table>