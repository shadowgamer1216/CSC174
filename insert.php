<?php

$servername="ecs-pd-proj-db.ecs.csus.edu";
$username="CSC174036";
$password="Csc134_604305359";
$database="CSC174036";

$connect = new mysqli($servername, $username, $password, $database);
if ($connect->connect_error) {
	die("Connection failed: " . $connect->connect_error);
}

#Insert
$expected_userid = $_POST["userID"];
$statement = $connect->prepare("INSERT INTO WebComicUser (userID) VALUES (?)");
$statement->bind_param("s", $_POST['userID']);
$statement->execute();

#Select
$select = "SELECT * FROM WebComicUser";
$result = $connect->query($select);
echo "<table border='1'>
<tr>
<th>userID</th>
<th>username</th>
<th>join_date</th>
<th>isCreator</th>
<th>isReader</th>
</tr>";
while ($row = $result->fetch_assoc()) {
	echo "<tr>";
	echo "<td>" . $row["userID"] . "</td>"; 
	echo "<td>" . $row["username"] . "</td>";
	echo "<td>" . $row["join_date"] . "</td>";
	echo "<td>" . $row["isCreator"] . "</td>";
	echo "<td>" . $row["isReader"] . "</td";
	echo "</tr>";
}
echo "</table>";
$statement->close();
$connect->close()
?>
