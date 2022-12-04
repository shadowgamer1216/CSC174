<?php
$connect = mysql_connect("ecs-pd-proj-db.ecs.csus.edu", "CSC174036", "Csc134_604305359");
if (!$connect)
{
    die('Connection Failed: ' . mysql_error());
    mysql_select_db("CSC174036", $connect);
}

$user_data = "INSERT INTO WebComicUser (username) VALUES ('$_POST[username]')";
if (!mysql_query($user_data))
{
    die('Error: ' . mysql_error());
}
echo "Record added to database!";
mysql_close($connect);
?>