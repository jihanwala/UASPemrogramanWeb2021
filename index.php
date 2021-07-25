<?php

	include_once 'koneksi.php';
	$barang = mysqli_query($koneksi, "SELECT * FROM m_item");
	$banyakbarang = mysqli_num_rows($barang);

	$supplier = mysqli_query($koneksi, "SELECT * FROM m_supplier");
	$banyaksupplier = mysqli_num_rows($supplier);

	$mutasi = mysqli_query($koneksi, "SELECT * FROM m_mutasi");
	$banyakmutasi = mysqli_num_rows($mutasi);


?>
<!DOCTYPE html>
<html>
	<head>
		<title>StockGudang - Kelola gudang barang anda dengan cepat</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/fonts/css/font-awesome.min.css">
	</head>
	<style type="text/css">
		body{
			background: url('batik.jpg');
			background-repeat: no-repeat;
			position: fixed;
			width: 100%;
			height: 100%;
			background-size: cover;
		}
	</style>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-white">
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  	</button>
		  	<a class="navbar-brand" href="#"><img src="assets/img/trolley.png" alt="" style="max-width: 35px;"></a>
		  	<div class="collapse navbar-collapse" id="navbar">
		    	<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      		<li class="nav-item active">
		        		<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="supplier.php">Daftar Supplier</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="barang.php">Daftar Barang</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="mutasi.php">Mutasi Barang</a>
		      		</li>
		    	</ul>
		  	</div>
		</nav>
		<br><br>
		
		<div class="container-fluid  fixed-bottom bg-light" style=" color: #999;">
			<div class="row">
				<div class="col-sm-12">
					<p align="center">&copy; Christ Memory</p>
				</div>
			</div>
		</div>


		
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/popper.js"></script>
		<script src="assets/js/script.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
	</body>
</html>