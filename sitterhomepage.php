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
<html>
<title>HomePage</title>
<Head>Your Homepage</Head>
<body>
    <!-- this is to put a button in the top left of the screen -->
    <button onclick="window.location.href = 'http://127.0.0.1/computingcoursework/selectunconfirmedbooking.php';" class="signup">confirm bookings</button>
    <button onclick="window.location.href = 'http://127.0.0.1/computingcoursework/selectbooking.php';"class='signup'>Veiw bookings</button>
    <button onclick="window.location.href = 'http://127.0.0.1/computingcoursework/sitterlogout.php';"class='signup'>logout</button>
    <div>
        
    </div>
</body>

</html>