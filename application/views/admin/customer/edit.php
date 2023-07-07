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
echo form_open_multipart("admin/customer/edit/" . $hasil['CUSTOMER_ID'], $attributes);
?>
<label for="customer_name">Nama Customer</label>
<input class="form-control" name="customer_name" type="text" id="customer_name" value="<?php echo $hasil['CUSTOMER_NAME']; ?>" size="100%" required>
<br> <br>

<label for="jenis_kelamin">Jenis Kelamin</label>
<input class="form-control" name="jenis_kelamin" type="text" id="jenis_kelamin" value="<?php echo $hasil['JENIS_KELAMIN']; ?>" size="100%" required>
<br> <br>

<label for="alamat">Alamat</label>
<input class="form-control" name="alamat" type="text" id="alamat" value="<?php echo $hasil['ALAMAT']; ?>" size="100%" required>
<br> <br>

<label for="no_hp">Phone</label>
<input class="form-control" name="no_hp" type="text" id="no_hp" value="<?php echo $hasil['NO_HP']; ?>" size="100%" required>
<br> <br>

<label for="email">Email </label>
<input class="form-control" name="email" type="text" id="email" value="<?php echo $hasil['EMAIL']; ?>" size="100%" required>
<br> <br>
<label for="password">Password </label>
<input class="form-control" name="password" type="text" id="password" value="<?php echo $hasil['PASSWORD']; ?>" size="100%" required>
<br> <br>

<input class="btn btn-primary" type="submit" name="submit" value="simpan">

<?php echo form_close(); ?>