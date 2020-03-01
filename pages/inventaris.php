<?php 
	include "../lib/class-Db.php"
?>

<div class="card-header">
	Inventaris
</div>

<div class="card-body">
	<div class="table-responsive">
		<a href="#" class="btn btn-primary btn-nav" data-url="tambah-inventaris">Tambah</a>
		<table class="table tabel-data dt-responsive nowrap table-striped table-bordered">
			<thead class="thead light">
				<tr>
					<td>No</td>
					<td>Nama</td>
					<td>Kondisi</td>
					<td>Keterangan</td>
					<td>Jumlah</td>
					<td>Jenis</td>
					<td>Tanggal Register</td>
					<td>Nama Ruang</td>
					<td>Kode Inventaris</td>
					<td>Option</td>
				</tr>
			</thead>
			<tbody>
				<?php 
					$no=0;
					$query=$odb->select("v_inventaris");
					while($row=$query->fetch()) {
						$no++;
				?>
				<tr>
					<td><?=$no?></td>
					<td><?=$row['nama']?></td>
					<td><?=$row['kondisi']?></td>
					<td><?=$row['keterangan']?></td>
					<td><?=$row['jumlah']?></td>
					<td><?=$row['nama_jenis']?></td>
					<td><?=$row['tanggal_register']?></td>
					<td><?=$row['nama_ruang']?></td>
					<td><?=$row['kode_inventaris']?></td>
					<td>
						<a href="#" class="btn btn-primary btn-nav" data-url="edit-jenis.php?id=<?=$row['id_jenis']?>"><i class="fa fa-pencil"></i></a>
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