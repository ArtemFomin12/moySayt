<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'artem_pn_09');
$query = mysqli_query($connect, "UPDATE info SET name='" . $_POST['name'] . "', info='" . $_POST['tip'] . "', episod='" . $_POST['episod'] . "', status='" . $_POST['status'] . "', janr='" . $_POST['janr'] . "', avtor='" . $_POST['avtor'] . "', img='" . $_POST['img'] . "', text='" . $_POST['text'] . "', trailer='" . $_POST['trailer'] . "' WHERE id='". $_POST['id'] . "'");
header('Location: http://artemf/64/admin.php'); 
?>