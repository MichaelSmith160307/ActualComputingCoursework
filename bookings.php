<?php
   session_start();
if (!isset($_SESSION['name']))
{  

   header("Location:login.php");
    $_SESSION['backURL'] = $_SERVER['REQUEST_URI'];


}
?>

<!DOCTYPE html>
<html>
    <html>
<head>
   <title>Book a cat sitter</title>
</head>
<body>
   <h2>Book A Cat Sitter</h2>
   <form action="addbooking.php" method="post">
   <select name = "sitter">

<?php
//
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM sitters ORDER BY Surname ASC");
$stmt->execute();


while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
   // this line creates a drop down list with the names of all of the sitters so that the user can select   
   //which sitter they want to select
   
	echo('<option value='.$row["sitterid"].'>'.$row["surname"].', '.$row["firstname"].'</option>');
}
?>

</select>



<!--This part creates a calander that the user can use to input their startdate-->
<label for="startdate">start date:</label>
<input type="date" id="startdate" name="startdate">
<!--This part creates a calander that the user can use to input their enddate-->
<label for="enddate">enddate</label>
<input type="date" id="enddate" name="enddate">
<!--This part enters the users inputs into the table-->
<select name="confirm">
   <option value='0'></option>
</select>
<input type="submit" value="submit">
</form>


