<?php 
	include "../lib/class-Db.php";
?>

<div class="card-header">
	Jenis
</div>

<div class="card-body">
	<a href="#" class="btn btn-primary btn-nav" data-url="tambah-pegawai.php">Tambah</a>
	<div class="table-responsive">
		<table class="table tabel-data dt-responsive nowrap table-striped table-bordered">
			<thead class="thead light">
				<tr>
					<td>No</td>
					<td>Nama pegawai</td>
					<td>Nip</td>
					<td>Alamat</td>
					<td>Option</td>
				</tr>
			</thead>
			<tbody>
				<?php 
					$no=0;
					$query=$odb->select("tb_pegawai");
					while($row=$query->fetch()) {
						$no++;
				?>
				<tr>
					<td><?=$no?></td>
					<td><?=$row['nama_pegawai']?></td>
					<td><?=$row['nip']?></td>
					<td><?=$row['alamat']?></td>
						<td>
						<a href="#" class="btn btn-primary btn-nav" data-url="edit-pegawai.php?id=<?=$row['id_pegawai']?>"><i class="fa fa-pencil"></i></a>
						<a href="#" class="btn btn-danger btn-nav" dat-url="save-jenis.php?act=del&id=<?=$row['id_jenis']?>"><i class="fa fa-trash"></i></a>
					</td>
				</tr>
				<?php 
					}
				?>
			</tbody>
		</table>
	</div>
</div>

<?php 
	include "nav.php";
?>