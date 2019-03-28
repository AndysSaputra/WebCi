<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('barang_controller/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Deskripsi</th>
										<th>Stok Barang</th>
										<th>Harga Barang</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($barang as $barang): ?>
									<tr>
										<td width="150">
											<?php echo $barang->nama ?>
										</td>
		
										
										<td class="small">
											<?php echo substr($barang->deskripsi, 0, 120) ?>...</td>
                                        <td>
											<?php echo $barang->stokbarang ?>
										</td>
                                        <td>
											<?php echo $barang->hargabarang ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('barang_controller/edit/'.$barang->kdbarang) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('barang_controller/delete/'.$barang->kdbarang) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	
	<?php $this->load->view("admin/_partials/modal") ?>

	<?php $this->load->view("admin/_partials/js") ?>

<script>
	function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>


</body>

</html>