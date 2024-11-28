

<!DOCTYPE html>
<html>
    <html>
<head>
   <title>Book a cat sitter</title>
</head>
<body>
   <h2>confirm booking</h2>
   <form action="selectunconfirmedbooking.php" method="post">
   <select name = "sitter">

<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM sitters");
$stmt->execute();


while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
   // this line creates a drop down list with the names of all of the sitters so that the user can select   
   //which sitter they want to select
   
	echo('<option value='.$row["sitterid"].'>'.$row["surname"].', '.$row["firstname"].'</option>');
}
?>

</select>
<input type="submit" value="submit">
</form>
