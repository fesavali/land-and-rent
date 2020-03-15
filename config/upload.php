<?php 
include "conn.php";
 $errors = array();
if (count($_FILES) > 0) {
    if (is_uploaded_file($_FILES['image']['tmp_name'])) {
        require_once "conn.php";
        $imgData = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $imageProperties = getimageSize($_FILES['image']['tmp_name']);
        $item_typ= mysqli_real_escape_string($conn,htmlspecialchars($_POST['item_typ']));
$price = mysqli_real_escape_string($conn,htmlspecialchars($_POST['price']));
$locality= mysqli_real_escape_string($conn,htmlspecialchars($_POST['locality']));
$description= mysqli_real_escape_string($conn,htmlspecialchars($_POST['description']));
$email_address= mysqli_real_escape_string($conn,htmlspecialchars($_POST['email_address']));
$phone_number= mysqli_real_escape_string($conn,htmlspecialchars($_POST['phone_number']));
$nam= mysqli_real_escape_string($conn,htmlspecialchars($_POST['nam']));

        $sql = "INSERT INTO uploads(location,image_type,item_typ,item_price, locality, description, email_address, phone_number, uname)
	VALUES( '{$imgData}','{$imageProperties['mime']}','{$item_typ}','{$price}','{$locality}','{$description}','{$email_address}','{$phone_number}','{$nam}')";

        $current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on occurred<br/>" . mysqli_error($conn));
        if (isset($current_id)) {
           header("location:../mnlog.php");
        }

}
}

?>