<main class="main-content">
	<div class="container">
		<div class="page">
			<div class="content">
				<?php
				//cek apakah ada data atau tidak dari database
				if (count($hasil) > 0) {
					// jika terdapat data

				?>

					<img class="img1 borderedbox inspace-5" src="<?php echo base_url(); ?>uploaded_files/<?php echo $hasil['NEWS_IMAGE']; ?>" alt="<?php echo $hasil['NEWS_IMAGE']; ?>">
					<h1 class="movie-title"><?php echo $hasil['NEWS_TITLE']; ?></h1>
					<p><?php echo $hasil['NEWS_DESCRIPTION']; ?></p>

				<?php

				} else {
					//jika tidak ada maka tampilkan notifikasi
				?>
					<h1>Data Not Avaible...</h1>
				<?php
				}
				?>

				<?php echo $this->session->flashdata("message"); ?>
				<?php if ($_SERVER['REQUEST_METHOD'] == "POST") echo "$err";  ?>

				<?php
				$attributes = array('autocomplete' => 'off');
				echo form_open_multipart("admin/transaksi/add", $attributes);
				?>
				<h3 class="mt-5">Beli Tiket</h3>
				<form class="row g-3">

					<div class="form-group">
						<label for="nama">Nama Customer </label>
						<input class="form-control" name="nama" type="text" id="nama" placeholder="Masukkan Nama" value="<?php echo set_value("nama"); ?>" size="100%" required>
					</div>

					<div class="form-group mt-2">
						<label for="email">Email </label>
						<input class="form-control" name="email" type="text" id="email" placeholder="Masukkan email" value="<?php echo set_value("alamat"); ?>" size="100%" required>
					</div>

					<div class="form-group mt-2">
						<label for="theater_fid">Pilih Theater </label><br>
						<?php
						$opsi_theater = $this->theater_model->get_drop_down();
						echo form_dropdown('theater_fid', $opsi_theater, set_value('theater_fid'));
						?>
					</div><br>

					<div class="form-group mt-2">
						<label for="news_fid">Pilih Film </label><br>
						<?php
						$opsi_news = $this->news_model->get_drop_down();
						echo form_dropdown('news_fid', $opsi_news, set_value('news_fid'));
						?>
					</div><br>

					<div class="form-group mt-2">
						<label for="tanggal">Pilih Tanggal</label>
						<input name="tanggal" type="date" id="tanggal" value="<?php echo set_value("tanggal"); ?>" size="100%" required class="form-control">
					</div>

					<div class="form-group mt-3 mb-5">
						<label for="waktu" class="form-label">Waktu</label>
						<select value="<?php echo set_value("waktu"); ?>" name="waktu" id="waktu" id="inputState" class="form-select">
							<option value="10:30" selected>10:30</option>
							<option value="13:10">13:10</option>
							<option value="15:50">15:50</option>
							<option value="18:30">18:30</option>
							<option value="21:10">21:10</option>
						</select>
					</div>

					<!--Tampilan Daftar Kursi-->
					<div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
						<?php
						//cek apakah ada data atau tidak dari database
						if (count($hasil2) > 0) {
							// jika terdapat data
							foreach ($hasil2 as $key => $list2) {
						?>
								<div class="col">
									<div class="card h-100">
										<img src="<?php echo base_url(); ?>uploaded_files/<?php echo $list2['KURSI_IMAGE']; ?>" class="card-img-top" alt="<?php echo $list2['KURSI_IMAGE']; ?>">
										<div class="card-body">
											<h5 class="card-title"><?php echo $list2['NAMA_THEATER']; ?></h5>

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



					<div class=" form-group mt-3">
						<label for="kursi_fid">Pilih Kursi </label><br>
						<?php
						$opsi_kursi = $this->kursi_model->get_drop_down();
						echo form_dropdown('kursi_fid', $opsi_kursi, set_value('kursi_fid'));
						?>
					</div>

					<div class="form-group mt-3">
						<label for="harga">Pilih Harga:</label> <br>
						<select value="<?php echo set_value("harga"); ?>" name="harga" id="harga" class="form-select">
							<option value="50.000" selected>50.000</option>
						</select>
					</div>

					<div class="form-group mt-3">
						<label for="pembayaran">Pilih Metode Pembayaran: </label> <br>
						<select value="<?php echo set_value("pembayaran"); ?>" name="pembayaran" id="pembayaran" class="form-select">
							<option value="Shopeepay">Shopeepay</option>
							<option value="Gopay">Gopay</option>
							<option value="Dana">Dana</option>
						</select>
					</div>

					<div class="form-group  mt-3">
						<input class="btn btn-primary " type="submit" name="submit" value="simpan">
					</div>
				</form>
				<?php echo form_close(); ?>

				<div>
					<button type="button" class="btn btn-success mt-5"><?php echo anchor('home', 'back'); ?></button>
				</div>

			</div>
		</div>
	</div> <!-- .container -->
</main>