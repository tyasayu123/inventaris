<?php 
	include "../lib/class-Db.php";
?>

<div class="card-body">
	<a href="#" class="btn btn-primary btn-nav" id="menu" data-url="ruang.php">Lihat Data</a>
	<form action="javascript:void(0);" id="frm-input" data-url="save-ruang.php?act=ins">
		<div class="form-group">
			<label>Nama</label>
			<input type="text" name="nama_ruang" class="form-control" placeholder="Nama">
		</div>
		<div class="form-group">
			<label>Kode</label>
			<input type="text" name="kode_ruang" class="form-control" placeholder="Kode">
		</div>
		<div class="form-group">
			<label>Keterangan</label>
			<input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
		</div>
		<div>
			<button type="submit" class="btn btn-primary btn-nav" name="submit">Submit</button>
		</div>
	</form>
</div>

<?php 
	include "nav.php";
?>