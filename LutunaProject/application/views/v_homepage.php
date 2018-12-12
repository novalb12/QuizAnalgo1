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
        <div style="background-color:black">
            <div class="row col-md-12">	<!--isi votingan yang sedang Hot-->              
                <div class="col-md-4">
                    <div>
                        <img id="bear_gif" src="<?php echo base_url('assets\Icons\beruang.gif'); ?>">
                    </div>
		</div>
                <div style="background:grey" class="col-md-8">
                    <div>					
                        <h1 style="font-size:50px">WELCOME</h1>
                        <h1 style="font-size:20px">TO</h1>
                        <h1>LUTUNA WEBSITE</h1>
                    </div>
		</div>
            </div>	
        </div>       
        <div class="col-md-12"><!--Voting yang sedang Hot-->
            <h1 id="hotnew">HOT</h1>
            <div class="row col-md-12">	<!--isi votingan yang sedang Hot-->
                <?php foreach ($id_vote as $data){?>               
                <div class="col-md-2">
                    <div class="crop">		
						<a href="http://localhost/LutunaProject/index.php/vote" data-index:"1">
                            <img style="height:auto; margin-left: auto; margin-right: auto" src="<?php echo base_url($data['img']); ?>">
                        </a>
                        <br>
                    </div>
                    <a href="http://localhost/LutunaProject/index.php/vote">
                        <h4 style="font-size: 14px; font-family: verdana; color: white" id="judul_vote"><?php echo $data['judul']; ?></h4>
                    </a>
                    <br>
		</div>
                <?php } ?>
            </div>
            <h1 id="hotnew">ALL VOTE</h1>
            <div class="row col-md-12">	<!--isi votingan yang sedang Hot-->
                <?php foreach ($id_vote as $data){?>               
                <div class="col-md-3">
                    <div class="crop">
                        <a href="http://localhost/LutunaProject/index.php/vote">
                            <img style="height:auto; margin-left: auto; margin-right: auto" src="<?php echo base_url($data['img']); ?>">
                        </a>
                        <br>
                    </div>
                    <a href="http://localhost/LutunaProject/index.php/vote">
                        <h4 style="font-size: 14px; font-family: verdana; color: white" id="judul_vote"><?php echo $data['judul']; ?></h4>
                    </a>
                    <br>
		</div>
                <?php } ?>
            </div>
        </div>                    
    </body>
</html>
