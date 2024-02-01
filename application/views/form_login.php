<body class="hero-wrap" style="background-image: url('<?php echo base_url('assets/assets_stisla/assets/img/lambo1.jpg')?>');" data-stellar-background-ratio="0.5">
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?php echo base_url('assets/assets_stisla/') ?>/assets/img/mobil.png" alt="logo" width="100">
            </div>

            <div class="card card-primary" style="background: transparent;">
              <div class="card-header"><h4>Login</h4></div>
			  
			  <span class="m-2"><?= $this->session->flashdata('pesan'); ?></span>

              <div class="card-body">
                <form method="POST" action="<?= base_url('auth/login'); ?>">
                  <div class="form-group">
                    <label for="username" class="text-white">Username</label>
					<input type="hidden" name="id_customer">
                    <input style="background: transparent;" id="username" type="text" class="form-control text-white" name="username" tabindex="1" autofocus>
					<?= form_error('username', '<div class="text-small text-danger">','</div>'); ?>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label text-white">Password</label>
                    </div>
                    <input style="background: transparent;" id="password" type="password" class="form-control text-white" name="password" tabindex="2">
					<?= form_error('password', '<div class="text-small text-danger">','</div>'); ?>
                  </div>
				  
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-white text-center">
              Belum Punya Akun ? <a href="<?= base_url('register'); ?>">Registrasi lah</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>