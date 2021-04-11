<?php 

require_once 'connect.php';

if($_GET['id']) {
	$id = $_GET['id'];

	$sql  = "DELETE FROM member WHERE id = {$id}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Succcessfully Delete</p>";
		echo "<a href='edit.php?id=".$id."'><button type='button'>Back</button></a>";
		echo "<a href='index.php'><button type='button'>Home</button></a>";
	} else {
		echo "Erorr while removing record : ". $connect->error;
	}

	$connect->close();

}

?>