<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link rel="icon" href="<?php echo base_url('assets\Icons\beruang ck.png'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/all.css') ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/register.css') ?>"/>
    </head>
	<body>
			<div class="tengah">
			<form action="<?php echo base_url('index.php/register/data'); ?>" method="post">
				<h1 style="color:white" id="reg">Register</h1>
				<center>
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-12">
							<label style="color:white" for="firstname"><b>First Name</b></label></br>
							<input type="text" name="firstname" id="firstname" autofocus required></br></br>
						</div>
						<div class="col-md-12">
							<label style="color:white" for="ID"><b>ID</b></label></br>
							<input type="text" name="ID" id="ID" required></br></br>
						</div>
						<div class="col-md-12">
							<label style="color:white" for="psw"><b>Password</b></label></br>
							<input type="password" name="psw" id="psw" required></br></br>
						</div>
					</div>
					<div class="col-md-6 kotak">
						<div class="col-md-12 row">
							<div class="col-md-6 kotak">
								<img style="width:10em" src="<?php echo base_url('assets\Icons\beruang ck.png'); ?>" id="bear_register">
							</div>
							<div class="col-md-6 kotak">
								<img style="width:10em" src="<?php echo base_url('assets\Icons\beruang cw3.png'); ?>" id="bear_register">
							</div>
						</div>
						<div class="col-md-12 row">
							
							<div class="col-md-6 kotak">							
								<img style="width:10em" src="<?php echo base_url('assets\Icons\beruang mr2.png'); ?>" id="bear_register">
							</div>
							<div class="col-md-6 kotak">							
								<img style="width:10em" src="<?php echo base_url('assets\Icons\beruang mw.png'); ?>" id="bear_register">
							</div>
						</div>
					</div>
				</div>
				<center>
					<input type="submit" name="register" value="Register">
					<p style="color:white" >Already have an account? <a href="#">Sign in</a>.</p>
			</form>
			</div>
</body>
</html>
