<?php 

require_once 'connect.php';

if($_GET['id']) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM member WHERE id = {$id}";
	$result = $connect->query($sql);

	$data = $result->fetch_assoc();

	$connect->close();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Member</title>

	<style type="text/css">
		fieldset {
			margin: auto;
			margin-top: 100px;
			width: 50%;
		}

		table tr th {
			padding-top: 20px;
		}
	</style>

</head>
<body>

<fieldset>
	<legend>Edit Member</legend>

	<form action="update.php" method="post">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th>First Name</th>
				<td><input type="text" name="name" placeholder="First Name" value="<?php echo $data['name'] ?>" /></td>
			</tr>		
			<tr>
				<th>Id</th>
				<td><input type="text" name="id" value="<?php echo $data['id'] ?>" /></td>
			</tr>
			<tr>
				<th>Age</th>
				<td><input type="text" name="age" placeholder="Age" value="<?php echo $data['age'] ?>" /></td>
			</tr>
			<tr>
				
				<td><button type="submit">Save Changes</button></td>
				<td><a href="index.php"><button type="button">Back</button></a></td>
			</tr>
		</table>
	</form>

</fieldset>

</body>
</html>

<?php
}
?>