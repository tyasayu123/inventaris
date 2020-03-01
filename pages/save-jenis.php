<?php 
	include "../lib/class-Db.php";
	include "../lib/class-Ff.php";
	$act=$ff->get("act");
	switch ($act) {
		case 'ins':
			# code...
		$post=$odb->sant(INPUT_POST);
		extract($post);
		$ins=$odb->insert("tb_jenis","'','$nama_jenis','$kode_jenis','$keterangan'");
		echo "jenis.php";
			break;

		case 'up':
			# code...
		$post=$odb->sant(INPUT_POST);
		extract($post);
		$up=$odb->update("tb_jenis","nama_jenis='$nama_jenis',kode_jenis='$kode_jenis',keterangan='$keterangan' where id_jenis='$id'");
		echo "jenis.php";
			break;

		case 'del':
			# code...
			$id=$ff->get("id");
			if(!empty($id)){
				$del=$odb->delete("delete from tb_jenis where id_jenis='$id'");
			echo "jenis.php";
			}
			break;
		
		default:
			# code...
			break;
	}
?>