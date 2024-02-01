<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Dashboard</h1>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-primary">
						<a href="<?= base_url('admin/data_customer'); ?>"><i class="fas fa-users"></i></a>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4 class="text-primary">Customer</h4>
						</div>
						<div class="card-body">
							<?= $this->ModelRental->getUserWhere(['role_id' => 2])->num_rows(); ?> Orang
						</div>
					</div>
				</div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-danger">
						<a href="<?= base_url('admin/data_mobil'); ?>"><i class="fas fa-car"></i></a>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4 class="text-danger">Jumlah Mobil</h4>
						</div>
						<div class="card-body">
							<?= $this->ModelRental->get_data('mobil')->num_rows(); ?> Mobil
						</div>
					</div>
				</div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-warning">
						<a href="<?= base_url('admin/data_type'); ?>"><i class="fas fa-clone"></i></a>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4 class="text-warning">Jumlah Type</h4>
						</div>
						<div class="card-body">
							<?= $this->ModelRental->get_data('type')->num_rows(); ?> Type
						</div>
					</div>
				</div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-success">
						<a href="<?= base_url('admin/transaksi'); ?>"><i class="fas fa-briefcase"></i></a>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4 class="text-success">Total Transaksi</h4>
						</div>
						<div class="card-body">
							<?= $this->ModelRental->get_data('transaksi')->num_rows(); ?> Transaksi
						</div>
					</div>
				</div>
            </div>
		</div>
		<h1>User Visit</h1>
				<span>Januari</span>
				<div class="progress">
		 		 <div class="progress-bar  bg-primary" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%
		 		 	</div>
				</div>
				<span>Februari</span>
				<div class="progress ">
				 <div class="progress-bar  bg-primary" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">65%
				 	</div>
				</div>
				<span>Maret</span>
						<div class="progress">
				  <div class="progress-bar  bg-primary" role="progressbar" style="width: 68%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">68%
				  	</div>
				</div>
				
			</div>
		</div>
	</section>
</div>