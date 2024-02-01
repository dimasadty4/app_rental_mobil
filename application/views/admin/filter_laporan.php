<div class="main-content">
    <section class="section">
		<div class="section-header">
			<h1>Filter Laporan Transaksi</h1>
		</div>
	</section>
	
	<form method="POST" action="<?= base_url('admin/laporan'); ?>">
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
	</form>
</div>