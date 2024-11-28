<?php
include_once ("connection.php");
session_start();
print_r($_POST);
array_map("htmlspecialchars", $_POST);
$stmt = $conn->prepare("SELECT * FROM sitters WHERE clientname =:username ;" );
$stmt->bindParam(':username', $_POST['username']);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{ 
    print_r($row);
    if($row['email']== $_POST['loginemail']){
        $UserName ='username';
        
        echo ("logged in");
        echo $_POST["loginemail"];
        $_SESSION['name']=$row["sitterid"];
        header('Location: sitterhomepage.php');
        
    }else{

        header('Location: login.php');
        echo ("not logged in");
    }
}
$conn=null;
?>