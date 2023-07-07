<h1>
	<?php echo $judul; ?>
	<span style="float:right">
		<!--<?php echo anchor('admin/transaksi/add', '<button class="btn btn-success">Tambah Data</button>'); ?>-->
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
		<th>Nama Theater</th>
		<th>Nama Film</th>
		<th>Kursi</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Tanggal</th>
		<th>Waktu</th>
		<th>Harga</th>
		<th>Pembayaran</th>
		<th>Action</th>
		<?php
		foreach ($hasil as $key => $list) {
		?>
			<tr>
				<td align="center"><?php echo $i; ?></td>
				<td align="justify"><?php echo $list['NAMA_THEATER']; ?> </td>
				<td align="justify"><?php echo $list['NEWS_TITLE']; ?> </td>
				<td align="justify"><?php echo $list['KURSI_ROW']; ?> </td>
				<td align="justify"><?php echo $list['NAMA']; ?> </td>
				<td align="justify"><?php echo $list['EMAIL']; ?> </td>
				<td align="justify"><?php echo $list['TANGGAL']; ?> </td>
				<td align="justify"><?php echo $list['WAKTU']; ?> </td>
				<td align="justify"><?php echo $list['HARGA']; ?> </td>
				<td align="justify"><?php echo $list['PEMBAYARAN']; ?> </td>
				<td align="center">
					<?php echo anchor('admin/transaksi/edit/' . $list['TRANSAKSI_ID'], '<button class="btn btn-primary">EDIT</button>', 'title="edit"'); ?>
					&nbsp;&nbsp;&nbsp;
					<?php
					$attr_del = array('onclick' => 'return confirmDel();', 'title' => 'delete');
					echo anchor('admin/transaksi/delete/' . $list['TRANSAKSI_ID'], '<button class="btn btn-danger">DELETE</button>', $attr_del);
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