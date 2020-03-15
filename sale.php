<?php 
include 'config/conn.php';

$sql= "SELECT * FROM uploads where item_typ='land'";
 $result = mysqli_query($conn,$sql);



 ?>
<!DOCTYPE html>
<html>
<head>
  <title>lands</title>
<link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body background="house/act.PNG">
     <div class="container">
      <ul class="nav nav-tabs">
        <li><b><i>Check other pages Instead?</i></b></li>
        <li class="nav-item">
          <a href="aprt.php" class="nav-link btn" name="appartments"  role="button">
          Appartents
          </a>
         
        </li>
        <li class="nav-item">
          <a href='post.php' class="nav-link btn" name="land" role="button">Post item</a>
        </li>
        <li class="nav-item">
          <a href="index1.php" class="nav-link btn" role="button">Home</a>
        </li>
         <li class="nav-item">
          <a href="ingia.php" class="nav-link btn" role="button">Manage_post</a></li>
               <li class="nav-item">
   <a href="index1.php?logout='1'" style="color: red;" class="nav-link btn" role="button">Logout</a></li>
        </li>
      </ul>
    </div>
   
  <?php 


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    // specify header with content type,
    // header("Content-type: image/jpg");
    //  header("Content-type: image/gif"); 
    // header("Content-type: image/png");
     echo'<table class="table table-responsive" border="1px" row="2" column="4" width="100%" style="align-items: center;">';
    echo'<tr>';
    echo'<th>Land image</th>';
    echo'<th width="60%">Price</th>';
    echo'<td width=40%>' .$row["item_price"]. '</td>';
    echo'</tr>';
echo "<tr>";
echo'<td Rowspan="4"><img src="data:image/jpeg;base64,'.base64_encode($row['location']) .'" /></td>';
echo'<th>Locality</th>';
echo'<td>' .$row["locality"]. '</td>';
echo'</tr>';
echo "<tr>";
echo'<th>Description</th>';
echo'<td>' .$row["description"]. '</td>';
echo'</tr>';
echo'<th>Email Address</th>';
echo'<td>' .$row["email_address"]. '</td>';
echo'</tr>';
echo'</tr>';
echo'<th>Phone Number</th>';
echo'<td>' .$row["phone_number"]. '</td>';
echo'</tr>';
echo "</br>";
echo "</br>";



        // echo "id: " . $row["id"]. " - Name: " . $row["neno"]. " " . $row["maana"]. "<br>";
    }
} else {
    echo "No Item posted yet";
 
}

mysqli_close($conn);
?>
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
</div>

</body>
</html>