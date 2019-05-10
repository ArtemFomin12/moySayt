<?php $connect = mysqli_connect('127.0.0.1','root','','artem_pn_09');
mysqli_query($connect,"DELETE FROM info WHERE id='". $_GET['id'] . "'");
header('Location: http://artemf/64/admin.php'); ?>