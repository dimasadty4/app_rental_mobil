<body class="hero-wrap" style="background-image: url('<?php echo base_url('assets/assets_stisla/assets/img/lambo1.jpg')?>');" data-stellar-background-ratio="0.5">
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?php echo base_url('assets/assets_stisla/') ?>/assets/img/mobil.png" alt="logo" width="100">
            </div>

            <div class="card card-primary" style="background: transparent;">
				<div class="card-header"><h4>Register</h4></div>

            <div class="card-body">
            <form method="POST" action="<?php echo base_url('register') ?>">
                <div class="row">
                    <div class="form-group col-6">
                      <label for="nama" class="text-white">Nama</label>
                      <input style="background: transparent" id="nama" type="text" class="form-control text-white" name="nama" autofocus>
					  <?= form_error('nama', '<div class="text-small text-danger">','</div>'); ?>
                    </div>
                    <div class="form-group col-6">
                      <label for="username" class="text-white">Username</label>
                      <input style="background: transparent" id="username" type="text" class="form-control text-white" name="username">
					  <?= form_error('username', '<div class="text-small text-danger">','</div>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="alamat" class="text-white">Alamat</label>
                    <input  style="background: transparent"id="alamat" type="text" class="form-control text-white" name="alamat">
					<?= form_error('alamat', '<div class="text-small text-danger">','</div>'); ?>
                    <div class="invalid-feedback">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                      <label for="gender" class="d-block text-white">Gender</label>
					  <select style="background: transparent" class="form-control text-white" name="gender">
						<option value="">-- Pilih Gender --</option>
						<option>Laki-laki</option>
						<option>Perempuan</option>
					  </select>
					  <?= form_error('gender', '<div class="text-small text-danger">','</div>'); ?>
                    </div>
					
                    <div class="form-group col-6">
                      <label for="no_telepon" class="d-block text-white">No. Telepon</label>
                      <input style="background: transparent" id="no_telepon" type="text" class="form-control text-white" name="no_telepon">
					  <?= form_error('no_telepon', '<div class="text-small text-danger">','</div>'); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                      <label class="text-white">No. KTP</label>
                      <input style="background: transparent" type="text" name="no_ktp" class="form-control text-white">
					  <?= form_error('no_ktp', '<div class="text-small text-danger">','</div>'); ?>
                    </div>
					
                    <div class="form-group col-6">
                      <label class="text-white">Password</label>
                      <input style="background: transparent" type="password" name="password" class="form-control text-white">
					  <?= form_error('password', '<div class="text-small text-danger">','</div>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                </div>
            </form>
			</div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>