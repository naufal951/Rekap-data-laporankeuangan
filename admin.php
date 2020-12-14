<?php 
include('koneksi.php');
$no=1;
$query=mysqli_query($db,"SELECT * FROM admin ");

if(isset($_POST['cari'])){
	$id=$_POST['cari'];
	$query=mysqli_query($db,"SELECT * FROM admin WHERE username LIKE '%$id%' ");
}

 ?>
 <h2>HALAMAN ADMIN</h2>
<div class="row">
	<div class="col-md-9">
		<a href="index.php?halaman=tambahadmin" class="btn btn-primary">TAMBAH</a>
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
		<th>Username</th>
		<th>Password</th>
		<th>aksi</th>
	</tr>
	<?php while ($row=mysqli_fetch_assoc($query)): ?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $row['username'] ?></td>
		<td><?php echo $row['password'] ?></td>
		<td>
			<a href="hapusadmin.php?id=<?php echo $row['id'] ?>" class="btn btn-warning">Hapus</a>
		</td>
	</tr>
<?php endwhile ?>
</table>