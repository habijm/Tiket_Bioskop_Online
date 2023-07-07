<h1>
	<?php echo $judul; ?>
	<span style="float:right">
		<?php echo anchor('admin/about', '<button class="btn btn-danger">Kembali</button>'); ?>
	</span>
</h1>


<?php echo $this->session->flashdata("message"); ?>
<?php if ($_SERVER['REQUEST_METHOD'] == "POST") echo "$err";  ?>

<?php
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/about/add", $attributes);
?>


<label for="about_title">Judul</label>
<input class="form-control" name="about_title" type="text" id="about_title" placeholder="tuliskan judul about" value="<?php echo set_value("about_title"); ?>" size="100%" required>
<br> <br>

<label for="about_description">Deskripsi</label>
<input class="form-control" name="about_description" type="text" id="about_description" placeholder="tuliskan deskripsi about" value="<?php echo set_value("about_description"); ?>" size="100%" required>
<br> <br>

<label for="about_image">Foto</label>
<input class="form-control" name="about_image" type="file" id="about_image" required>
<br> <br>

<input class="btn btn-primary" type="submit" name="submit" value="simpan">

<?php echo form_close(); ?>