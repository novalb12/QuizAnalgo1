<!DOCTYPE html>
<html>
    <head>
        <title>Vote</title>
        <link rel="icon" href="<?php echo base_url('assets\Icons\beruang ck.png'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/all.css') ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/homepage.css') ?>"/>
    </head>
    <body>
        <div class="row col-md-12">
			<div class="row col-md-6">
				<?php foreach ($id_vote as $data){?>
				<img style="height:30em"src="<?php echo base_url($data['img']); ?>">
				<?php } ?>
			</div>
			<div class="col-md-6">
				<?php foreach ($id_vote as $data){?>
				<h1><?php echo $data['judul']?></h1>
				
				<h1 style="font-size:20px">A. <?php echo $data['opsiA'];?></h1>
				<br>
				<h1 style="font-size:20px">B. <?php echo $data['opsiB'];?></h1>
				<br>
				<h1 style="font-size:20px">C. <?php echo $data['opsiC'];?></h1>
				<br>
				<h1 style="font-size:20px">D. <?php echo $data['opsiD'];?></h1>
				<?php } ?>
			</div>
		</div>
    </body>
</html>
