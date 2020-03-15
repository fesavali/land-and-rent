<?php 
include('config/reg.php');
//if not logged in
if(empty($_SESSION['username'])) {
	header('location: login.php');
}
?>
<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="style.css">
<title>House and land sell</title>
<link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body background="house/act.PNG">
	<div class="content">
		<?php if(isset($_SESSION['success'])): ?>
			<div class="error success">
				<h3>
					<?php
					echo $_SESSION['success'];
					unset($_SESSION['success']);
				?>
			</h3>
			</div>
		<?php endif ?>	
		<?php if (isset($_SESSION["username"])): ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		
		<?php endif ?>
	</div>
	  <div class="wrapper"> 
	<!--
var image1=new Image()
image1.src="house/hse1.PNG"
var image2=new Image()
image2.src="house/hse2.PNG"
var image3=new Image()
image3.src="house/hse3.PNG"
var image4=new Image()
image4.src="house/hse4.PNG"
var image5=new Image()
image5.src="house/hse5.PNG"
var image6=new Image()
image6.src="house/hse6.PNG"
var image7=new Image()
image7.src="house/hse7.PNG"
var image8=new Image()
image8.src="house/hse8.PNG"
var image9=new Image()
image9.src="house/hse9.PNG"
-->
 <style type="text/css">
<link rel="stylesheet" href="public/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
body {background-color: #43d798;}
</style>
</head>
<body>
  	<div id="header">
       <img src="house/nashh.PNG" width="100%";height="100%" />
</div>
<div class="nash">
<div id='cssmenu'>
<ul>
  <li class="active">
    <a href='index1.php'><span>Home</span></a></li>

   
     <li class="active"><a href='sale.php'  type="submit" name="land" role="button"><span>Land</span></a></b></li>
   


     
   <li class="active"><a href='aprt.php' name="appartments" role="button"><span>Apartments</span></a></li>
 


   <li class="active"><a href='post.php'><span>Post Item</span></a></li>

   <li class="active"><a href='ingia.php'><span>Manage_post</span></a></li>
   
   <li class="active">
   <a href="index1.php?logout='1'" style="color: red;">Logout</a></li>
  
</ul>
</div>
</div>
<div id="main">
   <h2>SITE: Land$Apartments</h2>
                <h3>ABOUT US</h3>
                  <p>This site is developed to help its users automate the process of acquiring property in this case land and appartments that are for sale or renting.Users create their accounts by regestering before loging in to the main site.<p>
                
                <h3>CONTACT US<h3>
                  Email:sisi@gmail.com
                  Cell:0712345678 </br>
                  </br>
                </br>
                </br>
                
                  Our social media links are below.
                
                  <table>
                    <tr>
                  <td><a href="http://facebook.com"><img src="house/fb.PNG" height="40" width="50"/></a></td>
         <td><a href="http://twitter.com"><img src="house/twt.PNG" height="40" width="50"/></a></td>
     </tr>
  </table>
  </div>
	<div id="extras"> 
  <img src="house/gif.gif" width=100%; />    
        
           
               
        
	    
	</div>
    <!--
<table>
<tr><td><img src="img/reviw1.PNG" name="slideshow" alt="imageslideshow" />
<script type="text/javascript">
<!-
var numberImage=1
function myslide(){
document.images.slideshow.src=eval("image"+numberImage+".src")
if(numberImage<11)
numberImage++
else
numberImage=1
setTimeout("myslide()",4500)
}
myslide()
//->
</script>

</div>

</td>
     </tr>
</table>
      <img src="house/erand.PNG" width="100%" height="70"/>
<br/>
-->
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
</h2>
</div>
</body>
</div>
</html>

</body>
</html>