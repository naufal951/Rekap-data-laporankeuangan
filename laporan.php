<?php 
include('koneksi.php');
$no=1;
$query=mysqli_query($db,"SELECT * FROM laporan");

if (isset($_POST['cari'])){
	$id=$_POST['cari'];
	$query=mysqli_query($db,"SELECT * FROM laporan WHERE keterangan_lap LIKE '%%$id%'");
}
 ?>
 <h2>LAPORAN KEUANGAN</h2>
<div class="row">
	<div class="col-md-9">
		<a href="index.php?halaman=tambahlaporan" class="btn btn-primary">TAMBAH</a>
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
		<td><?php echo $row['id_laporan'] ?></td>
		<td><?php echo $row['keterangan_lap'] ?></td>
		<td>
			<a href="index.php?halaman=keuangan&id=<?php echo $row['id_laporan'] ?>" class="btn btn-primary">Edit</a>
			<a href="hapuslaporan.php?id=<?php echo $row['id_laporan'] ?>" class="btn btn-warning">Hapus</a>
			<a target="_BLANK" href="eksportkeuangan.php?id=<?php echo $row['id_laporan'] ?>" class="btn btn-primary" style="margin-bottom: 5px;">EKSPORT</a>
			<a href="index.php?halaman=tambahlapkeuangan" class="btn btn-primary" >TAMBAH KEUANGAN</a>
		</td>
	</tr>
<?php endwhile ?>
</table>