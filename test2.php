<!DOCTYPE html>
<html>
    <html>
<head>
   <title>Book a cat sitter</title>
</head>
<body>
   
   <?php
   //session_start();
   //if (!isset($_SESSION['name'])){
    //header('Location:login.php');}-->
   echo'is this working';
   ?>
   <h2>Book A Cat Sitter</h2>

   <!-- This is a drop down list that allows the user to select a cat sitter-->
   <select id="arrayDropdown" style="outline:none;padding: 0.4rem;border-radius: 5px; border: none; box-shadow: 0 0 10px rgb(202, 202, 202);margin: 0.8rem;"></select>
   <script>
      var arr = ['sitter1','sitter2','sitter3','sitter4'];
      var options="";
      arr.map((op,i)=>{
         options+=`<option value="${op}" id="${i}" style="border-radius: 5px;"">${op}</option>`
      })
      document.getElementById("arrayDropdown").innerHTML=options;
   </script>
   <br>
   Start Date
   <form action="addbooking.php" method="post">
   <!-- This is allows the user  select month that the booking starts in-->
   <select id="MonthDropdown" style="outline:none;padding: 0.4rem;border-radius: 5px; border: none; box-shadow: 0 0 10px rgb(202, 202, 202);margin: 0.8rem;"></select>
   <script>
      var montharr = ['January','Febuary','March','April','May','June','Juluy','August','September','October','November','December'];
      var options="";
      montharr.map((op,i)=>{
         options+=`<option value="${op}" id="${i}" style="border-radius: 5px;"">${op}</option>`
      })
      document.getElementById("MonthDropdown").innerHTML=options;
   </script>
   <!--This allows the user to select the day of the month that the booking will start on-->
   <select id="dayDropdown" style="outline:none;padding: 0.4rem;border-radius: 5px; border: none; box-shadow: 0 0 10px rgb(202, 202, 202);margin: 0.8rem;"></select>
   <script>
      var dayarr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31];
      var options="";
      dayarr.map((op,i)=>{
         options+=`<option value="${op}" id="${i}" style="border-radius: 5px;"">${op}</option>`
      })
      document.getElementById("dayDropdown").innerHTML=options;
   </script>
   <br>
   End Date 
   <!-- This allows the user to select what month the booking ends on-->
   <select id="MonthDropdown2" style="outline:none;padding: 0.4rem;border-radius: 5px; border: none; box-shadow: 0 0 10px rgb(202, 202, 202);margin: 0.8rem;"></select>
   <script>
      var montharr2 = ['January','Febuary','March','April','May','June','Juluy','August','September','October','November','December'];
      var options="";
      montharr2.map((op,i)=>{
         options+=`<option value="${op}" id="${i}" style="border-radius: 5px;"">${op}</option>`
      })
      document.getElementById("MonthDropdown2").innerHTML=options;
   </script>
   <!-- THis allwos the user to select what day of the month that their booking will end on-->
   <select id="dayDropdown2" style="outline:none;padding: 0.4rem;border-radius: 5px; border: none; box-shadow: 0 0 10px rgb(202, 202, 202);margin: 0.8rem;"></select>
   <script>
      var dayarr2 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31];
      var options="";
      dayarr2.map((op,i)=>{
         options+=`<option value="${op}" id="${i}" style="border-radius: 5px;"">${op}</option>`
      })
      document.getElementById("dayDropdown2").innerHTML=options;
   </script>
    </select>
    <br>
    <input type="submit" value="Register">
   </form>

</body>
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT userid FROM users");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC));
{
  echo($row);
}

?>
</html>