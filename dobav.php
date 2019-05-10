<?php $con = mysqli_connect('127.0.0.1', 'root', '', 'artem_pn_09');
$query = mysqli_query($con, "INSERT INTO info (name, img, tip, episod, status, janr, avtor, text, trailer) VALUES ('" . $_POST['name'] . "', '" . $_FILES['img']['name'] . "', '" . $_POST['tip'] . "', '" . $_POST['episod'] . "', '" . $_POST['status'] . "', '" . $_POST['janr'] . "', '" . $_POST['avtor'] . "', '" . $_POST['text'] . "', '" . $_POST['trailer'] . "')");
header('Location: http://artemf/64/admin.php');
echo $_FILES['img']['name'];
echo $_FILES['img']['tmp_name'];
move_uploaded_file($tmp_name, "$uploads_dir/$name");
?>