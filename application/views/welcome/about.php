<main class="main-content">
	<div class="container">
		<div class="page">
			<div class="breadcrumbs">
				<?php echo anchor('home', 'Home'); ?>
				<span>About</span>
			</div>
			<?php
			//cek apakah ada data atau tidak dari database
			if (count($hasil) > 0) {
				// jika terdapat data
				foreach ($hasil as $key => $list) {
			?>
					<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
						<div class="col-10 col-sm-8 col-lg-6">
							<img src="<?php echo base_url(); ?>uploaded_files/<?php echo $list['ABOUT_IMAGE']; ?>" alt="<?php echo $list['ABOUT_IMAGE']; ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="1000" height="500" loading="lazy">
						</div>
						<div class="col-lg-6">

							<h1 class="display-5 fw-bold lh-1 mb-3"><?php echo $list['ABOUT_TITLE']; ?></h1>
							<p class="lead">
							<p><?php echo $list['ABOUT_DESCRIPTION']; ?></p>
							</p>
							<div class="d-grid gap-2 d-md-flex justify-content-md-start">

							</div>
						</div>
					</div>

				<?php

				}
			} else {
				//jika tidak ada maka tampilkan notifikasi
				?>
				<h1>Data Not Avaible...</h1>
			<?php
			}
			?>
		</div>
	</div> <!-- .container -->
</main>