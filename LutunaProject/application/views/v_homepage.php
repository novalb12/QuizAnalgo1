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
                        <img  id="bear" src="<?php echo base_url('assets\Icons\beruang.png'); ?>">
                    </a><!--icon beruang-->      
                </div>
                <div class="nav-centered">
                    <img src="<?php echo base_url('assets\Icons\LUTUNA.png'); ?>">
                </div>
            </div>
        </nav>
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
					<?php echo $this->session->userdata('img');?>
					<?php echo anchor('home/vote?id_vote='.$data['id_vote'],$data['judul'])?>
                    <div class="crop">		
					<!--<?php echo anchor('home/vote?id_vote='.$data['id_vote'])?>-->
                        <a href="<?php echo anchor('home/vote?id_vote='.$data['id_vote']);	 ?>">
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
                            <img style="height:auto; margin-left: auto; margin-right: auto" src=<?php echo base_url($data['img']); ?>>
                        </a>
                        <br>
                    </div>>
                    <a href="http://localhost/LutunaProject/index.php/vote">
                        <h4 style="font-size: 14px; font-family: verdana; color: white" id="judul_vote"><?php echo $data['judul']; ?></h4>
                    </a>
                    <br>
		</div>
                <?php } ?>
            </div>
        </div>                    
	<div class="footer ">
            <div class="row">                
                <div class="col-md-3">
                    <div class="col-md-12">
                        <h1 id="menu_bawah">About us</h1>
                        <p id="menu_bawah">Lutuna adalah sebuah website yang diciptakan saat penciptanya diberi tugas 
                           oleh dosennya untuk membat sebuah web. Lutuna bergerak dengan tujuan entertaining dan juga 
                           mengisi waktu luang anda.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">    
                    <div class="col-md-12">
                        <h1 id="menu_bawah">Menu</h1>
                        <a>ya</a>
                    </div>		
                </div>
                <div class="col-md-3">
                    <div class="col-md-12">
                        <h1 id="menu_bawah">Link Page</h1>
                        <a id="menu_bawah" href="http://localhost/LutunaProject/index.php/profile">Profil</a><br>
                        <a id="menu_bawah" href="http://localhost/LutunaProject/index.php/register">Register</a><br>
                        <a id="menu_bawah" href="http://localhost/LutunaProject/index.php/login">Login</a>                        
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
