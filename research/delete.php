<?php
if(isset($_GET["id"])){
$id = $_GET["id"];

require 'connect.php';

$sql = "delete from customer where id='$id'";

if(mysqli_query($con,$sql)){


echo "Deleted sucessfully";
}
else{

echo "no row deleted";
}
}
?>