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
  <td colspan="2"><b>4)</b> 	
Which of the following is not true?</td>
 
 </tr>
 <tr>
  <td><input type="radio" id="o1" name="q4" value="1">
<label for="o1">PHP can be used to develop web applications.</label><br>


  <td><input type="radio" id="o2" name="q4" value="2">
<label for="o2">PHP makes a website dynamic</label><br></td>
 
 </tr>
 <tr>
  <td><input type="radio" id="o3" name="q4" value="3">
<label for="o3">PHP applications can not be compile</label></td></td>
  <td><input type="radio" id="o4" name="q4" value="4">
<label for="o4">PHP can not be embedded into html.</label></td></td>
  
 </tr>
</table>
<br />

          <input type="submit" name="s4" value="  Submit    " style="background-color:#3CF transparent" style="color:#0F6" style="outline-style:inset" />
          
 </center> 
</form>
<?php

require("connect.php");
if(isset($_POST['s4']))
{
  
    $ans=$_POST["q4"];
    echo $ans;

   


if($ans!=4){
    session_destroy();
echo '<script>alert("You Lost");window.location.href = "index.php";</script>';
}
else{
    echo '<script>alert("Correct Answer");window.location.href = "q5.php";</script>';
    
}
mysqli_close($con);
    
}

?>

</body>
</html>