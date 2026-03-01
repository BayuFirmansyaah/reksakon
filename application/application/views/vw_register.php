
<html>
	<head>
		<title>Form Register</title>
 <!-- memanggil asset css dan js dari AdminLTE -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	</head>
	<body>
	<div class="container">
		<div class="card">
			<div class="card-header">
				Form Register
			</div>
			<div class="card-body">
				<?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>
				<!-- <form method="post" action="<?php echo base_url(); ?>index.php/register/proses"> -->
					<?php echo form_open_multipart('Register/proses');?>

					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="nama">EMAIL</label>
						<input type="email" class="form-control" name="email" id="nama" placeholder="f150@gmail.com">
					</div>
					<div class="form-group">
						<label for="nama">FOTO</label>
						<input type="file" class="form-control" name="foto" id="foto" placeholder="G16B.jpg">
					</div>
					<button type="submit" class="btn btn-primary">Register</button>
					<?php echo form_close();?>
					<!-- </form> -->
			</div>
		</div>
	</div>		
	</body>
</html>


