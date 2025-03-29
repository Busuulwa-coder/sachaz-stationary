<?php
require 'connect.php';

// query to fetch all rows
$query =mysqli_query($con,"select * from customer ");

//check if rows exist;
if(mysqli_num_rows($query) >0){

echo "<table border='1'> ";
	echo "<tr>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Age</th>
	<th>Email</th>
	<th>Registered On</th>
	<td>Action</td>
	</tr>";

//fetch rows using while loop
while($udetails = mysqli_fetch_assoc($query)){
echo "<tr>";
echo "<td>".$udetails['fname']."</td>";
echo "<td>".$udetails['lname']."</td>";
echo "<td>".$udetails['age']."</td>";
echo "<td>".$udetails['email']."</td>";
echo "<td>".$udetails['created_at']."</td>";
echo "<td>";
echo "<a href='update.php?id=".$udetails['id']."'>Edit</a> | ";

echo "<a href='delete.php?id=".$udetails['id']."'>Delete</a>";
echo "</td>";
echo "</tr>";
}
echo "</table>";
}else{ 
echo "no records found";
}

//close connection
mysqli_close($con);
?>


