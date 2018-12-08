    <!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <link rel="icon" href="<?php echo base_url('assets\Icons\beruang ck.png'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/all.css') ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/homepage.css') ?>"/>
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
                    <h1 style="font: ;">LUTUNA</h1>
                </div>
            </div>
        </nav>
        <div class="col-md-12"><!--Voting yang sedang Hot-->
            <h1 id="hotnew">HOT</h1>
            <div class="row col-md-12">	<!--isi votingan yang sedang Hot-->
                <?php foreach ($response as $data){?>               
                <div class="col-md-2">
                    <a href="http://localhost/LutunaProject/index.php/vote"><img style="height:auto; margin-left: auto; margin-right: auto" class="kotak bearhot" src=<?php echo base_url($data['img']); ?>></a>
                    <br><br>
                    <a href="http://localhost/LutunaProject/index.php/vote"><h4 style="font-family: verdana; color: white"id="judul_vote"><?php echo $data['judul']; ?></h4></a>
                    <br>
		</div>
                <?php } ?>
            </div>	<!--akhir voitngan yang sedang hot-->
        </div>                    
	<div class="footer ">
            <div class="row">
                <div class="col-md-3">
                    <div class="col-md-12">
                        <h1 id="menu">Link Page</h1>
                        <a id="menu" href="http://localhost/LutunaProject/index.php/profile">Profil</a><br>
                        <a id="menu" href="http://localhost/LutunaProject/index.php/register">Register</a><br>
                        <a id="menu" href="http://localhost/LutunaProject/index.php/login">Login</a>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="col-md-12">
                        <h1 id="menu">Menu</h1>
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
