<h1>
	<?php echo $judul; ?>
	<span style="float:right">
		<?php echo anchor('admin/komentar', '<button class="btn btn-danger">Kembali</button>'); ?>
	</span>
</h1>


<?php echo $this->session->flashdata("message"); ?>
<?php if ($_SERVER['REQUEST_METHOD'] == "POST") echo "$err";  ?>

<?php
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/komentar/add", $attributes);
?>


<label for="komentar_name">Nama Pengomentar </label>
<input name="komentar_name" type="text" id="komentar_name" placeholder="Masukkan nama pengomentar" value="<?php echo set_value("komentar_name"); ?>" size="100%" required>
<br> <br>


<label for="email">Email </label>
<input name="email" type="text" id="email" placeholder="Masukkan email" value="<?php echo set_value("email"); ?>" size="100%" required>
<br> <br>

<label for="pesan">Pesan </label>
<input name="pesan" type="text" id="pesan" placeholder="Masukkan pesan" value="<?php echo set_value("pesan"); ?>" size="100%" required>
<br> <br>

<input class="btn btn-primary" type="submit" name="submit" value="simpan">

<?php echo form_close(); ?>