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
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('barang_controller/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('barang_controller/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="kdbarang" value="<?php echo $barang->kdbarang?>" />

							<div class="form-group">
								<label for="name">Nama*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama barang" value="<?php echo $barang->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Deskripsi*</label>
								<textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>"
								 name="deskripsi" placeholder="Deskripsi barang..."><?php echo $barang->deskripsi ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('deskripsi') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Stok barang</label>
								<input class="form-control <?php echo form_error('stokbarang') ? 'is-invalid':'' ?>"
								 type="number" name="stokbarang" min="0" placeholder="Stok barang" value="<?php echo $barang->stokbarang ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('stokbarang') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="price">Harga barang</label>
								<input class="form-control <?php echo form_error('hargabarang') ? 'is-invalid':'' ?>"
								 type="number" name="hargabarang" min="0" placeholder="Harga barang" value="<?php echo $barang->hargabarang ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('hargabarang') ?>
								</div>
							</div>


						

							

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
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