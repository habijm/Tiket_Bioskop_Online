<h1>
  <?php echo $judul;?>
  <span style="float:right">
  <?php echo anchor('admin/theater','<button class="btn btn-danger">Kembali</button>');?>
</span>
</h1>


<?php echo $this->session->flashdata("message");?>
<?php if($_SERVER['REQUEST_METHOD'] == "POST") echo "$err";  ?>

<?php
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/theater/add",$attributes);
?>
	<label for="nama_theater">Nama Theater</label>
	<input class="form-control"  name="nama_theater" type="text" id="nama_theater" placeholder="Masukkan nama theater" value="<?php echo set_value("nama_theater");?>" size="100%" required>
	<br> <br>

	<label for="daerah">Daerah</label>
	<input class="form-control"  name="daerah" type="text" id="daerah" placeholder="Masukkan lokasi theater" value="<?php echo set_value("daerah");?>" size="100%" required>
	<br> <br>

	<label for="alamat">Alamat</label>
	<input class="form-control" name="alamat" type="text" id="alamat" placeholder="Masukkan alamat lengkap theater" value="<?php echo set_value("alamat");?>" size="100%" required>
	<br> <br>

		<label for="phone">Phone</label>
	<input class="form-control" name="phone" type="text" id="phone" placeholder="Masukkan nomor telepon theater" value="<?php echo set_value("phone");?>" size="100%" required>
	<br> <br>

	<label for="kursi_image">Foto</label>
	<input class="form-control" name="kursi_image" type="file" id="kursi_image" required>
	<br> <br>

	<input class="btn btn-primary" type="submit" name="submit" value="simpan">

	<?php echo form_close();?>