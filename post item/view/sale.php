<?php
$servername = "localhost";
$myusername = "root";
$mypassword = "";
$db = "project";
include 'conn.php';
if (isset($_POST["land"])){

$land = $_POST['item_typ'];
$sql= "SELECT  item_typ, price, locality, description, email_address, phone_number  FROM uploads  where doc_typ='$house'";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>found</title>
  <link rel="stylesheet" href="public/css/bootstrap.min.css">

</head>
<body align="center">
  
<?php
if ($result->num_rows > 0){
 while ($row = $result->fetch_assoc())
 {
  echo'<table class="table table-responsive" border="1px" row="2" column="4">';
    echo'<tr>';
      echo'<th>Document Type</th>';
      echo'<th>details</th>';
      echo'</tr>';
echo'<tr row-span="6">' .$row["item_typ"]. '</tr>';
echo'<td>';
echo'<tr>' .$row["price"]. '</tr>';echo'</br>';
echo'<tr>' .$row["locality"]. '</tr>';echo'</br>';
echo'<tr>' .$row["description"]. '</tr>';echo'</br>';
echo'<tr>' .$row["email_address"]. '</tr>';echo'</br>';
echo'<tr>' .$row["phone_number"]. '</tr>';
echo'</td>';
echo "</br>";
echo "</br>
<H1>We found Your Document.</h1> </br> 
  <h3> Kindly contact the following named person to get them</h3>
  <h4><i>(Remember to post a lost item whenever you come accross any. Thank you)</i></h4>";
 }
}else{
  echo "<h1>Sorry. No Match Found.</h1></br> <h3><i>We hope someone finds them soon.</i></h3>";
}
$conn->close();

?>

</body>
</html>