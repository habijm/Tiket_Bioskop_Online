<main class="main-content">
	<div class="container">
		<div class="page">
			<div class="breadcrumbs">
				<?php echo anchor('home', 'Home'); ?>
				<span>Kategori Film</span>
			</div>

			<!--<div class="filters">
							<select name="#" id="#" placeholder="Choose Category">
								<option value="#">Now Playing</option>
								<option value="#">Up Coming</option>
							</select>-->
		</div>
		<div class="movie-list">

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
									<button type="button" class="btn btn-success"><?php echo anchor('news/detail/' . $list2['NEWS_ID'], 'Beli Tiket',); ?></button>

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




				<?php

				}
			} else {
				//jika tidak ada maka tampilkan notifikasi
				?>
				<h1>Data Not Avaible...</h1>
			<?php
			}
			?>

		</div> <!-- .movie-list -->

		<div class="pagination">

			<span class="page-number current">1</span>
			<a href="#" class="page-number">2</a>
			<a href="#" class="page-number">3</a>
		</div>

	</div>
	</div> <!-- .container -->
</main>