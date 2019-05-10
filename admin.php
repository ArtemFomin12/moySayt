<!DOCTYPE html>
<html>
<head>
	<title>ONYAME</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<p><a href="index.php" class="badge badge-secondary">back</a></p>
	<form action="dobav.php" method="POST" enctype="multipart/form-data">
		<?php echo '<input type="hidden" name="id" value="' . $_POST['id'] . '">'; ?>
		<?php echo '<input type="" name="name" value="' . $_POST['name'] . '" placeholder="название">'; ?>
		<?php echo '<input type="file" name="img" value="' . $_POST['img'] . '" placeholder="картинка" class="">'; ?>
		<?php echo '<input type="" name="tip" value="' . $_POST['tip'] . '" placeholder="тип">'; ?>
		<?php echo '<input type="" name="episod" value="' . $_POST['episod'] . '"  placeholder="епизодов">'; ?>
		<?php echo '<input type="" name="status" value="' . $_POST['status'] . '"  placeholder="статус">'; ?>
		<?php echo '<input type="" name="janr" value="' . $_POST['janr'] . '"  placeholder="жанр">'; ?>
		<?php echo '<input type="" name="avtor" value="' . $_POST['avtor'] . '"  placeholder="автор">'; ?>
		<?php echo '<input type="" name="text" value="' . $_POST['text'] . '" placeholder="описание" class="">'; ?>
		<?php echo '<input type="" name="trailer" value="' . $_POST['trailer'] . '" placeholder="трейлер" class="">'; ?>
		<button type="" class="btn btn-dark">Добавить</button>
	</form>
	<div class="content">
		<div class="container mt-3">
			<div class="row">
				<div class="col-3">
					<div class="body">
						<?php
							$connect =  mysqli_connect('127.0.0.1', 'root', '', 'artem_pn_09');
							$query = mysqli_query($connect, 'SELECT * FROM top');
						?>
						<?php for($i = 0; $i < $query->num_rows; $i++) {
							$img = $query->fetch_assoc(); echo $img['name'];
								}; 
						?>
					</div>
				</div>
				<div class="col-8 ml-5">
					<div class="body">
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
							<?php echo '<iframe width="760" height="415" src="' . $img['trailer'] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'; ?>
							<form action="delete.php" method="GET">
								<?php echo '<input name="id" value="' . $img['id'] . '" style="display: none">'; ?>
								<button type="" class="btn btn-dark">Delete</button>
							</form>
							<form action="redactor.php" method="POST">
								<?php echo '<input type="hidden" name="id" value="' . $img['id'] . '">'; ?>
								<?php echo '<input type="hidden" name="img" value="' . $img['img'] . '">'; ?>
								<?php echo '<input type="hidden" name="name" value="' . $img['name'] . '">'; ?>
								<?php echo '<input type="hidden" name="tip" value="' . $img['tip'] . '">'; ?>
								<?php echo '<input type="hidden" name="episod" value="' . $img['episod'] . '">'; ?>
								<?php echo '<input type="hidden" name="status" value="' . $img['status'] . '">'; ?>
								<?php echo '<input type="hidden" name="janr" value="' . $img['janr'] . '">'; ?>
								<?php echo '<input type="hidden" name="avtor" value="' . $img['avtor'] . '">'; ?>
								<?php echo '<input type="hidden" name="text" value="' . $img['text'] . '">'; ?>
								<?php echo '<input type="hidden" name="trailer" value="' . $img['trailer'] . '">'; ?>
								<button type="" class="btn btn-dark">Редактировать</button>
							</form>
							<?php }; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>