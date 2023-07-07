<h1>
  <?php echo $judul;?>
  <span style="float:right">
  <?php echo anchor('admin/theater/add','<button class="btn btn-success">Tambah Data</button>');?>
</span>
</h1>

<?php echo $this->session->flashdata("message");?>

<?php
if (count($hasil) > 0) 
{
	// jika ditemukan data maka eksekusi kode ini
	$i=1;
	?>
		<table class="table table-bordered" width="100%" border="1" cellpadding="5" cellspacing="5">
			<th>No.</th>
			<th>Nama Theater</th>
			<th>Daerah</th>
			<th>Alamat</th>
			<th>Phone</th>
			<th>Layout Kursi</th>
			<th>Action</th>
			<?php
			foreach ($hasil as $key => $list)
			{
				?>
				<tr>
					<td align="center"><?php echo $i;?></td>
					<td align="justify"><?php echo $list['NAMA_THEATER'];?> </td>
					<td align="justify"><?php echo $list['DAERAH'];?> </td>
					<td align="justify"><?php echo $list['ALAMAT'];?> </td>
					<td align="justify"><?php echo $list['PHONE'];?> </td>
					<td align="justify">
						<img  src="<?php echo base_url();?>uploaded_files/<?php echo $list['KURSI_IMAGE'];?>" width="100%">
					</td>
					<td align="center">
						<?php echo anchor('admin/theater/edit/'.$list['THEATER_ID'],'<button class="btn btn-primary">EDIT</button>','title="edit"');?>
						&nbsp;&nbsp;&nbsp;
						<?php
						$attr_del = array('onclick' => 'return confirmDel();','title' => 'delete');
						echo anchor('admin/theater/delete/'.$list['THEATER_ID'],'<button class="btn btn-danger">DELETE</button>',$attr_del); 
						?>
						<script>
function confirmDel(){
confirm ("yakin ingin hapus?");
}
</script>
					</td>
				</tr>
				<?php
				$i++;
			}
			?>
		</table>
	<?php
}
else
{
	//jika tidak ada maka tampilkan notifikasi
	?>
	<p>Data tidak ada</p>
	<?php
}

?>