<h1>
  <?php echo $judul;?>
  <span style="float:right">
  <?php echo anchor('admin/news/add','<button class="btn btn-success">Tambah Data</button>');?>
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
			<th>Foto</th>
			<th>Kategori</th>
			<th>Judul</th>
			<th>Deskripsi</th>
			<th>Rating</th>
			<th>Action</th>
	
			<?php
			foreach ($hasil as $key => $list)
			{
				?>
				<tr>
					<td align="center"><?php echo $i;?></td>
					<td align="justify">
						<img  width="150" height="220" src="<?php echo base_url();?>uploaded_files/<?php echo $list['NEWS_IMAGE'];?>" width="100%"></td>
					<td align="justify"><?php echo $list['NEWS_CAT_NAME'];?> </td>
					<td align="justify"><?php echo $list['NEWS_TITLE'];?> </td>
					<td align="justify"><?php echo $list['NEWS_DESCRIPTION'];?> </td>
						<td align="justify"><?php echo $list['RATING'];?>⭐</td>
					<td align="center">
						<?php echo anchor('admin/news/edit/'.$list['NEWS_ID'],'<button class="btn btn-primary">EDIT</button>','title="edit"');?>
						&nbsp;&nbsp;&nbsp;
						<?php
						$attr_del = array('onclick' => 'return confirmDel();','title' => 'delete');
						echo anchor('admin/news/delete/'.$list['NEWS_ID'],'<button class="btn btn-danger">DELETE</button>',$attr_del); 
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