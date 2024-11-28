
<?php
include_once('connection.php');
print_r($_POST);
//changes the confirm status from 0 to 1 when the booking is confirmed
$stmt=$conn->prepare("UPDATE booking SET confirm=1 WHERE bookid=:book");
$stmt->bindParam(':book', $_POST['book']);
$stmt->execute();
header('location:sitterhomepage.html');
?>