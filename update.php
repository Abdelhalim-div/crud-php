<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM oop");

?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data</title>
 <style>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: blue;
}
 </style>
 </head>
<body>
<ul>
  <li></li>
  <li></li>
  <li><button><a href="retrieve.php"​​class="button" border-radius: 12px>books</a></button></li>
  <li><button><a href="index.php"​​class="button" border-radius: 12px>Home</a></button></li>
</ul>
<?php
if (mysqli_num_rows($result) > 0) {
?>

<center>
<table cellpadding="6" cellspacing="0"border ​​>
	  <tr>
	    <td>userid</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>City</td>
		<td>Email id</td>
		<td>Action</td>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["userid"]; ?></td>
		<td><?php echo $row["first_name"]; ?></td>
		<td><?php echo $row["last_name"]; ?></td>
		<td><?php echo $row["city_name"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><button><a href="update-process.php?userid=<?php echo $row["userid"]; ?>">Update</a></button>
        <button><a href="delete-process.php?userid=<?php echo $row["userid"]; ?>">Delete</a></button></td>
      </tr>
			<?php
			$i++;
            } 
            
			?>
</table>
</center>
 <?php
}
else
{
    echo "No result found";
}
?>
<?php


?>
 </body>
</html>