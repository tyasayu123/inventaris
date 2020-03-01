<?php 
	session_start();
	include "../lib/class-Db.php";
	include "../lib/class-Ff.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>INVENTARIS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit-no">
	<link rel="stylesheet" type="text/css" href="../plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../plugins/select2/dist/css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../plugins/bootstrap-4.0.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../plugins/datatables.net-bs/css/dataTables.bootstrap.min.css">
</head>
<body>

	<!-- NAVBAR -->
	<nav class="navbar navbar-dark bg-dark">
		<div class="navbar-brand text-white">
			Inventaris
		</div>
		<div class="text-white">
			<?php 
				$tgl=date('l, d-m-Y');
				echo $tgl;
			?>
		</div>
	</nav>

	<br>

	<!-- SIDEBAR -->
	<div class="container col-md-12 col-sm-12">
		<div class="row">
			<div class="card col-md-2 col-sm-2 bg-dark text-white">
				<div class="card-header">
					<i class="fa fa-dashboard">&nbsp Dashboard</i>
				</div>
				<ul class="list-group list-group-flush">
					<a href="#" class="list-group-item bg-dark text-white btn-menu" style="text-decoration: none;" data-url="inventaris"><i class="fa fa-book">&nbsp Inventaris</i></a>
					<a href="#" class="list-group-item bg-dark text-white btn-menu" style="text-decoration: none;" data-url="ruang"><i class="fa fa-list">&nbsp Ruang</i></a>
					<a href="#" class="list-group-item bg-dark text-white btn-menu" style="text-decoration: none;" data-url="jenis"><i class="fa fa-list">&nbsp Jenis</i></a>
					<a href="#" class="list-group-item bg-dark text-white btn-menu" style="text-decoration: none;" data-url="pegawai"><i class="fa fa-user">&nbsp Pegawai</i></a>
					<a href="#" class="list-group-item bg-dark text-white btn-menu" style="text-decoration: none;" data-url="petugas"><i class="fa fa-user">&nbsp Petugas</i></a>
					<a href="#" class="list-group-item bg-dark text-white btn-menu" style="text-decoration: none;" data-url=""><i class="fa fa-book">&nbsp Peminjaman</i></a>
					<a href="#" class="list-group-item bg-dark text-white btn-menu" style="text-decoration: none;" data-url=""><i class="fa fa-list">&nbsp Laporan</i></a>
				</ul>
			</div>

			<br>

			<!-- CONTENT -->
			<div class="col-md-10 col-sm-10">
				<div class="card" id="konten">
					<div class="card-header">
						HOME
					</div>
					<div class="card-body">
						SELAMAT DATANG
					</div>
				</div>
			</div>
		</div>
	</div>

	<nav class="footer">
		<center>copyright &copy; 2019</center>
	</nav>
</body>
</html>

<script type="text/javascript" src="../plugins/jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../plugins/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="../plugins/select2/dist/js/select2.min.js"></script>


<script type="text/javascript">
	$(function(){
		$(".btn-menu").click(function(){
			var alamat=$(this).attr("data-url");
			$.ajax({
				type:"post",
				url:alamat+".php",
				success:function(data){
					$("#konten").empty();
					$("#konten").html(data);
				},
				error:function(data){
					$("#konten").html("404 page not found");
				}
			});
		});
	})
</script>