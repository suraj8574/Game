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
  <td colspan="2"><b>2)</b> 	
PHP is an example of ___________ scripting language.</td>
 
 </tr>
 <tr>
  <td><input type="radio" id="o1" name="q2" value="1">
<label for="o1">Server-side</label><br>


  <td><input type="radio" id="o2" name="q2" value="2">
<label for="o2">Client-side</label><br></td>
 
 </tr>
 <tr>
  <td><input type="radio" id="o3" name="q2" value="3">
<label for="o3">Browser-side</label></td></td>
  <td><input type="radio" id="o4" name="q2" value="4">
<label for="o4">In-side</label></td></td>
  
 </tr>
</table>
<br />

          <input type="submit" name="s2" value="  Submit    " style="background-color:#3CF transparent" style="color:#0F6" style="outline-style:inset" />
          
 </center> 
</form>
<?php

require("connect.php");
if(isset($_POST['s2']))
{
  
    $ans=$_POST["q2"];
    echo $ans;

   


if($ans!=1){
    session_destroy();
echo '<script>alert("You Lost");window.location.href = "index.php";</script>';
}
else{
    echo '<script>alert("Correct Answer");window.location.href = "q3.php";</script>';
    
}
mysqli_close($con);
    
}

?>

</body>
</html>