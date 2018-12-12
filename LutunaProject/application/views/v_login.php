<!DOCTYPE html>
<html>
    <head>
		<title>login</title>
        <link rel="icon" href="<?php echo base_url('assets\Icons\beruang ck.png'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/all.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/login.css') ?>"/> 
    </head>
    <body>
        <div class="centermid">
			<form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post">
				<center>
					<img style="width:30em" src="<?php echo base_url('assets\Icons\beruang.png'); ?>" id="bearLogin">
                    <label for="username">ID</label><br>
					<input type="text" name="username" id="ID" required><br><br>
                    <label for="password">Password</label><br>
					<input type="password" name="password" id="psw" required><br><br>
					<input type="submit" value="login">
                </center>
		    </form>
        </div>		
    </body>
</html>
