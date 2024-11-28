
<form action="addsitter.php" method="post">
  UserName:<input type="text" name="ClientName"><br>
  firstname:<input type="text" name="FirstName"><br>
  SurName:<input type="text" name="SurName"><br>
  email:<input type="text" name="Email"><br>
  emergencycontact<input type="text" name="EC"><br>
  <input type="submit" value="Register">

</form>

<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM sitters");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC));
{
}

?>