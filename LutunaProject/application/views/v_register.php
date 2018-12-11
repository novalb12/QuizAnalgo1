<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
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
			<form action="<?php echo base_url('index.php/register/data'); ?>" method="post">
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
					<input type="submit" name="register" value="Register">
					<p>Already have an account? <a href="#">Sign in</a>.</p>
			</form>
			</div>
			<div class="footer ">
            <div class="row">
                <div class="col-md-3">
                    <div class="col-md-12">
                        <h1>Link Page</h1>
                        <a href="http://localhost/LutunaProject/index.php/profile">Profil</a><br>
                        <a href="http://localhost/LutunaProject/index.php/register">Register</a><br>
                        <a href="http://localhost/LutunaProject/index.php/login">Login</a>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="col-md-12">
                        <h1>Menu</h1>
                        <a>ya</a>
                    </div>
                </div>
                <div class="col-md-3">    
                    <div class="col-md-12">
                        <h1 id="menu">Menu</h1>
                        <a>ya</a>
                    </div>		
                </div>
                    <div class="col-md-3">
                        <div class="col-md-12 row">
                            <div class="col-md-6 ">
                                <img src="<?php echo base_url('assets\Icons\beruang ck.png'); ?>" id="bearfooter">
                            </div>
                            <div class="col-md-6 ">
                                <img src="<?php echo base_url('assets\Icons\beruang cw3.png'); ?>" id="bearfooter">
                            </div>
                        </div>
                        <div class="col-md-12 row">						
                            <div class="col-md-6 ">							
                                <img src="<?php echo base_url('assets\Icons\beruang mr2.png'); ?>" id="bearfooter">
                            </div>
                            <div class="col-md-6 ">							
                                <img src="<?php echo base_url('assets\Icons\beruang mw.png'); ?>" id="bearfooter">
                            </div>
                        </div>
                    </div>
            </div>
	</div>
		</div>
	</body>
</html>
