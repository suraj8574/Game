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
  <td colspan="2"><b>1)</b> PHP Stands for?</td>
 
 </tr>
 <tr>
  <td><input type="radio" id="o1" name="q1" value="1">
<label for="o1">PHP Hypertex Processor</label><br>


  <td><input type="radio" id="o2" name="q1" value="2">
<label for="o2">PHP Hyper Markup Processor</label><br></td>
 
 </tr>
 <tr>
  <td><input type="radio" id="o3" name="q1" value="3">
<label for="o3">PHP Hyper Markup Preprocessor</label></td></td>
  <td><input type="radio" id="o4" name="q1" value="4">
<label for="o4">PHP Hypertext Preprocessor</label></td></td>
  
 </tr>
</table>
<br />

          <input type="submit" name="s1" value="  Submit    " style="background-color:#3CF transparent" style="color:#0F6" style="outline-style:inset" />
          
 </center> 
</form>
<?php
require("connect.php");


if(isset($_POST['s1']))
{
  
    $ans=$_POST["q1"];
    echo $ans;

   


if($ans!=4){
    session_destroy();
echo '<script>alert("You Lost");window.location.href = "index.php";</script>';
}
else{
   echo '<script>alert("Correct Answer");window.location.href = "q2.php";</script>';
    
}
mysqli_close($con);
    
}

?>

</body>
</html>