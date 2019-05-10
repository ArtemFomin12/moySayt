<!DOCTYPE html>
<html>
<head>
	<title>ONYAME</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<div class="header mt-3">
		<div class="container-fluid row">
			<p><a href="admin.php" class="badge badge-secondary">Admin panel</a></p>
			<div class="pl-5 row">
				<input type="" name="" placeholder="поиск" class="ml-5">
				<button class="btn btn-secondary">искать</button>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="mt-4 col-8 mx-auto">
			<div class="row">
				<div class="col-3">
						<?php
							$connect =  mysqli_connect('127.0.0.1', 'root', '', 'artem_pn_09');
							$query = mysqli_query($connect, 'SELECT * FROM top');
						?>
							<?php for($i = 0; $i < $query->num_rows; $i++) {
								$img = $query->fetch_assoc(); echo $img['name'];
								}; 
							?>
				</div>
				<div class="col-4 ml-5">
							<?php
								$connect =  mysqli_connect('127.0.0.1', 'root', '', 'artem_pn_09');
								$query = mysqli_query($connect, 'SELECT * FROM info');
							?>
							<?php for($i = 0; $i < $query->num_rows; $i++) {
							$img = $query->fetch_assoc(); echo '<img src="' . $img['img'] . '" class="w-auto h-auto mt-4">'; 
							?>
							<h3><a href="#" class="text-dark font-weight-bold">
								<?php echo $img['name']; ?>
							</a></h3>
							<form method="GET" action="view.php">
								<p> <?php echo '<a href="view.php?id=' . $img['id'] . '" class="badge badge-secondary">читать дальше</a>' ?></p>

							</form>
							<?php }; ?>
				</div>
			</div>
			<div class="mt-3 text-center col-12">
				<h3>О нас</h3>
				<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
			</div>
		</div>
	</div>
</body>
</html>