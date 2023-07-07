<h1>
  <?php echo $judul;?>
  <span style="float:right">
  <?php echo anchor('admin/kursi','<button class="btn btn-danger">Kembali</button>');?>
</span>
</h1>


<?php echo $this->session->flashdata("message");?>
<?php if($_SERVER['REQUEST_METHOD'] == "POST") echo "$err";  ?>

<?php
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/kursi/edit/".$hasil['KURSI_ID'],$attributes);
?>
	<label for="kursi_row">Kategori</label>
	<input class="form-control"  name="kursi_row" type="text" id="kursi_row" value="<?php echo $hasil["KURSI_ROW"];?>" size="100%" required>
	<br> <br>
	<input class="btn btn-primary" type="submit" name="submit" value="simpan">

	<?php echo form_close();?>