<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login Admin</title>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">SDN Pedes 2 <b>(Admin)</b></div>
      <div class="card-body">
      <?php echo form_open('auth/aksi_loginadmin') ?>
        <form>
          <div class="form-group">
            <div class="form-label-group">
              <input name=username type="varchar" id="username" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
              <label for="nis">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input name= password type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          
          <button class="btn btn-primary btn-block" type=submit value=Submit>Login</button>
        </form>
        <?php echo form_close() ?>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
