<?php

$servername="ecs-pd-proj-db.ecs.csus.edu";
$username="CSC174036";
$password="Csc134_604305359";

$connect = new mysqli($servername, $username, $password);

if ($connect->connect_error) {
	die("Connection failed: " . $connect->connect_error);
}
echo "Connected successfully";

#Insert
$insert_data = "INSERT INTO WebComicUser (username) VALUES (?)";
if ($connect->query($insert_data) === TRUE) {
	echo "New record created successfully";
}
#Show
$show_data = "SELECT * FROM WebComicUser";
#$show_data = "SELECT username FROM WebComicUser";
$result = $connect->query($show_data);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		echo "username: " . $row["username"];
	}
}

$connect->close()
?>
