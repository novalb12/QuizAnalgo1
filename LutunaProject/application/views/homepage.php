<!DOCTYPE html>
<html>
    <head>
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
                    <h1>LUTUNA</h1>
                </div>
            </div>
        </nav>
        <div class="col-md-12"><!--Voting yang sedang Hot-->
            <h1 id="hotnew">HOT</h1>
            <div class="row col-md-12">	<!--isi votingan yang sedang Hot-->
                <?php foreach ($response as $data){?>               
                <div class="col-md-3">
                    <img src=<?php echo $data['img']; ?> class="kotak bearhot">
                    <h4><?php echo $data['judul']; ?></h4>
		</div>
                <?php } ?>
            </div>	<!--akhir voitngan yang sedang hot-->
        </div>                    
	<div class="footer ">
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
                        <p>ya</p>
                    </div>
                </div>
                <div class="col-md-3">    
                    <div class="col-md-12">
                        <h1><b>Menu</b></h1>
                        <p>ya</p>
                    </div>		
                </div>
                    <div class="col-md-3">
                        <div class="col-md-12 row">
                            <div class="col-md-6 ">
                                <img src="<?php echo base_url('assets\Icons\beruang ck.png'); ?>" id="bear">
                            </div>
                            <div class="col-md-6 ">
                                <img src="<?php echo base_url('assets\Icons\beruang cw3.png'); ?>" id="bear">
                            </div>
                        </div>
                        <div class="col-md-12 row">						
                            <div class="col-md-6 ">							
                                <img src="<?php echo base_url('assets\Icons\beruang mr2.png'); ?>" id="bear">
                            </div>
                            <div class="col-md-6 ">							
                                <img src="<?php echo base_url('assets\Icons\beruang mw.png'); ?>" id="bear">
                            </div>
                        </div>
                    </div>
            </div>
	</div>
    </body>
</html>
