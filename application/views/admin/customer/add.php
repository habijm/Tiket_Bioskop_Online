<h1>
	<?php echo $judul; ?>
	<span style="float:right">
		<?php echo anchor('admin/customer', '<button class="btn btn-danger">Kembali</button>'); ?>
	</span>
</h1>


<?php echo $this->session->flashdata("message"); ?>
<?php if ($_SERVER['REQUEST_METHOD'] == "POST") echo "$err";  ?>

<?php
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/customer/add", $attributes);
?>
<label for="customer_name">Nama Customer</label>
<input name="customer_name" type="text" id="customer_name" placeholder="Masukkan nama Customer " value="<?php echo set_value("customer_name"); ?>" size="100%" required>
<br> <br>

<label for="jenis_kelamin">Jenis Kelamin</label>
<input name="jenis_kelamin" type="text" id="jenis_kelamin" placeholder="Masukkan jenis kelamin" value="<?php echo set_value("jenis_kelamin"); ?>" size="100%" required>
<br> <br>

<label for="alamat">Alamat</label>
<input name="alamat" type="text" id="alamat" placeholder="Masukkan alamat customer" value="<?php echo set_value("alamat"); ?>" size="100%" required>
<br> <br>

<label for="no_hp">Phone</label>
<input name="no_hp" type="text" id="no_hp" placeholder="Masukkan nomor telepon customer" value="<?php echo set_value("no_hp"); ?>" size="100%" required>
<br> <br>

<label for="email">Email </label>
<input name="email" type="text" id="email" placeholder="Masukkan email customer" value="<?php echo set_value("email"); ?>" size="100%" required>
<br> <br>

<label for="password">Password </label>
<input name="password" type="text" id="password" placeholder="Masukkan password" value="<?php echo set_value("email"); ?>" size="100%" required>
<br> <br>

<input class="btn btn-primary" type="submit" name="submit" value="simpan">

<?php echo form_close(); ?>