<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/loader.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
  	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js?v=1.2"></script>
  	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js?v=1.2"></script>
  	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/loader.js?v=1.2"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/online-test-style.css">
	<style type="text/css">
		.online-test-head{
			background-color: transparent
			;border-bottom:2px solid #3e7ddc
			;padding-top: 30px;
		}
		.online-test-head .navbar-brand {
			font-size:24px;
			color:#3e7ddc;
			font-weight: 900;
			padding-top: 0 
		}
		.online-test-head-btn{
			color: #fff;
			font-weight: 900;
			font-size: 16px;
			padding: 10px 15px;
			margin: 30px 10px 20px 0;
			border:2px solid #3e7ddc;
			border-radius: 4px;
		}
		.online-test-head-btn:hover{
			text-decoration: none;
			color: #fff;
		}
		.brand-box{
			height: 100px;
			width: 100px;
			margin: 40px auto;
			font-size: 40px;
			font-weight: bold;
			padding-top: 20px;
			text-align: center;
			color: #fff;
			border-radius: 50%;
			border:2px solid #fff;
			background-color: #3e7ddc;
			position: relative;
			top: 100px;
		}
		.login-btn,.signup-btn{
			padding-top: 30px;
		}
		.login-btn a{
			background-color: #3e7ddc;
			color: #fff;
			font-size: 16px;
			padding: 10px 15px;
			margin-top: 40px;

		}
		.login-btn a:hover{text-decoration: none}
		.signup-btn a:hover{color: #3e7ddc;text-decoration: none;}
		.online-heading {color: #fff;padding-top: 160px;}
		.online-heading h1{margin: 0;font-weight: 900;font-size: 40px;}
		.online-heading  p{font-weight: 700;}
		.footer-info-sec2{position: absolute;bottom: 0;width: 100%}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12 banner" style="padding-left: 0px; padding-right: 0px;">
				<div style="height : 400px;"></div>
			</div>
		</div>
		<div class="row bg-orange">
			<div class="col-lg-4 col-md-4 col-4"></div>
			<div class="col-lg-4 col-md-4 padding10" style="margin-top: 20px">
				<div class="login-box" style="margin-bottom: 600px;">
					<form method="post" action="<?php echo base_url();?>auth/login">
						<input class="form-control" type="text" name="email" placeholder="User Name">
						<input class="form-control" type="password" name="pwd" placeholder="Password">
						<label class="text-danger"><?php echo $msg; ?></label>
						<div class="login-btn" align="center"><input class="btn btn-orange" type="submit" value="Login"></div>
					</form>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-4"></div>
		</div>
	</div>
</body>
</html>