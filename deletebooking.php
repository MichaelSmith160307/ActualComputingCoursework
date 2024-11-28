<?php
include_once('connection.php');
print_r($_POST);
array_map("htmlspecialchars", $_POST);  
echo('please work');
$stmt = $conn->prepare("DELETE FROM booking where bookid=:book");
$stmt->bindParam(':book',$_POST['book']);
$stmt->execute();
?>