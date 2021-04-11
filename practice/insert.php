<?php 

require_once 'connect.php';

if($_POST) {
	$names = $_POST['name'];
	$ids = $_POST['id'];
	$ages = $_POST['age'];
	

	$sql = "INSERT INTO member (name, id,  age) VALUES ('$names', '$ids', '$ages')";
	if($connect->query($sql) === TRUE) {
		echo "<p>New Record Successfully Created</p>";
		echo "<a href='create.php'><button type='button'>Back</button></a>";
		echo "<a href='index.php'><button type='button'>Home</button></a>";
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}

	$connect->close();
}

?>