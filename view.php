<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<?php
		$connect =  mysqli_connect('127.0.0.1', 'root', '', 'artem_pn_09');
		$query = mysqli_query($connect, "SELECT * FROM info WHERE id='" . $_GET['id'] . "'");
	?>
	<?php for($i = 0; $i < $query->num_rows; $i++) {
		$img = $query->fetch_assoc(); echo '<img src="' . $img['img'] . '" class="w-auto h-auto mt-4">'; 
	?>
	<h3><a href="#" class="text-dark font-weight-bold">
		<?php echo $img['name']; ?>
	</a></h3>
	<p><a href="#" class="text-dark font-weight-light">
		<?php echo $img['tip']; ?>
	</a></p>
	<p><a href="#" class="text-dark font-weight-light">
		<?php echo $img['episod']; ?>
	</a></p>
	<p><a href="#" class="text-dark font-weight-light">
		<?php echo $img['status']; ?>
	</a></p>
	<p><a href="#" class="text-dark font-weight-light">
		<?php echo $img['janr']; ?>
	</a></p>
	<p><a href="#" class="text-dark font-weight-light">
		<?php echo $img['avtor']; ?>
	</a></p>
	<p><a href="#" class="text-dark font-weight-light">
		<?php echo $img['text']; ?>
	</a></p>
	<?php echo '<iframe width="560" height="315" src="' . $img['trailer'] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'; ?>
	<?php }; ?>
</body>
</html>