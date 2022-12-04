<?php

$servername="ecs-pd-proj-db.ecs.csus.edu";
$username="CSC174036";
$password="Csc134_604305359";
$database="CSC174036";

$connect = new mysqli($servername, $username, $password, $database);
if ($connect->connect_error) {
	die("Connection failed: " . $connect->connect_error);
}
echo "Connected successfully <br>";
echo "Inserting data... [Started] <br>";

#Insert
$expected_userid = $_POST["userID"];
$statement = $connect->prepare("INSERT INTO WebComicUser (userID) VALUES (?)");
$statement->bind_param("s", $_POST['userID']);
#$statement->execute();
echo "Inserting data... [Finished]<br>";

#Select
echo "Showing all data... [Started]<br>";
$select = "SELECT * FROM WebComicUser";
$result = $connect->query($select);
#echo "<table>";
#echo "<table border='1'>
echo "<table>
<tr>
<th>userID</th>
<th>username</th>
<th>join_date</th>
<th>isCreator</th>
<th>isReader</th>
</tr>";
while ($row = $result->fetch_assoc()) {
#	echo "<tr>";
	#echo "userID: " . $row["userID"];
	#echo "<td>" . $row["userID"] "</td>"; 
	#echo "username: " . $row["username"] 
#	echo "<td>" . $row["username"] "</td>";
	#echo "join_date: " . $row["join_date"] 
#	echo "<td>" . $row["join_date"] "</td>";
	#echo "isCreator: " . $row["isCreator"] 
#	echo "<td>" . $row["isCreator"] "</td>";
	#echo "isReader: " . $row["isReader"];
#	echo "<td>" . $row["isReader"] "</td";
#	echo "</tr>";
}
echo "</table>";
echo "Showing all data... [Finished]<br>";
$statement->close();
$connect->close()
?>
