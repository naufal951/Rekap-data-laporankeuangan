<?php 
include('koneksi.php');
//$id=$_SESSION['data'];
$rekapan=mysqli_query($db,"SELECT * FROM bulan");
 ?>
 <font size="5">Selamat Datang</font>
<br>
		<h2>Dasboard</h2>
	<hr>
	<div class="row">
		<div class="col-md-3">
			<div class="panel panel-info">
				<div class="panel panel-heading">
					<center><span><b>REKAPAN BULANAN</b></span></center>
				</div>
				<div class="panel panel-body">
					<p>JUMLAH REKAPAN : <?php echo mysqli_num_rows($rekapan) ?></p>
				</div>
			</div>
		</div>
</div>