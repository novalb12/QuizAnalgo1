<!DOCTYPE html>
<html>
    <head>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/all.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/login.css') ?>"/> 
    </head>
    <body>
	<div class="container">	
            <div class="row header">
		<div class="col-md-2">
                    <img src="../Icons/beruang.png" id="bear"><!--icon beruang-->
		</div>
		<div class="col-md-8">
                    <h1 id="judul">LUTUNA</h1><!--header judul-->
		</div>
            </div>
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
        </div>		
    </body>
</html>