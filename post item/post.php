<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
 <link rel="stylesheet" href="public/css/bootstrap.min.css">

  <title></title>
</head>
<body>
	<div style="margin-bottom: 15px; background-image:images/g.jpg">
    <body background="images/g.jpg">
      <font color="white">
    <div class="container">
      <ul class="nav nav-tabs">
      	<li>Do you want to View Items Instead?</li>
        <li class="nav-item">
          <a href="view/sale.php" class="nav-link btn"  role="button">
          Appartents
          </a>
         
        </li>
        <li class="nav-item">
          <a href="view/aprt.php" class="nav-link btn" role="button">Land</a>
        </li>
        <li class="nav-item">
          <a href="home.html" class="nav-link btn" role="button">Home</a>
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
<form enctype="multipart/form-data"
action="config/upload.php" method="POST"> 
 <div class="form-group">
            <label for="form-username">Select item to Post</label>
            <select class="form-control" name="item_typ" id="item_type">
              <option value="House" name="house" id="house">House</option>
              <option value="Land" name="land" id="land">Land</option>
            
           </select></br>
           <form action="/action_page.php">
           	<b>TO SELECT MULTIPLE</b></BR>
           	<h6><i>(hold down Ctrl or Shift key then select)</i></h6>
           select your image/s: <input type="file" name="pic" id="image" multiple onchange><br>
       </form>


          </div>
<div class="form-group">
            <label for="form-username">Price</label>
            <input type="text" name="price" required placeholder="Item Price" class="form-username form-control" id="item_price">
          </div>
          <div class="form-group">
            <label for="form-username">Locality</label>
            <input type="text" name="locality" required placeholder="Where is the item located?" class="form-username form-control" id="locality">
          </div>
          <div class="form-group">
            <label for="form-username">Description</label>
            <input type="text" name="description" required placeholder="Description" class="form-username form-control" id="description">
          </div>
          <div class="form-group">
            <label for="form-username">Email Address</label>
            <input type="email" name="email_address" required placeholder="email Address" class="form-username form-control" id="email_addres">
          </div>
          <div class="form-group">
            <label for="form-username">Phone Number</label>
            <input type="tel" name="phone_number" required placeholder="Phone number" class="form-username form-control" id="phone_number">
          </div>
<button name="upload" type="submit" value="submit">Upload_Item</button>
<button type="reset" value="reset">Clear</button>  
</form>
   </div>
      <div class="col-sm"></div>
    </div>
  </div>
</font>
</body>
</html>