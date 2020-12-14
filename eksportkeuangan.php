<?php 
include('koneksi.php');
$id=$_GET['id'];

$pemasukan=mysqli_query($db,"SELECT * FROM keuangan WHERE id_laporan='$id' ");
while ($masuk=mysqli_fetch_array($pemasukan)){
	$arraymasuk[]=$masuk['debit'];
}
$totalmasuk=array_sum($arraymasuk);

$pengeluaran=mysqli_query($db,"SELECT * FROM keuangan WHERE id_laporan='$id' ");
while ($keluar=mysqli_fetch_array($pengeluaran)){
	$arraykeluar[]=$keluar['kredit'];
}
$totalkeluar=array_sum($arraykeluar);

$saldo=$totalmasuk - $totalkeluar;

$query1=mysqli_query($db,"SELECT * FROM laporan WHERE id_laporan='$id' ");

$row1=mysqli_fetch_array($query1);

$no=1;
$tgl=date("d-m-Y");
header("content-type:application/vnd-ms-exel");
header("content-disposition:attachment;filename=daftakeuangan.xls");
 ?>
 <h2><?php echo $row1['keterangan_lap'] ?></h2>
 <p>Dicetak Pada :<?php echo $tgl ?></p>
 <table border="1px" cellpadding="10px" cellspacing="0px">
 	<tr style="text-align: center;background-color: grey">

 		<th>NO</th>
 		<th>Tanggal</th>
		<th>Keterangan</th>
		<th>Debit</th>
		<th>Kredit</th>

	</tr>
	<?php
	$query=mysqli_query($db,"SELECT * FROM keuangan WHERE id_laporan='$id' ");
	while ($row=mysqli_fetch_array($query)) : 
		$debit=$row['debit'];
		$kredit=$row['kredit'];
	?>

	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $row['tanggal_lap'] ?></td>
		<td><?php echo $row['ket_laporan'] ?></td>
		<td>Rp.<?php echo number_format ($debit) ?>,-</td>
		<td>Rp.<?php echo number_format ($kredit) ?>,-</td>
 	</tr>
	<?php endwhile ?>
	<td>SALDO : </td>
<td></td>
<td></td>
<td></td>
<td>Rp.<?php echo number_format ($saldo) ?>,-</td>

 </table>