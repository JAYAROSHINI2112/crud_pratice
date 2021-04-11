<?php 

require_once 'connect.php';

if($_POST) {
	$name = $_POST['name'];
	$id = $_POST['id'];
	$age = $_POST['age'];
	

	$sql  = "UPDATE member SET name = '$name', id = '$id', age = '$age' WHERE id = {$id}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Succcessfully Updated</p>";
		echo "<a href='edit.php?id=".$id."'><button type='button'>Back</button></a>";
		echo "<a href='index.php'><button type='button'>Home</button></a>";
	} else {
		echo "Erorr while updating record : ". $connect->error;
	}

	$connect->close();

}

?>