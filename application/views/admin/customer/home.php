<h1>
	<?php echo $judul; ?>
	<span style="float:right">
		<!--<?php echo anchor('admin/customer/add', '<button class="btn btn-success">Tambah Data</button>'); ?>-->
	</span>
</h1>

<?php echo $this->session->flashdata("message"); ?>

<?php
if (count($hasil) > 0) {
	// jika ditemukan data maka eksekusi kode ini
	$i = 1;
?>
	<table class="table table-bordered" width="100%" border="1" cellpadding="5" cellspacing="5">
		<th>No.</th>
		<th>Nama Customer</th>
		<th>Jenis Kelamin</th>
		<th>Alamat</th>
		<th>No hp</th>
		<th>Email</th>
		<th>Password</th>
		<th>Action</th>
		<?php
		foreach ($hasil as $key => $list) {
		?>
			<tr>
				<td align="center"><?php echo $i; ?></td>
				<td align="justify"><?php echo $list['CUSTOMER_NAME']; ?> </td>
				<td align="justify"><?php echo $list['JENIS_KELAMIN']; ?> </td>
				<td align="justify"><?php echo $list['ALAMAT']; ?> </td>
				<td align="justify"><?php echo $list['NO_HP']; ?> </td>
				<td align="justify"><?php echo $list['EMAIL']; ?> </td>
				<td align="justify"><?php echo $list['PASSWORD']; ?> </td>
				<td align="center">
					<?php echo anchor('admin/customer/edit/' . $list['CUSTOMER_ID'], '<button class="btn btn-primary">EDIT</button>', 'title="edit"'); ?>
					&nbsp;&nbsp;&nbsp;
					<?php
					$attr_del = array('onclick' => 'return confirmDel();', 'title' => 'delete');
					echo anchor('admin/customer/delete/' . $list['CUSTOMER_ID'], '<button class="btn btn-danger">DELETE</button>', $attr_del);
					?>
				</td>
			</tr>
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
<script>
	function confirmDel() {
		confirm("yakin  ingin hapus?");
	}
</script>