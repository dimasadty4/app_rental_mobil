<div class="main-content">
    <section class="section">
		<div class="section-header">
			<h1>Laporan Transaksi</h1>
		</div>
	</section>
	
	<form method="POST" action="<?= base_url('admin/laporan') ?>">
		<div class="form-group">
			<label>Dari Tanggal</label>
			<input type="date" name="dari" class="form-control">
			<?= form_error('dari','<div class="text-small text-danger">','</div>'); ?>
		</div>
		
		<div class="form-group">
			<label>Sampai Tanggal</label>
			<input type="date" name="sampai" class="form-control">
			<?= form_error('sampai','<div class="text-small text-danger">','</div>'); ?>
		</div>
		
		<button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i> Tampilkan Data</button>
	</form><hr>
	
	<div class="btn-group">
		<a class="btn btn-sm btn-success" target="_blank" href="<?= base_url() . 'admin/laporan/print_laporan/?dari=' . set_value('dari') . '&sampai=' . set_value('sampai') ?>">
		<i class="fas fa-print"></i> Print</a>
	</div>
	
	<div class="table-responsive mt-3">
		<table class="table table-bordered table-striped">
			<tr>
				<th>No.</th>
				<th>Customer</th>
				<th>Mobil</th>
				<th>Tgl. Rental</th>
				<th>Tgl. Kembali</th>
				<th>Harga/Hari</th>
				<th>Denda/Hari</th>
				<th>Total Denda</th>
				<th>Tgl. Pengembalian</th>
				<th>Status Pengembalian</th>
				<th>Status Rental</th>
			</tr>
			
			<?php $no = 1;
			foreach ($laporan as $tr) : ?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $tr->nama; ?></td>
					<td><?= $tr->merk; ?></td>
					<td><?= date('d/m/Y', strtotime($tr->tanggal_rental)); ?></td>
					<td><?= date('d/m/Y', strtotime($tr->tanggal_kembali)); ?></td>
					<td>Rp. <?= number_format($tr->harga,0,',','.'); ?></td>
					<td>Rp. <?= number_format($tr->denda,0,',','.'); ?></td>
					<td>Rp. <?= number_format($tr->total_denda,0,',','.'); ?></td>
					<td>
						<?php
							if($tr->tanggal_pengembalian == "0000-00-00") {
								echo "-";
							} else {
								echo date('d/m/Y', strtotime($tr->tanggal_pengembalian));
							}
						?>
					</td>
					<td><?php echo $tr->status_pengembalian ?></td>
					<td><?php echo $tr->status_rental ?></td>
					
				</tr>
			<?php endforeach; ?>
		</table>
		</div>
</div>