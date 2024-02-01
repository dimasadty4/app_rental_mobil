<div class="container">

	<div class="card" style="margin-top: 200px; margin-bottom: 50px">
		<div class="card-header">
			Form Rental Mobil
		</div>
		
		<div class="card-body">
			<?php foreach($detail as $dt) : ?>
				
				<form method="POST" action="<?= base_url('customer/rental/tambah_rental_aksi'); ?>">

					<div class="form-group">
						<label>Harga Sewa/Hari</label>
						<input type="hidden" name="id_mobil" value="<?= $dt->id_mobil; ?>">
						<input type="text" name="harga" class="form-control" value="<?= $dt->harga; ?>" readonly>
					</div>
					
					<div class="form-group">
						<label>Denda/Hari</label>
						<input type="text" name="denda" class="form-control" value="<?= $dt->denda; ?>" readonly>
					</div>
					
					<div class="form-group">
						<label>Tanggal Rental</label>
						<input type="date" name="tanggal_rental" class="form-control">
					</div>
					
					<div class="form-group">
						<label>Tanggal Kembali</label>
						<input type="date" name="tanggal_kembali" class="form-control">
					</div>
					
					<button type="submit" class="btn btn-warning">Rental</button>
					
					
				</form>
			<?php endforeach; ?>
		</div>
	</div>
</div>