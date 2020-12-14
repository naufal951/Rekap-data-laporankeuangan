<?php
session_start();
if (!isset($_SESSION['berhasil'])){
  header('location:login.php');
  exit;

}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PT Manggala Wirasakti</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><font size="4">PT Manggala Wirasakti</font></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					         </li>
                   <li>
                     <a href="index.php"><i class="glyphicon glyphicon-home"></i>Dasboard</a>
                   </li>
                    <li>
                      <a href="index.php?halaman=bulan"><i class="glyphicon glyphicon-home"></i>Rekap Bulanan</a>
                    </li>
                      <li>
                      <a href="index.php?halaman=laporan"><i class="glyphicon glyphicon-home"></i>Keuangan</a>
                    </li>
                    <li>
                      <a href="index.php?halaman=admin"><i class="glyphicon glyphicon-home"></i>User</a>
                    </li>        
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
            <?php if (isset($_GET['halaman'])){
                if ($_GET['halaman'] == 'bulan'){
                    include('bulan.php');
                } elseif($_GET['halaman']=='rekap'){
                    include('rekap.php');
                } elseif($_GET['halaman']=='laporan'){
                    include('laporan.php');
                } elseif($_GET['halaman']=='keuangan'){
                    include('keuangan.php');
                } elseif($_GET['halaman']=='admin'){
                    include('admin.php');
                } elseif($_GET['halaman']=='tambahrekap'){
                    include('tambahrekap.php');
                } elseif($_GET['halaman']=='tambahdata'){
                    include('tambahdata.php');
                } elseif($_GET['halaman']=='editdatarekap'){
                    include('editdatarekap.php');
                } elseif($_GET['halaman']=='tambahlapkeuangan'){
                    include('tambahlapkeuangan.php');
                } elseif($_GET['halaman']=='tambahlaporan'){
                    include('tambahlaporan.php');
                } elseif($_GET['halaman']=='editkeuangan'){
                    include('editkeuangan.php');
                } elseif($_GET['halaman']=='tambahadmin'){
                    include('tambahadmin.php');
                }
              } else {
                  include('dasboard.php') ;
            } ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>