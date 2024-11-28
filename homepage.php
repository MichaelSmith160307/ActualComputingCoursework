<?php
   session_start();
if (!isset($_SESSION['name']))
{  

   header("Location:login.php");
    $_SESSION['backURL'] = $_SERVER['REQUEST_URI'];


}
echo($_SESSION['name']);
?>

<!DOCTYPE html>
<style>
    .bannercolor{
        background-color: orangered;
        color:whitesmoke;
    }
    .userbutton{
        width: 300px;
        height: 200px;
        background-color: white;
        color: orangered;
    }
</style>
<html>
<body style="background-color: orangered">
<div class="container">
  <div class="bannercolor">
    <h1>CatSitting Website</h1>
    <p>your homepage</p>
  </div>
</div>
    <!-- this is to put a button in the top left of the screen -->
    <button onclick="window.location.href = 'http://127.0.0.1/computingcoursework/bookings.php';" class="userbutton" >Book a cat sitter</button>
    <button onclick="window.location.href = 'http://127.0.0.1/computingcoursework/userselectbooking.php';"class='userbutton'>Veiw bookings</button>
    <div>
        
    </div>
</body>

</html>