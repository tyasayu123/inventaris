<?php 
	include "../lib/class-Db.php";
?>

<div class="card-header">
	Ruang
</div>

<div class="card-body">
	<div class="table-responsive">
		<a href="#" class="btn btn-primary btn-nav" data-url="tambah-ruang.php">Tambah</a>
		<table class="table tabel-data dt-responsive nowrap table-striped table-bordered">
			<thead class="thead-light">
				<tr>
					<td>No</td>
					<td>Nama Ruang</td>
					<td>Kode Ruang</td>
					<td>Keterangan</td>
					<td>Option</td>
				</tr>
			</thead>
			<tbody>
				<?php 
					$no=0;
					$query=$odb->select("tb_ruang");
					while($row=$query->fetch()) {
						$no++
				?>
				<tr>
					<td><?=$no?></td>
					<td><?=$row['nama_ruang']?></td>
					<td><?=$row['kode_ruang']?></td>
					<td><?=$row['keterangan']?></td>
					<td>
						<a href="#" class="btn btn-primary btn-nav" data-url="edit-ruang.php?id=<?=$row['id_ruang']?>"><i class="fa fa-pencil"></i></a>
						<a href="#" class="btn btn-danger btn-nav" dat-url="save-ruang.php?act=del&id=<?=$row['id_ruang']?>"><i class="fa fa-trash"></i></a>
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