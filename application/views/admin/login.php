<head>
  <title>Admin Setitik</title>
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>/asset/admin/images/logos/logo.png" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>


<main class="main-content">
  <div class="container">
    <div class="page">
      <div class="breadcrumbs">
        <?php
        $attributes = array('autocomplete' => 'off');
        echo form_open_multipart("admin/login/cek_login", $attributes);
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
                        <span class="h1 fw-bold mb-0">Admin Setitik Film</span>
                      </div>

                      <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                      <?php echo $this->session->flashdata("message"); ?><br>
                      <form>
                        Username: <input class="form-control form-control-lg" type="text" name="cms_user" id="cms_user" required />
                        <br> <br>
                        Password: <input class="form-control form-control-lg" type="password" name="cms_password" id="cms_password" required />
                        <br><br>
                        <input class="btn btn-outline-light btn-lg px-5" type="submit" name="submit" value="login" />
                      </form>
                      <p> <?php echo anchor('home', 'Go To Frontend!'); ?></p>
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