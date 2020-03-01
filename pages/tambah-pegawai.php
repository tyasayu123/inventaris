<?php 
	include "../lib/class-Db.php";
?>

<div class="card-body">
	<a href="#" class="btn btn-primary btn-nav" id="menu" data-url="pegawai.php">Lihat Data</a>
	<form method="post" action="javascript:void(0);" id="frm-input" data-url="save-pegawai.php?act=ins">
		<div class="form-group">
			<label>Nama</label>
			<input type="text" name="nama_pegawai" class="form-control" placeholder="Nama">
		</div>
		<div class="form-group">
			<label>Nip</label>
			<input type="text" name="nip" class="form-control" placeholder="Nip">
		</div>
		<div class="form-group">
			<labe>Alamat</label>
			<input type="text" name="alamat" class="form-control" placeholder="Keterangan">
		</div>
		<div>
			<button type="submit" class="btn btn-primary btn-nav" name="submit">Submit</button>
		</div>
	</form>
</div>

<?php 
	include "nav.php";
?>