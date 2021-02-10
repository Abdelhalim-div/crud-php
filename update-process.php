<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE oop SET userid='" . $_POST['userid'] . "', first_name='" . $_POST['first_name'] . "', last_name='" . $_POST['last_name'] . "', city_name='" . $_POST['city_name'] . "' ,email='" . $_POST['email'] . "' WHERE userid='" . $_POST['userid'] . "'");
$message = "Record Modified Successfully "." Now redirecting...";
header('Location: update.php');
    }

$result = mysqli_query($conn,"SELECT * FROM oop WHERE userid='" . $_GET['userid'] . "'");
$row = mysqli_fetch_array($result);
//
?>
<html>
<head>
<title>Update  Data</title>
</head>
<body>
<form name="frmUser" method="post" >
<div><?php if(isset($message)) { echo $message; }

 ?>
</div>
<div style="padding-bottom:5px;">
<a href="retrieve.php">data List</a>
</div>
UserID: <br>
<input type="hidden" name="userid" class="txtField" value="<?php echo $row['userid']; ?>">
<input type="text" name="userid"  value="<?php echo $row['userid']; ?>">
<br>
First Name: <br>
<input type="text" name="first_name" class="txtField" value="<?php echo $row['first_name']; ?>">
<br>
Last Name :<br>
<input type="text" name="last_name" class="txtField" value="<?php echo $row['last_name']; ?>">
<br>
City:<br>
<input type="text" name="city_name" class="txtField" value="<?php echo $row['city_name']; ?>">
<br>
Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>

</body>
</html>
<?php  

?>