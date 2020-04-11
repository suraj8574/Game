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

?>
<body>
<form method="post" name="form1" action=""  style=" margin-top: 150px;">
<center>

<table  cellspacing="10px"  >

      
		
        <tr>
          <td> First Name </td>
          <td> <input type="text" name="fname" required="required"/> </td>
        </tr>
		
        <tr>
          <td> Last Name </td>
          <td> <input type="text" name="lname" required="required"/> </td>
        </tr>
		
        <tr>
          <td>  Email </td>
          <td> <input type="email" name="email" required="required"/> </td>
        </tr>
      
       
		
        
</table>
<br />

          <input type="submit" name="game" value="  Start Game     " style="background-color:#3CF transparent" style="color:#0F6" style="outline-style:inset" />
          
 </center> 
</form>

<?php
require("connect.php");


if(isset($_POST['game']))
{
    
    $_SESSION["fname"]=$_POST['fname'];
    $_SESSION['lname']=$_POST['lname'];
    $_SESSION['email']=$_POST['email'];
   // print_r($_SESSION);
    echo '<script>window.location.href = "q1.php";</script>';
}
?>

</body>
</html>