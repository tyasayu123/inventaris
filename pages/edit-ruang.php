<?php 
	include "../lib/class-Db.php";
	include "../lib/class-Ff.php";
	$id=$ff->get("id");
	if(!empty($id)) {
		$sel=$odb->select("tb_ruang where id_ruang='$id'");
		if($sel->rowCount()>0) {
			$row=$sel->fetch();
		}
	}
?>

<div class="card-body">
	<a href="#" class="btn btn-primary btn-nav" id="menu" data-url="ruang.php">Lihat Data</a>
	<form method="post" action="javascript:void(0);" id="frm-input" data-url="save-ruang.php?act=ins">
		<input type="hidden" name="id" value="<?=$id?>">
		<div class="form-group">
			<label>Nama</label>
			<input type="text" name="nama_ruang" value="<?=$row['nama_ruang']?>" class="form-control" placeholder="Nama">
		</div>
		<div class="form-group">
			<label>Kode Ruang</label>
			<input type="text" name="kode_ruang" value="<?=$row['kode_ruang']?>" class="form-control" placeholder="kode_ruang">
		</div>
		<div class="form-group">
			<labe>Keterangan</label>
			<input type="text" name="keterangan" value="<?=$row['keterangan']?>" class="form-control" placeholder="Keterangan">
		</div>
		<div>
			<button type="submit" class="btn btn-primary btn-nav" name="submit">Submit</button>
		</div>
	</form>
</div>

<?php 
	include "nav.php";
?>