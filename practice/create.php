<!DOCTYPE html>
<html>
<head>
	<title>Add Member</title>

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
	<legend>Add Member</legend>

	<form action="insert.php" method="post">
		<table cellspacing="10" cellpadding="10">
			<tr>
				<th> Name</th>
				<td><input type="text" name="name" placeholder=" Name" required /></td>
			</tr>		
			<tr>
				<th>Id</th>
				<td><input type="text" name="id" placeholder="Id"required /></td>
			</tr>
			<tr>
				<th>Age</th>
				<td><input type="text" name="age" placeholder="Age"required /></td>
			</tr>
			
			<tr>
				<td><button type="submit">Save </button></td>
				<td><a href="index.php"><button type="button">Back</button></a></td>
			</tr>
		</table>
	</form>

</fieldset>

</body>
</html>