<?php  ?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>List User</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<div class="container">
	<div class="col-md-3">
		<h3 class="text-center">Permintaan</h3>
		<div class="text-center">
			<a href="<?php echo base_url('index.php/peminjaman/request') ?>" class="btn btn-success"><div class="glyphicon glyphicon-check"></div> Setujui Permintaan Peminjaman</a>
		</div>

	</div>
	<div class="col-md-9">
		<h3 class="text-center">Data Peminjaman</h3>
		<div class="text-center">
			<a href="<?php echo base_url('index.php/peminjaman/terpinjam/semua') ?>" class="btn btn-info"><div class="glyphicon glyphicon-book"></div> Semua Data Peminjaman</a>
			<a href="<?php echo base_url('index.php/peminjaman/terpinjam/sudah_kembali') ?>" class="btn btn-success"><div class="glyphicon glyphicon-ok"></div> Peminjaman Sudah Kembali</a>
			<a href="<?php echo base_url('index.php/peminjaman/terpinjam/belum_kembali') ?>" class="btn btn-danger"><div class="glyphicon glyphicon-remove"></div> Peminjaman Belum Kembali</a>
		</div>
	</div>
</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>