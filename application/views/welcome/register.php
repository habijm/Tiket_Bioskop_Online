<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="breadcrumbs">
						<?php echo anchor('home','Home');?>
							<span>Register</span>
						</div>
          
  <div class=" py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="shadow card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="<?php echo base_url()?>asset/dummy/login_bioskop2.png"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <?php echo $this->session->flashdata("message");?>
                <?php if($_SERVER['REQUEST_METHOD'] == "POST") echo "$err";  ?>

                <?php
                $attributes = array('autocomplete' => 'off');
                echo form_open_multipart("admin/customer/add",$attributes);
                ?>
                <form>

                  <div class="d-flex align-items-center mb-3 pb-1">
                    
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Setitik Film</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register to account</h5>

                  <div class="form-outline mb-4">
                     <label class="form-label" for="customer_name">Nama</label>
                    <input name="customer_name" type="text" id="customer_name" class="form-control form-control-lg" value="<?php echo set_value("nama");?>" />
                   
                  </div>
                   <div class="form-outline mb-4">
                     <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label><br>
                    <select value="<?php echo set_value("jenis_kelamin");?>" name="jenis_kelamin" id="jenis_kelamin">
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                    
                  </div>
                   <div class="form-outline mb-4">
                    <label class="form-label" for="alamat">Alamat</label>
                  </div>
                    <input name="alamat" type="text" id="alamat" class="form-control form-control-lg" value="<?php echo set_value("alamat");?>" required/>
                    
                   <div class="form-outline mb-4">
                     <label class="form-label" for="no_hp">No HP</label>
                    <input name="no_hp" type="text" id="no_hp" class="form-control form-control-lg" value="<?php echo set_value("no_hp");?>" required />
                    
                  </div>
                   <div class="form-outline mb-4">
                      <label class="form-label" for="email">Email</label>
                    <input name="email" type="email" id="email" class="form-control form-control-lg" value="<?php echo set_value("email");?>" required/>
                  
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input name="password" type="password"  id="password" class="form-control form-control-lg" value="<?php echo set_value("password");?>" required/>
                  </div>

                  <div class="pt-1 mb-4">
                   <input class="btn btn-primary" type="submit" name="submit" value="simpan">
                  </div>
                  <?php echo form_close();?>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Have an account?  <?php echo anchor('login','Log In!');?></a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

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