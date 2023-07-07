<h1>
  <?php echo $judul;?>
  <span style="float:right">
  <?php echo anchor('admin/news_cat','<button class="btn btn-danger">Kembali</button>');?>
</span>
</h1>


<?php echo $this->session->flashdata("message");?>
<?php if($_SERVER['REQUEST_METHOD'] == "POST") echo "$err";  ?>

<?php
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/news_cat/add",$attributes);
?>
	<label for="news_cat_name">Kategori</label>
	<input class="form-control"  name="news_cat_name" type="text" id="news_cat_name" placeholder="Ketikan kategori, misal: sport, kuliner, politik, dll" value="<?php echo set_value("news_cat_name");?>" size="100%" required>
	<br> <br>
	<input class="btn btn-primary" type="submit" name="submit" value="simpan">

	<?php echo form_close();?>