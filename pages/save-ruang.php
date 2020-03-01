<?php 
	include "../lib/class-Db.php";
	include "../lib/class-Ff.php";
	$act=$ff->get("act");
	switch ($act) {
		case 'ins':
			# code...
		$post=$odb->sant(INPUT_POST);
		extract($post);
		$ins=$odb->insert("tb_ruang","'','$nama_ruang','$kode_ruang','$keterangan'");
		echo "ruang.php";
			break;

		case 'up':
			# code...
		$post=$odb->sant(INPUT_POST);
		extract($post);
		$up=$odb->update("tb_ruang","nama_ruang='$nama_ruang',nip='$nip',alamat='$alamat' where id_ruang='$id'");
		echo "ruang.php";
			break;
		
		default:
			# code...
			break;
	}
?>