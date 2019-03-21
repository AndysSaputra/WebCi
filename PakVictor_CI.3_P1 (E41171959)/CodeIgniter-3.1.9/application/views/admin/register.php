<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Register</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url() ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>/assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Tambah Barang</div>
        <div class="card-body">
          <form action="<?php echo base_url() ?>/index.php/tambahbarang/tambah_aksi" method="post">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input name="kodebarang" type="text" id="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                    <label for="firstName">Kode Barang</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input name="nama_barang" type="text" id="lastName" class="form-control" placeholder="Last name" required="required">
                    <label for="lastName">Nama Barang</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input name="deskripsi" type="text" id="inputEmail" class="form-control" placeholder="Email address" required="required">
                <label for="inputEmail">Deskripsi</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input name="stok" type="text" id="inputPassword" class="form-control" placeholder="Password" required="required">
                    <label for="inputPassword">Stok</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input name="harga" type="text" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                    <label for="confirmPassword">Harga</label>
                  </div>
                </div>
              </div>
            </div>
            <input type="submit" value="Tambah" class="btn btn-primary form-control">
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="login.html">Login Page</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>/assets/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>/assets/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
