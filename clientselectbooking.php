<form action="deletebooking.php" method="post">
<select name = "book">
<?php
include_once('connection.php');
print_r($_POST);
array_map("htmlspecialchars", $_POST);  
echo('please work');
$stmt = $conn->prepare("SELECT * FROM booking where sitterid=:sitter");
$stmt->bindParam(':sitter', $_POST['sitter']);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
   // this line creates a drop down list with the names of all of the sitters so that the user can select   
   //which sitter they want to select
   
	echo('<option value='.$row["sitterid"].'>'.$row["startdate"].', '.$row["enddate"].'</option>');
}
?>
</select>
<input type="submit" value="deletebooking">
</form>
<html>
   <body>
      <button></button>
   </body>
</html>