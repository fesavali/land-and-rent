<?php 
//if not logged in

?>

<?php
require 'config/conn.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <title></title>
</head>
<body>
  <div style="margin-bottom: 15px; background-image:post item/images/g.jpg">
    <body background="post item/images/g.jpg">
      <font color="white">
    <div class="container">
      <ul class="nav nav-tabs">
        <li><b><i>Check other pages Instead?</i></b></li>

        <li class="nav-item">
          <a href="aprt.php" class="nav-link btn" name="appartments"  role="button">
          Appartents
          </a>
         
        </li>
        <li class="nav-item">
          <a href="sale.php" class="nav-link btn" name="land" role="button">Land</a>
        </li>
        <li class="nav-item">
          <a href="index1.php" class="nav-link btn" role="button">Home</a>
        </li>
        <li class="nav-item">
          <a href="ingia.php" class="nav-link btn" role="button">Manage_post</a></li>
               <li class="nav-item">
   <a href="index1.php?logout='1'" style="color: red;" class="nav-link btn" role="button">Logout</a></li>
        </li>
        <!-- <li style="margin-top: 4px" class="nav-item">
          <a class="nav-link btn btn-sm" href="/departments">Department</a>
        </li>
        <li style="margin-top: 4px" class="nav-item pull-right">
          <a class="nav-link btn btn-sm" href="/logout">Sign Out</a>
        </li> -->
      </ul>
    </div>
  <div class="container">
    <div class="row">
      <div class="col-sm"></div>
      <div align="left" class="col-sm">
              <hr>
        <form action="config/upload.php" enctype="multipart/form-data" method="post"> 
 <div class="form-group" >
            <label for="form-username">Select item to Post</label>
            <select class="form-control" name="item_typ" id="item_typ">
              <option value="House" name="house" id="house">House</option>
              <option value="Land" name="land" id="land">Land</option>
          </select>
          </div>
          <div class="form-group">
            <b>TO SELECT MULTIPLE</b></BR>
            <h6><i>(hold down Ctrl or Shift key then select)</i></h6>
           select your image/s: <input type="file" name="image" id="image"><br>
         </div>

     <div class="form-group">
            <label for="form-username">Price</label>
            <input type="text" name="price" required placeholder="Item Price (specify Ksh,Dollars or any other)" class="form-username form-control" id="price">
          </div>
          <div class="form-group">
            <label for="form-username">Locality</label>
            <input type="text" name="locality" required placeholder="Where is the item located?" class="form-username form-control" id="locality">
          </div>
          <div class="form-group">
            <label for="form-username">Description</label>
            <input type="text" name="description" required placeholder="Description ie Size/condition" class="form-username form-control" id="description">
          </div>
          <div class="form-group">
            <label for="form-username">Owner Email Address</label>
            <input type="email" name="email_address" required placeholder="email_address" class="form-username form-control" id="email_addres">
          </div>
          <div class="form-group">
            <label for="form-username">Phone Number</label>
            <input type="tel" name="phone_number" required placeholder="Phone number" class="form-username form-control" id="phone_number">
          </div>
          <div class="form-group">
            <label for="form-username">Name:<h6><i>(This will be required when managing your item)</i></h6></label>
            <input type="tel" name="nam" required placeholder="Select a username" class="form-username form-control" id="nam">
          </div>
   
          <div class="form-group">
           <button type="submit" name="name" class="btn btn-primary pull-right">upload_file</button>
          </div>
        </form>
      </div>
      <div class="col-sm"></div>
    </div>
  </div>

  <script type="text/javascript" src="public/js/jquery-3.3.1.js" />
  </script>
  <script type="text/javascript" src="public/js/bootstrap.min.js" />
  </script>
  <div id="footer">
<table style="width: 100%">
      <tr>
          <th>Thank you so much our sponsors and partners, you are highly appriciated.</th>
        </tr>
        <tr>
    <td><img src="house/ira.PNG" height="60" width="20%"/></td>
    <td><img src="house/zamara.PNG" height="60"/></td>
    <td><img src="house/task.PNG" height="60"/></td>
    <td><img src="house/ferventia.PNG" height="60"/></td>
    <td><img src="house/rem.PNG" height="60"/></td>
    </tr>
</table>
</div>
</body>
</html>
