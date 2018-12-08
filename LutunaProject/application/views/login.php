<!DOCTYPE html>
<html>
    <head>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/all.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/login.css') ?>"/> 
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
            <div class="centermid">
		<form>
                    <center>
                        <img src="../Icons/beruang.png" id="bearLogin">
                        <label for="ID">ID</label><br>
			<input type="text" name="ID" id="ID" required><br><br>
                        <label for="psw">Password</label><br>
			<input type="text" name="psw" id="psw" required><br><br>
			<input type="button" value="login">
                    </center>
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
    </body>
</html>