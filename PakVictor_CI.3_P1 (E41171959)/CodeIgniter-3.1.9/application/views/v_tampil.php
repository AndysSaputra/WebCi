<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>
	<center><?php echo anchor('tambahbarang/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>Kode Barang</th>
			<th>Nama</th>
			<th>Deskripsi</th>
			<th>stok</th>
			<th>harga</th>
			<th>Action</th>
		</tr>
		<?php 
		foreach($barang as $u){ 
		?>
		<tr>
			<td><?php echo $u->kdbarang ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->deskripsi ?></td>
			<td><?php echo $u->stok ?></td>
			<td><?php echo $u->harga ?></td>
			<td>
			      <?php echo anchor('tambahbarang/edit/'.$u->kdbarang,'Edit'); ?>
                              <?php echo anchor('tambahbarang/hapus/'.$u->kdbarang,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>