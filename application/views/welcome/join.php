<main class="main-content">
	<div class="container">
		<div class="page">
			<div class="breadcrumbs">
				<?php echo anchor('home', 'Home'); ?>
				<span>Theater</span>
			</div>

			<!-- <div class="content">
				<div class="filters">
					<select name="#" id="#" placeholder="Choose Category">
						<option value="#">Ambon</option>
						<option value="#">Balikpapan</option>
						<option value="#">Bandung</option>
						<option value="#">Banjarmasin</option>
						<option value="#">Batam</option>
						<option value="#">Bekasi</option>
						<option value="#">Bengkulu</option>
						<option value="#">Bogor</option>
						<option value="#">Cianjur</option>
						<option value="#">Cikarang</option>
						<option value="#">Cilegon</option>
						<option value="#">Cirebon</option>
						<option value="#">Denpasar</option>
						<option value="#">Dumai</option>
						<option value="#">Garut</option>
						<option value="#">Gorontalo</option>
						<option value="#">Gresik</option>
						<option value="#">Jakarta</option>
						<option value="#">Jambi</option>
						<option value="#">Jayapura</option>
						<option value="#">Jember</option>
							<option value="#">Yogyakarta</option>
					</select>
				</div>
			</div> -->
			<?php
			//cek apakah ada data atau tidak dari database
			if (count($hasil) > 0) {
				// jika terdapat data
				foreach ($hasil as $key => $list) {
			?>

					<div class="card m-2">
						<div class="card-body">
							<h5 class="card-title"><?php echo $list['NAMA_THEATER']; ?></h5>
							<p class="card-text"><?php echo $list['ALAMAT']; ?>



						</div>
						<div class="card-footer">
							<small class="text-muted"><?php echo $list['PHONE']; ?><br></small>
						</div>
					</div><br>


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
	</div>
	</div> <!-- .container -->
</main>