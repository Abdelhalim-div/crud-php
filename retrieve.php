<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM oop");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <style>
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}


.button5 {
  background-color: lightblue;
  color: black;
  border: 2px solid #555555;
  
}

.button5:hover {
  background-color: #555555;
  color: white;
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: blue;
}
</style>
</style>
 </head>
<body>
<div class="navbar">
  <ul>
  <li><a class="active"></a></li>
  
  <li><button class="button button5" ><a href="insert.php"class="button button5" >add books</a></button></li>
  <button class="button button5"><a href="update.php"class="button button5">update</a></button></center>
  
</ul>
  </div>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table cellpadding="4" cellspacing="0" border id="customers">
  
  <tr>
    <td>First Name</td>
    <td>Last Name</td>
    <td>City</td>
    <td>Email id</td>
  </tr>
  <center>
 
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
    <td><?php echo $row["first_name"]; ?></td>
    <td><?php echo $row["last_name"]; ?></td>
    <td><?php echo $row["city_name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
</tr>

<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>