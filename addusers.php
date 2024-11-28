
<?php
include_once('connection.php');
//this line binds the user inputs to feilds in the table
$stmt = $conn->prepare("INSERT INTO users (userid, clientname,firstname,surname,email,emergencycontact)VALUES(null,:ClientName,:FirstName,:SurName,:Email,:EC)");
$stmt->bindParam('ClientName', $_POST["ClientName"]);
$stmt->bindParam('FirstName', $_POST["FirstName"]);
$stmt->bindParam('SurName',$_POST["SurName"]);
$stmt->bindParam('Email', $_POST["Email"]);
$stmt->bindParam('EC', $_POST["EC"]);
$stmt->execute();
$conn = null;
header('Location: login.php');
?> 