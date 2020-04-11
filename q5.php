<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<?php
session_start();
//print_r($_SESSION);
?>
<body>
<form method="post" name="form1" action="" >
<center>

<table cellspacing="10px">
 <tr>
  <td colspan="2"><b>5)</b>When you need to obtain the ASCII value of a character which of the following function you apply in PHP?</td>
 
 </tr>
 <tr>
  <td><input type="radio" id="o1" name="q5" value="1">
<label for="o1">chr( );</label><br>


  <td><input type="radio" id="o2" name="q5" value="2">
<label for="o2">asc( );</label><br></td>
 
 </tr>
 <tr>
  <td><input type="radio" id="o3" name="q5" value="3">
<label for="o3">ord( );</label></td></td>
  <td><input type="radio" id="o4" name="q5" value="4">
<label for="o4">val( );</label></td></td>
  
 </tr>
</table>
<br />

          <input type="submit" name="s5" value="  Submit    " style="background-color:#3CF transparent" style="color:#0F6" style="outline-style:inset" />
          
 </center> 
</form>
<?php

require("connect.php");
if(isset($_POST['s5']))
{
  
    $ans=$_POST["q5"];
   // echo $ans;
   $fname= $_SESSION["fname"];
   $lname= $_SESSION['lname'];
    $email=$_SESSION['email'];
   // print_r($_SESSION);


if($ans!=3){
    session_destroy();
echo '<script>alert("You Lost");window.location.href = "index.php";</script>';
}
else{
    $q="insert into game_detail(first_name,last_name,email) values('".$fname."','".$lname."','".$email."')";
    $n=mysqli_query($con,$q);
    if($n)
    {   session_destroy();
        echo '<script>alert("You Won");window.location.href = "index.php";</script>';
        
    }

   


}

mysqli_close($con);
    
}

?>

</body>
</html>