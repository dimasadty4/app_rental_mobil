<div class="main-content">
	<div class="section">
		<div class="section-header">
			<h1>Data Type Mobil</h1>
		</div>
	</div>
	
	<a  class="btn btn-primary mb-3" href="<?= base_url('admin/data_type/tambah_type'); ?>">Tambah Type</a> 
	
	<?= $this ->session->flashdata('pesan') ?>
	
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th width="20px">No</th>
				<th>Kode Type</th>
				<th>Nama Type</th>
				<th width="180px">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach($type as $tp) : ?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $tp->kode_type; ?></td>
					<td><?= $tp->nama_type; ?></td>
					<td>
						<a class="btn btn-sm btn-primary" href="<?= base_url('admin/data_type/update_type/' . $tp->id_type) ?>"><i class="fas fa-edit"></i></a>
						<a class="btn btn-sm btn-danger" href="<?= base_url('admin/data_type/delete_type/' . $tp->id_type) ?>"><i class="fas fa-trash"></i></a>
					</td>
				</tr>
			<?php endforeach; ?>
	</table>
</div>