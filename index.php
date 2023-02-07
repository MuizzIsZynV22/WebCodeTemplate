<!--membuat sambungan ke db-->
<?php
	include('config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>DATABASE LIST</title>
	<style type="text/css">
		h2{
			text-align: center;
			padding-top: 20px;
		}
		body{
			background-color: #77f33f;
		}
	</style>

</head>
<body>
<h2>RECORD NAME</h2>
<center>
<table border="1" cellpadding="5" cellspacing="0" bgcolor="white" style="color: #fff; background-color: #002020; border: 2px solid #00f8f0; border-radius: 10px;">
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>EMPTY1</th>
		<th>EMPTY2</th>
		<th>DATE</th>
		<th>CHOISE</th>
		<th>Delete</th>

	</tr>

	<?php

		$papar=mysqli_query($connect,"SELECT * FROM table_name");
		 while ($row = mysqli_fetch_array($papar)){
			
			echo "
			<tr>
				<td>".$row['id']."</td>
				<td>".$row['name']."</td>
				<td>".$row['empty1']."</td>
				<td>".$row['empty2']."</td>
				<td>".$row['date']."</td>
				<td>".$row['choise']."</td>
				<td>","<a href=\"padam.php?id=".$row['id']. "\" Onclick=\"return confirm('Rekod ini akan dihapuskan')\">delete</td>


			</tr>
			";
		}
	?>
	</table>
	<p><a href="tambah.php"><button name="tambah" type="submit">&#43;TAMBAH</button></a></p>
	</center>
	</body>
</html>