<?php
   session_start();
   echo($_SESSION['name']);
if (!isset($_SESSION['name']))
{  

   header("Location:login.php");
    $_SESSION['backURL'] = $_SERVER['REQUEST_URI'];


}
?>

<form action="comfirmbooking.php" method="post">
<select name = "book">
<?php
include_once('connection.php');
print_r($_POST);
array_map("htmlspecialchars", $_POST);  
echo('please work');
$stmt = $conn->prepare("SELECT * FROM booking where sittername=:sitter and confirm=0");
$stmt->bindParam(':sitter', $_SESSION['name']);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
   // this line creates a drop down list with the names of all of the sitters so that the user can select   
   //which sitter they want to select
   
	echo('<option value='.$row["bookid"].'>'.$row["startdate"].', '.$row["enddate"].'</option>');
}
?>
</select>
<input type="submit" value="Confirm">
</form>