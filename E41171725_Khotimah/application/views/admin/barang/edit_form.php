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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class ="modal-body">
				<?php foreach($barang as $barang){?>
				<form action="<?php echo base_url('index.php/').'barang_controller/update';?>"method="post">

						<div class="form-group">
							<label>Nama</label>
							<td>
							<input type="hidden" name="kdbarang" value="<?php echo $barang->kdbarang?>">
							<input type="text" class="form-control" name="nama" value="<?php echo $barang->nama?>">
							</td>
						</div>

						<div class="form-group">
							<label>Deskripsi</label>
							<td>
							<input type="text" class="form-control" name="deskripsi" value="<?php echo $barang->deskripsi?>">
							</td>
						</div>

						<div class="form-group">
							<label>Stok Barang</label>
							<td>
							<input type="text" class="form-control" name="stokbarang" value="<?php echo $barang->stokbarang?>">
							</td>

						<div class="form-group">
							<label>Harga Barang</label>
							<td>
							<input type="text" class="form-control" name="hargabarang" value="<?php echo $barang->hargabarang?>">
							</td>
						</div>
						</div>
						<div class="modal-footer">

							<td><input class="btn btn-success" type="submit" name="btn" value="Save"></td>
						</div>
					</table>
				</form>
				<?php } ?>
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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

</body>

</html>