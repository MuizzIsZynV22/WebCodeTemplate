<!DOCTYPE html>
<html>
<head>
	<title>Add Record Form</title>
	<style type="text/css">
		h2{
			text-align: center;
			padding-top: 20px;
		}
		body{
			background-color: #7FFFD4;
		}
	</style>
</head>
<body>
	<center>
		<h2>Form Table Name</h2>

		<table border="0" cellpadding="5" cellspacing="1" bgcolor="white" style="background-color: #f0ff60; padding: 20px; border-top: 1px solid black; border-left: 2px solid black; border-right: 2px solid #09f085; border-bottom: 1px solid #09f925; border-radius: 10px;">
			<form action="post" method="post">
				<tr>
					<td>
						Id
					</td>
					<td>
						:
					</td>
					<td>
						<input type="text" name="id" required><br><br>
					</td>
				</tr>
				<tr>
					<td>
						Name
					</td>
					<td>
						:
					</td>
					<td>
						<input type="text" name="name" required><br><br>
					</td>
				</tr>
				<tr>
					<td>
						empty1
					</td>
					<td>
						:
					</td>
					<td>
						<input type="text" name="empty1" required><br><br>
					</td>
				</tr>
				<tr>
					<td>
						empty2
					</td>
					<td>
						:
					</td>
					<td>
						<input type="text" name="empty2" required><br><br>
					</td>
				</tr>
				<tr>
					<td>
						Date
					</td>
					<td>
						:
					</td>
					<td>
						<input type="date" name="date" required><br><br>
					</td>
				</tr>
				<tr>
					<td>
						Choise
					</td>
					<td>
						:
					</td>
					<td>
						<select type="text" name="choise" required>
							<option value="value1">Value1</option>
							<option value="value2">Value2</option>
							<option value="value3">Value3</option>
							<option value="value4">Value4</option>
							<option value="value5">Value5</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						
						<center>
							<input type="submit" name="submit" value="submit">
						</center><br>
					</td>
				</tr>
			</form>
		</table>
	</center>
</body>
<?php
	include('configTemp.php');
	if (isset($_POST['submit'])){
		//menyemak sama ada butang hantar ditekan
		$id = $_POST['id'];//mengumpukkan nilai daripada kotak tesk ke dalam pembolehubah $id
		$name = $_POST['name'];
		$empty1 = $_POST['empty1'];
		$empty2 = $_POST['empty2'];
		$date = $_POST['date'];
		$choise = $_POST['choise'];

		$add = mysqli_query($connect, "INSERT INTO table_name values ('$id','$name','$empty1','$empty2','$date','$choise')");
		header('location:indexTemp.php');
	}//penamat untuk if
?>
</html>
