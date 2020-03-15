<?php
include "config/man.php";
$error = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
$nam = mysqli_real_escape_string($db,htmlspecialchars($_POST['nam']));
$pin = mysqli_real_escape_string($db,htmlspecialchars($_POST['pin'])); 
$pin = md5($pin);
$sql = "SELECT id FROM conf WHERE username = '$nam' and password = '$pin'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result); 
if($count ==1){
$_SESSION['nam'] = $nam;
$_SESSION['success'] = "You are now logged in";
header('location: mn.php');
}else {
         $error = "Your username or pin is invalid";
      }
   }
?>
<html>
<style type="text/css">
  li {
    list-style: none;
  }
</style>
   
   <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    


    <title>login</title>

 
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="main.css">
  </head>

   
   <body>
   <main role="main" style="padding-top:10px; margin-top:70px; border-radius: 10px;">
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333;border-radius: 10px; " align = "left">
            <div style = "background-color:green; color:#FFFFFF; padding:8px; text-align: center; border-radius: 10px;"><b>Login</b></div>
        
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                <font color="white">
      <div class="input-group">
    <label><b><i>Name:</i></b></label>
  <input type="text" name="nam" placeholder="Enter Username here" style="border-radius: 3px;"/>
</div><br/>
  <div class="input-group">
    <label><b><i>Pin:</i></b></label>
  <input type="password" name="pin" placeholder="Enter your pin here" style="border-radius: 3px;"/>
</div><br/>
  <input type = "submit" value = "LOGIN"/><br />
                  <li>-Not Posted Item yet? <a href="post.php">  signup  </a> </li>
                  </font>
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
          
            </div>
        
         </div>
      
      </div>

   </body>
</html>