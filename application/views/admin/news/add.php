<h1>
  <?php echo $judul;?>
  <span style="float:right">
  <?php echo anchor('admin/news','<button class="btn btn-danger">Kembali</button>');?>
</span>
</h1>


<?php echo $this->session->flashdata("message");?>
<?php if($_SERVER['REQUEST_METHOD'] == "POST") echo "$err";  ?>

<?php
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/news/add",$attributes);
?>
	<label for="news_cat_fid">Kategori</label>
	<?php
		$opsi_cat = $this->news_cat_model->get_drop_down();
		echo form_dropdown('news_cat_fid',$opsi_cat,set_value('news_cat_fid'));
	?>
	<br/> <br/>

	<label for="news_title">Judul</label>
	<input class="form-control"  name="news_title" type="text" id="news_title" placeholder="tuliskan judul berita" value="<?php echo set_value("news_title");?>" size="100%" required>
	<br> <br>

	<label for="news_description">Deskripsi</label>
	<input class="form-control"  name="news_description" type="text" id="news_description" placeholder="tuliskan deskripsi berita" value="<?php echo set_value("news_description");?>" size="100%" required>
	<br> <br>

	<label for="rating">Rating</label>
	<input class="form-control"  name="rating" type="text" id="rating" placeholder="Isi rating film" value="<?php echo set_value("rating");?>" size="100%" required>
	<br> <br>

	<label for="news_image">Foto</label>
	<input class="form-control"  name="news_image" type="file" id="news_image" required>
	<br> <br>

	<input class="btn btn-primary" type="submit" name="submit" value="simpan">

	<?php echo form_close();?>