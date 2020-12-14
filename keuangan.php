<?php 
include('koneksi.php');
error_reporting(0);
$no=1;
$id=$_GET['id'];
$pendapatan=mysqli_query($db,"SELECT * FROM keuangan WHERE id_laporan='$id' ");
while ($masuk=mysqli_fetch_array($pendapatan)){
	$arraymasuk[]=$masuk['pendapatan'];
}
$totalmasuk=array_sum($arraymasuk);

$oprasional=mysqli_query($db,"SELECT * FROM keuangan WHERE id_laporan='$id' ");
while ($keluar=mysqli_fetch_array($oprasional)){
	$arraykeluar[]=$keluar['oprasional'];
}
$totalkeluar=array_sum($arraykeluar);

$inventaris=mysqli_query($db,"SELECT * FROM keuangan WHERE id_laporan='$id' ");
while ($keluar1=mysqli_fetch_array($inventaris)){
	$arraykeluar1[]=$keluar1['inventaris'];
}
$totalkeluar1=array_sum($arraykeluar1);

$kredit=$totalkeluar + $totalkeluar1;

$saldo=$totalmasuk - $kredit;
?>

<h2>LAPORAN KEUANGAN</h2>
<div class="row">
	<div class="col-md-9">
		<a href="index.php?halaman=tambahlapkeuangan" class="btn btn-primary" style="margin-top: 25px;">TAMBAH</a>
	</div>
	<div class="col-md-3">
		<form action="" method="post">
			<!--<div class="input-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Nama">
			</div>-->
		</form>
	</div>
</div>
<hr>
<table class="table">
	<tr>
		<th>No</th>
		<th>Tanggal</th>
		<th>Keterangan</th>
		<th>Pendapatan</th>
		<th>Oprasional</th>
		<th>Inventaris Kantor</th>
		<th>Aksi</th>
	</tr>
	<?php 
	$query=mysqli_query($db,"SELECT * FROM keuangan WHERE id_laporan='$id' ");
	while ($row=mysqli_fetch_array($query)): 
		$debit=$row['pendapatan'];
		$pengeluaran=$row['oprasional'];
		$pengeluaran1=$row['inventaris'];

	?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $row['tanggal_lap'] ?></td>
		<td><?php echo $row['ket_laporan'] ?></td>
		<td>Rp.<?php echo number_format($debit) ?>,-</td>
		<td>Rp.<?php echo number_format($pengeluaran) ?>,-</td>
		<td>Rp.<?php echo number_format($pengeluaran1) ?>,-</td>
		<td>

			<a href="index.php?halaman=editkeuangan&id1=<?php echo $row['id_laporan'] ?>&id=<?php echo $row['id_keuangan'] ?>" class="btn btn-primary">Edit</a>
			<a href="hapuskeuangan.php?id1=<?php echo $row['id_laporan'] ?>&id=<?php echo $row['id_keuangan'] ?>" class="btn btn-warning">Hapus</a>
		</td>
	</tr>
<?php endwhile ?>
<td>SALDO : </td>
<td></td>
<td></td>
<td></td>
<td>Rp.<?php echo number_format ($saldo) ?>,-</td>
<td></td>
</table>
