<?php
include 'config/man.php';
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
       <p><b><i><h3>The following credentials will be used when managing your post
          </h3></i></b></p><i>(use same username selected in previous page)</i>
           <form action="config/man.php" method="post">
            <div class="form-group">
            <label for="form-username"><b><i>Name: </i></b><h6><i></i></h6></label>
            <input type="text" name="nam" required placeholder="Select username"  id="nam">
          </div>
           <div class="form-group">
            <label for="form-username"><b><i>Pin:</i></b></label>
            <input type="password" name="pn_1" required placeholder="Choose pin" id="pn_1">
          </div>
           <div class="form-group">
            <label for="form-username"><b><i>Confirm Pin:</i></b></label>
            <input type="password" name="pn_2" required placeholder="Confirm Pin"  id="pn_2">
          </div>
          <div class="form-group">
           <button type="submit" name="tery" class="btn btn-primary pull-right">Register</button>
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
    <font color="white">
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
 </font>
</div>
</body>
</html>