//Connecting to the ECS Database [Start]:
var mysql = require('mysql');

var con = mysql.createConnection({
    host: "ecs-pd-proj-db.ecs.csus.edu",
    user: "CSC174036",
    password: "Csc134_604305359"
});

con.connect(function(err) {
    if (err) throw err;
    console.log("Connected!");
});
//Connecting to the ECS Database [End]:


//Prepared Statement (allows for ONLY username):
var sql = "INSERT INTO WebComicUser VALUES ('userID2', 'user2', '2022-11-30', TRUE, TRUE)";
//var sql = "INSERT INTO WebComicUser (username) VALUES (?)";

//Insertion
con.query(sql, function (err, result) {
    if (err) throw err;
    console.log("1 record inserted");
  });
