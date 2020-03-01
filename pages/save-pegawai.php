<?php 
	include "../lib/class-Db.php";
	include "../lib/class-Ff.php";
	$act=$ff->get("act");
	switch ($act) {
		case 'ins':
			# code...
		$post=$odb->sant(INPUT_POST);
		extract($post);
		$ins=$odb->insert("tb_pegawai","'','$nama_pegawai','$nip','$alamat'");
		echo "pegawai.php";
			break;

		case 'up':
			# code...
		$post=$odb->sant(INPUT_POST);
		extract($post);
		$up=$odb->update("tb_pegawai","nama_pegawai='$nama_pegawai',nip='$nip',alamat='$alamat' where id_pegawai='$id'");
		echo "pegawai.php";
			break;

		case 'del':
			# code...
			$id=$ff->get("id");
			if(!empty($id)){
				$del=$odb->delete("delete from tb_pegawai where id_pegawai='$id'");
			echo "pegawai.php";
			}
			break;
		default:
			# code...
			break;
	}
?>

