<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $data['judul']; ?></title>
        <link rel="icon" href="<?php echo base_url('assets\Icons\beruang ck.png'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/all.css') ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/homepage.css') ?>"/>
    </head>
    <body>
        <div class="row col-md-12">
			<div class="row col-md-6">
				<?php foreach ($id_vote as $data){?>
				<img src="<?php echo base_url($data['img']); ?>">
				<?php } ?>
			</div>
			<div class="row col-md-6">
				<div class="row col-md-12">
					<div class="row col-md-3">
						<h1>test</h1>
					</div>
					<div class="row col-md-3">
						<h1>test</h1>
					</div>
					<div class="row col-md-3">
						<h1>test</h1>
					</div>
					<div class="row col-md-3">
						<h1>test</h1>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>
