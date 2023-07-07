<main class="main-content">
	<div class="container">
		<div class="page">
			<div class="row">
				<div class="col-lg">
					<div class="slider">
						<ul class="slides">
							<?php
							//cek apakah ada data atau tidak dari database
							if (count($hasil4) > 0) {
								// jika terdapat data
								foreach ($hasil4 as $key => $list) {
							?>
									<!--Slide Iklan-->
									<li><a href="#"><img src="<?php echo base_url(); ?>uploaded_files/<?php echo $list['IKLAN_IMAGE']; ?>" alt="<?php echo $list['IKLAN_IMAGE']; ?>"></a></li>
								<?php

								}
							} else {
								//jika tidak ada maka tampilkan notifikasi
								?>
								<h1>Data Not Avaible...</h1>
							<?php
							}
							?>
						</ul>
					</div>
				</div>
			</div> <!-- .row -->



			<div class="row  mt-5">
				<?php
				//cek apakah ada data atau tidak dari database
				if (count($hasil3) > 0) {
					// jika terdapat data
					foreach ($hasil3 as $key3 => $list3) {
				?>
						<h2 class="section-title mt-5" style="color:black;"><?php echo $list3['NEWS_CAT_NAME']; ?></h2>
						<div class="movie-list">
							<?php
							$film = $this->news_model->get_kategori($list3['NEWS_CAT_ID']);
							if (count($film) > 0) {
								// jika terdapat data
								foreach ($film as $key2 => $list2) {
							?>
									<div class="movie">
										<figure class="movie-poster"><img class="movie-poster" src="<?php echo base_url(); ?>uploaded_files/<?php echo $list2['NEWS_IMAGE']; ?>" alt="<?php echo $list2['NEWS_IMAGE']; ?>"></figure>
										<div class="movie-title"><?php echo $list2['NEWS_TITLE']; ?></div>
										<p><?php echo $list2['RATING']; ?>⭐</p>


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
							<div class="text-center">
								<button type="button" class="btn btn-dark"><?php echo anchor('movie', 'Lainnya'); ?></button>
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



			<div class="komentar layout_padding mt-5">
				<div class="row">
					<div class="col-md-12">
						<h1 class="about_taital">Tanggapan Customer</h1>
						<div class="bulit_icon"><img src="<?php echo base_url() ?>asset/dummy/bulit-icon.png"></div>
					</div>
				</div>
				<div class="slideshow-container">
					<?php
					//cek apakah ada data atau tidak dari database
					if (count($hasil2) > 0) {
						// jika terdapat data
						foreach ($hasil2 as $key => $list) {
					?>


							<!-- Full-width slides/quotes -->
							<div class="mySlides">
								<q><?php echo $list['PESAN']; ?></q>
								<p class="author">- <?php echo $list['KOMENTAR_NAME']; ?></p>
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
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>

				</div>
				<!-- Next/prev buttons -->

			</div>

		</div>
		<!-- .container -->

</main>