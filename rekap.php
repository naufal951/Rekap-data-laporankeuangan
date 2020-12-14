<?php
include('koneksi.php');
$id=$_GET['id'];
$query=mysqli_query($db,"SELECT * FROM rekap WHERE id_bulan='$id' ");

$query1=mysqli_query($db,"SELECT * FROM bulan WHERE id_bulan='$id' ");

$row1=mysqli_fetch_array($query1) ;
?>
<h2><?php echo $row1['ket_bulan'] ?></h2>
<div class="row">
	<div class="col-md-9">
		<a href="index.php?halaman=tambahdata" class="btn btn-primary" style="margin-top: 25px;">TAMBAH</a>
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
		<th>Tanggal</th>
		<th>Tempat</th>
		<th>Cuci</th>
		<th>Servis</th>
		<th>Pasang Baru</th>
		<th>Pasang Bekas</th>
		<th>Jam Kerja</th>
		<th>P. Peralatan</th>
		<th>Keterangan</th>
		<th></th>
	</tr>
	<?php while ($row=mysqli_fetch_assoc($query)): ?>
	<tr>
		<td><?php echo $row['Tanggal_rek'] ?></td>
		<td><?php echo $row['Tempat'] ?></td>
		<td><?php echo $row['Cuci'] ?></td>
		<td><?php echo $row['Servis'] ?></td>
		<td><?php echo $row['Pasang_Baru'] ?></td>
		<td><?php echo $row['Pasang_Bekas'] ?></td>
		<td><?php echo $row['jam_kerja'] ?></td>
		<td><?php echo $row['peralatan'] ?></td>
		<td><?php echo $row['Keterangan'] ?></td>
	
		<td>
			<a href="index.php?halaman=editdatarekap&id1=<?php echo $row['id_bulan'] ?>&id=<?php echo $row['id_rekap'] ?>" class="btn btn-primary">Edit</a>
			<a href="hapusdatarekap.php?id1=<?php echo $row['id_bulan'] ?>&id=<?php echo $row['id_rekap'] ?>" class="btn btn-warning">Hapus</a>
		</td>
	</tr>
<?php endwhile ?>
</table>