<meta charset="utf-8">
<form action="update.php" method="POST" enctype="multipart/form-data">
	<?php echo '<input type="hidden" name="id" value="' . $_POST['id'] . '">'; ?>
	<?php echo '<input type="file" name="img" value="' . $_POST['img'] . '" placeholder="картинка">'; ?>
	<?php echo '<input type="" name="name" value="' . $_POST['name'] . '" placeholder="название">'; ?>
	<?php echo '<input type="" name="tip" value="' . $_POST['tip'] . '" placeholder="тип">'; ?>
	<?php echo '<input type="" name="episod" value="' . $_POST['episod'] . '" placeholder="епизодов">'; ?>
	<?php echo '<input type="" name="status" value="' . $_POST['status'] . '" placeholder="статус">'; ?>
	<?php echo '<input type="" name="janr" value="' . $_POST['janr'] . '" placeholder="жанр">'; ?>
	<?php echo '<input type="" name="avtor" value="' . $_POST['avtor'] . '" placeholder="автор">'; ?>
	<?php echo '<input type="" name="text" value="' . $_POST['text'] . '" placeholder="текст">'; ?>
	<?php echo '<input type="" name="trailer" value="' . $_POST['trailer'] . '" placeholder="трейлер">'; ?>
	<button>Редактировать</button>
</form>