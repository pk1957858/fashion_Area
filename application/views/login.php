<!Doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">
  <title>Login</title>
  <style>
    body {
      background: #000 !important;
    }

    .card {
      border: 1px solid #28a745;
    }

    .card-login {
      margin-top: 130px;
      padding: 18px;
      max-width: 30rem;
    }

    .card-header {
      color: #fff;
      /*background: #ff0000;*/
      font-family: sans-serif;
      font-size: 20px;
      font-weight: 600 !important;
      margin-top: 10px;
      border-bottom: 0;
    }

    .input-group-prepend span {
      width: 50px;
      background-color: #ff0000;
      color: #fff;
      border: 0 !important;
    }

    input:focus {
      outline: 0 0 0 0 !important;
      box-shadow: 0 0 0 0 !important;
    }

    .login_btn {
      width: 130px;
    }

    .login_btn:hover {
      color: #fff;
      background-color: #ff0000;
    }

    .btn-outline-danger {
      color: #fff;
      font-size: 18px;
      background-color: #28a745;
      background-image: none;
      border-color: #28a745;
    }

    .form-control {
      display: block;
      width: 100%;
      height: calc(2.25rem + 2px);
      padding: 0.375rem 0.75rem;
      font-size: 1.2rem;
      line-height: 1.6;
      color: #28a745;
      background-color: transparent;
      background-clip: padding-box;
      border: 1px solid #28a745;
      border-radius: 0;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .input-group-text {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
      align-items: center;
      padding: 0.375rem 0.75rem;
      margin-bottom: 0;
      font-size: 1.5rem;
      font-weight: 700;
      line-height: 1.6;
      color: #495057;
      text-align: center;
      white-space: nowrap;
      background-color: #e9ecef;
      border: 1px solid #ced4da;
      border-radius: 0;
    }
  </style>
</head>

<body >
  <div class="container" id="loginBox"style="display:none;">
    <div class="card card-login mx-auto text-center bg-dark">
      <div class="card-header mx-auto bg-dark">
        <span> <img src="<?php echo base_url(); ?>assets/images/fashion_area.png" class="w-75" alt="Logo"> </span><br />
        <span class="logo_title mt-5"> Login Dashboard </span>
      </div>
      <div class="card-body">
        <form action="" method="post">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="email" class="form-control" placeholder="Username">
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="password" class="form-control" placeholder="Password">
            <i href="#" class="fa fa-eye" aria-hidden="true" style="cursor: pointer" onclick="showpass($(this));"></i>
          </div>
          <div class="form-group">
            <input type="submit" name="btn" value="Login" class="btn btn-outline-danger float-right login_btn">
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url(); ?>assets/js/jquery-3.5.1.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Core plugin JavaScript-->
	<script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script type="text/javascript">
		function showpass(evt) {
			if (evt.parent().find('input').attr('type') == 'password') {
				evt.parent().find('input').attr('type', 'text');
				evt.attr('class', 'fa fa-eye-slash');
			} else {
				evt.parent().find('input').attr('type', 'password');
				evt.attr('class', 'fa fa-eye');
			}
		}
	</script>
  <script>
  $(document).ready(function(){
      $('#loginBox').fadeIn(1500);
  });
  
  </script>
</body>
</html>