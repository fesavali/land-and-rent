<?php
include "config/upload.php";
include "config/reg.php";
$error = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
$name = mysqli_real_escape_string($db,htmlspecialchars($_POST['oname']));
$pin = mysqli_real_escape_string($db,htmlspecialchars($_POST['pin'])); 
$pin = md5($pin);
$sql = "SELECT * FROM uploads WHERE name = '$name' and pin = '$pin'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result); 
if($count ==1){
$_SESSION['name'] = $name;
$_SESSION['success'] = "You are now logged in";
header('location: mn.php');
}else {
         $error = "Your username or Password is invalid";
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
    
    


    <title>alter posted items</title>

 
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="main.css">
  </head>

   
   <body>
   <main role="main" style="padding-top:10px; margin-top:70px; border-radius: 10px;">
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333;border-radius: 10px; " align = "left">
            <div style = "background-color:green; color:#FFFFFF; padding:8px; text-align: center; border-radius: 10px;"><b>Credentials</b></div>
        
            <div style = "margin:30px">
               
               <form action = "trak.php" method = "post">
                <font color="white">
      <div class="input-group">
    <label><b><i>Name:</i></b></label>
  <input type="text" name="oname" placeholder="Enter Username here" style="border-radius: 3px;"/>
</div><br/>
 <div class="input-group">
    <label><b><i>Pin:       </i></b></label>
  <input type="text" name="pin" placeholder="Enter Pin here" style="border-radius: 3px;"/>
</div>

<br/>
  <input type = "submit" value = "LOGIN"/><br />
                  <li>-Not Posted item yet? <a href="index1.php">Home</a> </li>
                  </font>
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
          
            </div>
        
         </div>
      
      </div>

   </body>
</html>
