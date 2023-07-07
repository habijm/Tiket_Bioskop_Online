<h1>
	<?php echo $judul; ?>
	<span style="float:right">
		<?php echo anchor('admin/iklan', '<button class="btn btn-danger">Kembali</button>'); ?>
	</span>
</h1>


<?php echo $this->session->flashdata("message"); ?>
<?php if ($_SERVER['REQUEST_METHOD'] == "POST") echo "$err";  ?>

<?php
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/iklan/add", $attributes);
?>


<label for="iklan_name">Nama Iklan </label>
<input class="form-control" name="iklan_name" type="text" id="iklan_name" placeholder="Masukkan judul iklan" value="<?php echo set_value("iklan_name"); ?>" size="100%" required>
<br> <br>

<label for="iklan_image">Banner Iklan </label>
<input class="form-control" name="iklan_image" type="file" id="iklan_image" required>
<br> <br>

<input class="btn btn-primary" type="submit" name="submit" value="simpan">

<?php echo form_close(); ?>