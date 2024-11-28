
<?php
   session_start();
   echo($_SESSION['name']);
if (!isset($_SESSION['name']))
{  

   header("Location:login.php");
    $_SESSION['backURL'] = $_SERVER['REQUEST_URI'];


}
?>
<?php
include_once('connection.php');
$cat=$_SESSION['name'];
print_r($_POST);
//this line binds the user inputs to feilds in the table
$stmt = $conn->prepare("INSERT INTO booking (bookid,startdate,enddate,sittername,confirm,userid)VALUES(null,:startdate,:enddate,:sittername,:confirm,$cat)");
$stmt->bindParam('enddate', $_POST["enddate"]);
$stmt->bindParam('startdate', $_POST["startdate"]);
$stmt->bindParam('sittername', $_POST['sitter']);
$stmt->bindParam('confirm', $_POST['confirm']);
$stmt->execute();
$conn = null;
echo('completed');
header("Location:homepage.php");
?> 