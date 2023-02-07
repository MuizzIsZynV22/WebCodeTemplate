<?php
	include ('config.php');
	$id_pesakit = $_GET['id'];
	$result = mysqli_query($connect,"DELETE from table_name where id='$id'");
	$result = mysqli_query($result);
	header("location:index.php");
?>