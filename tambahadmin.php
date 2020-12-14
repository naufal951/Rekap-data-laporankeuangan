<?php 
include('koneksi.php');
if(isset($_POST['simpan'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query=mysqli_query($db,"INSERT INTO admin VALUES(NULL,'$username','$password') ");
	if ($query) {
		echo "<script>
					alert('REGISTRASI SUCCES')
					document.location.href='index.php?halaman=admin'
			 </script>";
	} else {
		echo "<script>
					alert('REGISTRASI FAILED')
			 </script>";
	}
}
 ?>
 <center>
		<h2>TAMBAH ADMIN</h2>
		<form action="" method="post">
			<div class="input-group">
				<label>MASUKAN USERNAME</label>
				<input type="text" name="username" class="form-control" required="">
			</div>
			<div class="input-group">
				<label>MASUKAN PASSWORD</label>
				<input type="password" name="password" class="form-control" required="">
			</div>
			<br>
			<input type="submit" name="simpan" value="SIMPAN" class="btn btn-info" >
		</form>
	</center>
