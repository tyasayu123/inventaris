<?php 
	include "../lib/class-Db.php";
	include "../lib/class-Ff.php";
	$id=$ff->get("id");
	if(!empty($id)) {
		$sel=$odb->select("tb_pegawai where id_pengawai='$id'");
		if($sel->rowCount()>0) {
			$row=$sel->fetch();
		}
	}
?>

<div class="card-body">
	<a href="#" class="btn btn-primary btn-nav" id="menu" data-url="pegawai.php">Lihat Data</a>
	<form method="post" action="javascript:void(0);" id="frm-input" data-url="save-pegawai.php?act=ins">
		<input type="hidden" name="id" value="<?=$id?>">
		<div class="form-group">
			<label>Nama</label>
			<input type="text" name="nama_pegawai" value="<?=$row['nama_pegawai']?>" class="form-control" placeholder="Nama">
		</div>
		<div class="form-group">
			<label>Nip</label>
			<input type="text" name="nip" value="<?=$row['nip']?>" class="form-control" placeholder="Nip">
		</div>
		<div class="form-group">
			<labe>alamat</label>
			<input type="text" name="alamat" value="<?=$row['alamat']?>" class="form-control" placeholder="Alamat">
		</div>
		<div>
			<button type="submit" class="btn btn-primary btn-nav" name="submit">Submit</button>
		</div>
	</form>
</div>

<?php 
	include "nav.php";
?>