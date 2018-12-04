<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/all.css') ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/register.css') ?>"/>
    </head>
	<body>
            <nav class="navbar navbar-inverse navbar-fixed-top header">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="http://localhost/LutunaProject/">
                            <img src="<?php echo base_url('assets\Icons\beruang.png'); ?>" id="bear">
                        </a><!--icon beruang-->      
                    </div>
                    <div class="nav-centered">
                        <h1>LUTUNA</h1>
                    </div>
                </div>
            </nav>
			<div class="tengah">
			<form action="/register.php">
				<h1 id="reg">Register</h1>
				<center>
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-12">
							<label for="firstname"><b>First Name</b></label></br>
							<input type="text" name="firstname" id="firstname" autofocus required></br></br>
						</div>
						<div class="col-md-12">
							<label for="ID"><b>ID</b></label></br>
							<input type="text" name="ID" id="ID" required></br></br>
						</div>
						<div class="col-md-12">
							<label for="psw"><b>Password</b></label></br>
							<input type="password" name="psw" id="psw" required></br></br>
						</div>
					</div>
					<div class="col-md-6 kotak">
						<div class="col-md-12 row">
							<label for="lastname"><b>lastname</b></label></br>
							<input type="text" name="lastname" id="lastname" required></br></br>
						</div>	
						<div class="col-md-12 row">
							<div class="col-md-6 kotak">
								<img src="../Icons/beruang.png" id="bear">
							</div>
							<div class="col-md-6 kotak">
								<img src="../Icons/beruang.png" id="bear">
							</div>
						</div>
						<div class="col-md-12 row">
							
							<div class="col-md-6 kotak">							
								<img src="../Icons/beruang.png" id="bear">
							</div>
							<div class="col-md-6 kotak">							
								<img src="../Icons/beruang.png" id="bear">
							</div>
						</div>
					</div>
				</div>
				<center>
					<button type="submit" id="btnreg">Register</button>
					<p>Already have an account? <a href="#">Sign in</a>.</p>
			</form>
			</div>
			<div class="footer">
				<div class="row">
						<div class="col-md-3">
							<div class="col-md-12">
							<h1><b>Menu</b></h1>						
							<p>ya</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="col-md-12">
							<h1><b>Menu</b></h1>
							<p>dsandksanidsa</p>							
							</div>
						</div>
						<div class="col-md-3">
							<h1><b>Menu</b></h1>
							<p>dsandksanidsa</p>							
						</div>
						<div class="col-md-3">
							<div class="col-md-12 row">
								<div class="col-md-6 kotak">
									<img src="<?php echo base_url('assets\Icons\beruang ck.png'); ?>" id="bear">
								</div>
								<div class="col-md-6 kotak">
									<img src="<?php echo base_url('assets\Icons\beruang cw3.png'); ?>" id="bear">
								</div>
							</div>
							<div class="col-md-12 row">
								
								<div class="col-md-6 kotak">							
									<img src="<?php echo base_url('assets\Icons\beruang mr2.png'); ?>" id="bear">
								</div>
								<div class="col-md-6 kotak">							
									<img src="<?php echo base_url('assets\Icons\beruang mw.png'); ?>" id="bear">
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</body>
</html>