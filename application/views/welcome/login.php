<main class="main-content">
  <div class="container">
    <div class="page">
      <div class="breadcrumbs">
        <?php echo anchor('home', 'Home'); ?>
        <span>Login</span>
      </div>
  <?php
                $attributes = array('autocomplete' => 'off');
                echo form_open_multipart("login/cek_login", $attributes);
                ?>

      <div class=" py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="shadow card" style="border-radius: 1rem;">
              <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                  <img src="<?php echo base_url() ?>asset/dummy/login_bioskop2.png" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">
                      <div class="d-flex align-items-center mb-3 pb-1">
                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                        <span class="h1 fw-bold mb-0">Setitik Film</span>
                      </div>

                      <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                        
                          <?php echo $this->session->flashdata("message"); ?><br>
                          <form>
                            Username: <input class="form-control form-control-lg" type="text" name="email" id="email" required />
                            <br> <br>
                            Password: <input class="form-control form-control-lg" type="password" name="password" id="password" required />
                            <br><br>
                            <input class="btn btn-outline-light btn-lg " type="submit" name="submit" value="login" />
                          </form> 

                      <p class="mt-3 mb-2 pb-lg-2" style="color: #393f81;">Don't have an account? <?php echo anchor('register', 'Register Here!'); ?></p>
                      <p  style="color: #393f81;"><?php echo anchor('admin/login', 'Login Admin'); ?></p>
                      <a href="#!" class="small text-muted">Terms of use.</a>
                      <a href="#!" class="small text-muted">Privacy policy</a>
                  

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .container -->
</main>