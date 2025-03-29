<?php
require 'connect.php';

// check if the customer id is in the address bar
if(isset($_GET["id"])){

//store the customer id in the variable $id
$id =$_GET["id"];

// check if user clicked submit button
if(isset($_POST['submit'])){

// get the vaules form fields and store in variables $fn,$ln,$ag,$em
$fn = $_POST['fname'];
$ln = $_POST['lname'];
$ag = $_POST['age'];
$em = $_POST['email'];

//sql statement to update table rows
$sql = "UPDATE customer set fname='$fn', lname='$ln',age='$ag',email='$em' where id='$id'";
if(mysqli_query($con,$sql)){ 
echo "record updated successfully";
//header('Location:display.php');
}else{

echo "update failed";}
mysqli_close($con);
}
}else{
echo "no id set";
}

?>
<form method="POST" action="">
First Name<input type="text" name="fname" value="" required="required"/>
Last Name<input type="text" name="lname" value="" required="required"/>
Age<input type="number" name="age" value="" required="required"/>
Email<input type="email" name="email" value="" required="required"/>
<input type="submit" name="submit" value="Update"/>

</form>