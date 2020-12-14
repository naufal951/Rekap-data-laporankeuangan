<?php 
include('koneksi.php');
$id=$_GET['id'];
$query=mysqli_query($db,"SELECT * FROM rekap WHERE id_bulan='$id' ");

$query1=mysqli_query($db,"SELECT * FROM bulan WHERE id_bulan='$id' ");

$row1=mysqli_fetch_array($query1) ;

$no=1;
$tgl=date("d-m-Y");
header("content-type:application/vnd-ms-exel");
header("content-disposition:attachment;filename=daftarpemesanan.xls");
 ?>
 <h2><?php echo $row1['ket_bulan'] ?></h2>
 <p>Dicetak Pada :<?php echo $tgl ?></p>
 <table border="1px" cellpadding="10px" cellspacing="0px">
 	<tr style="text-align: center;background-color: grey">

 		<th>NO</th>
 		<th>Tanggal</th>
		<th>Tempat</th>
		<th>Cuci</th>
		<th>Servis</th>
		<th>Pasang Baru</th>
		<th>Pasang Bekas</th>
		<th>Jam Kerja</th>
		<th>P. Peralatan</th>
		<th>Keterangan</th>
	</tr>
	<?php while ($row=mysqli_fetch_assoc($query)) : ?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $row['Tanggal_rek'] ?></td>
		<td><?php echo $row['Tempat'] ?></td>
		<td><?php echo $row['Cuci'] ?></td>
		<td><?php echo $row['Servis'] ?></td>
		<td><?php echo $row['Pasang_Baru'] ?></td>
		<td><?php echo $row['Pasang_Bekas'] ?></td>
		<td><?php echo $row['jam_kerja'] ?></td>
		<td><?php echo $row['peralatan'] ?></td>
		<td><?php echo $row['Keterangan'] ?></td>
 	</tr>
	<?php endwhile ?>
 </table>