<?php 
	include "../lib/class-Db.php";
?>

<div class="card-header">
	Jenis
</div>

<div class="card-body">
	<a href="#" class="btn btn-primary btn-nav" data-url="tambah-petugas.php">Tambah</a>
	<div class="table-responsive">
		<table class="table tabel-data dt-responsive nowrap table-striped table-bordered">
			<thead class="thead light">
				<tr>
					<td>No</td>
					<td>Username</td>
					<td>Password</td>
					<td>Nama Petugas</td>
					<td>Level</td>
					<td>Option</td>
				</tr>
			</thead>
			<tbody>
				<?php 
					$no=0;
					$query=$odb->select("v_petugas");
					while($row=$query->fetch()) {
						$no++;
				?>
				<tr>
					<td><?=$no?></td>
					<td><?=$row['username']?></td>
					<td><?=$row['password']?></td>
					<td><?=$row['nama_petugas']?></td>
					<td><?=$row['id_level']?></td>
					<td>
						<td>
						<a href="#" class="btn btn-primary btn-nav" data-url="edit-jenis.php?id=<?=$row['id_jenis']?>"><i class="fa fa-pencil"></i></a>
						<a href="#" class="btn btn-danger btn-nav" dat-url="save-jenis.php?act=del&id=<?=$row['id_jenis']?>"><i class="fa fa-trash"></i></a>
					</td>
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