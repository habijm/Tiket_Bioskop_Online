<h1>
	<?php echo $judul; ?>
	<span style="float:right">
		<!--<?php echo anchor('admin/about/add', '<button class="btn btn-success">Tambah Data</button>'); ?>-->
	</span>
</h1>

<?php echo $this->session->flashdata("message"); ?>

<?php
if (count($hasil) > 0) {
	// jika ditemukan data maka eksekusi kode ini
	$i = 1;
?>
	<table class="table table-bordered">

		<th scope="col">No.</th>
		<th scope="col">Foto</th>
		<th scope="col">Judul</th>
		<th scope="col">Deskripsi</th>
		<th scope="col">Action</th>
		<?php
		foreach ($hasil as $key => $list) {
		?>
			<tbody>
				<tr>
					<td align="center"><?php echo $i; ?></td>
					<td align="justify">
						<img width="250" height="125" src="<?php echo base_url();?>uploaded_files/<?php echo $list['ABOUT_IMAGE'];?>" width="100%">
					</td>
					<td align="justify"><?php echo $list['ABOUT_TITLE']; ?> </td>
					<td align="justify"><?php echo $list['ABOUT_DESCRIPTION']; ?> </td>
					<td align="center">
						<?php echo anchor('admin/about/edit/' . $list['ABOUT_ID'], '<button class="btn btn-primary">EDIT</button>', 'title="edit"'); ?>
						&nbsp;&nbsp;&nbsp;
						<!--<?php
						$attr_del = array('onclick' => 'return confirmDel();', 'title' => 'delete');
						echo anchor('admin/about/delete/' . $list['ABOUT_ID'], '<button class="btn btn-danger">DELETE</button>', $attr_del);
						?>-->
						<script>
							function confirmDel() {
								confirm("yakin ingin hapus?");
							}
						</script>
					</td>
				</tr>
			</tbody>
		<?php
			$i++;
		}
		?>
	</table>
<?php
} else {
	//jika tidak ada maka tampilkan notifikasi
?>
	<p>Data tidak ada</p>
<?php
}

?>