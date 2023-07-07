<h1>
	<?php echo $judul; ?>
	<span style="float:right">
		<?php echo anchor('admin/transaksi', '<button class="btn btn-danger">Kembali</button>'); ?>
	</span>
</h1>


<?php echo $this->session->flashdata("message"); ?>
<?php if ($_SERVER['REQUEST_METHOD'] == "POST") echo "$err";  ?>

<?php
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/transaksi/add", $attributes);
?>
	<label for="theater_fid">Pilih Theater </label>
	<?php
		$opsi_theater = $this->theater_model->get_drop_down();
		echo form_dropdown('theater_fid',$opsi_theater,set_value('theater_fid'));
	?>
	<br/> <br/>

	<label for="news_fid">Pilih Film </label>
	<?php
		$opsi_news = $this->news_model->get_drop_down();
		echo form_dropdown('news_fid',$opsi_news,set_value('news_fid'));
	?>
	<br/> <br/>

	<label for="kursi_fid">Pilih Kursi </label>
	<?php
	$opsi_kursi = $this->kursi_model->get_drop_down();
    echo form_dropdown('kursi_fid', $opsi_kursi, set_value('kursi_fid'));
	?> <br><br>

	<label for="nama">Nama Customer </label>
	<input class="form-control" name="nama" type="text" id="nama" placeholder="Masukkan Nama" value="<?php echo set_value("nama"); ?>" size="100%" required>
	<br> <br>

	<label for="email">Email </label>
	<input class="form-control" name="email" type="text" id="email" placeholder="Masukkan email" value="<?php echo set_value("email"); ?>" size="100%" required>
	<br> <br>

	<label for="tanggal">Pilih Tanggal</label>
	<input name="tanggal" type="date" id="tanggal"  value="<?php echo set_value("tanggal"); ?>" size="100%" required class="form-control">
	<br> <br>

	<label for="waktu" class="form-label">Waktu</label>
	<select value="<?php echo set_value("waktu"); ?>" name="waktu" id="waktu" id="inputState" class="form-select">
		<option value="10:30" selected>10:30</option>
 		<option value="13:10">13:10</option>
		<option value="15:50">15:50</option>
		<option value="18:30">18:30</option>
		<option value="21:10">21:10</option>
	</select>
	<br> <br>


	<label for="harga">Pilih Harga:</label> <br>
	<select value="<?php echo set_value("harga"); ?>" name="harga" id="harga" class="form-select">
		<option value="50.000" selected>50.000</option>
	</select><br>
			

	<label for="pembayaran">Pilih Metode Pembayaran: </label> <br>
	<select value="<?php echo set_value("pembayaran"); ?>" name="pembayaran" id="pembayaran" class="form-select">
		<option value="Shopeepay">Shopeepay</option>
		<option value="Gopay">Gopay</option>
		<option value="Dana">Dana</option>
	</select><br>

	<input class="btn btn-primary" type="submit" name="submit" value="simpan">

<?php echo form_close(); ?>