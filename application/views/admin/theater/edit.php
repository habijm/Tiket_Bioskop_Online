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
echo form_open_multipart("admin/theater/edit/".$hasil['THEATER_ID'],$attributes);
?>
	<label for="nama_theater">Nama Theater</label>
	<input class="form-control"  name="nama_theater" type="text" id="nama_theater" value="<?php echo $hasil["NAMA_THEATER"];?>" size="100%" required>
	<br> <br>

	<label for="daerah">Daerah</label>
	<input class="form-control" name="daerah" type="text" id="daerah" value="<?php echo $hasil["DAERAH"];?>" size="100%" required>
	<br> <br>

	<label for="alamat">Alamat</label>
	<input class="form-control"  name="alamat" type="text" id="alamat" value="<?php echo $hasil["ALAMAT"];?>" size="100%" required>
	<br> <br>

		<label for="phone">Phone</label>
	<input class="form-control"  name="phone" type="text" id="phone" value="<?php echo $hasil["PHONE"];?>" size="100%" required>
	<br> <br>

	
	<label for="kursi_image">Foto</label>
<br>
<img width="150" height="220" src="<?php echo base_url(); ?>uploaded_files/<?php echo $hasil['KURSI_IMAGE']; ?>" width="100%"><br>
<input class="form-control" name="kursi_image" type="file" id="kursi_image" required>
<br> <br>

	<input class="btn btn-primary" type="submit" name="submit" value="simpan">

	<?php echo form_close();?>