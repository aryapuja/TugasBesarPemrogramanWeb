<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'header.php'; ?>
</head>
<body>
	<h1>Login Admin</h1>

	<h2>
	ID: <?php echo $this->session->userdata('id'); ?> <br>
	Nama: <?php echo $this->session->userdata('nama'); ?> <br>
	Level: <?php echo $this->session->userdata('level'); ?> <br>
	Status: <?php echo $this->session->userdata('status'); ?> 
	</h2>
		
</body>
</html>