<!DOCTYPE html>
<html>
    <head>
    <style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=email], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 50%;
  
}
</style>
    </head>
  <body> 
      <CENTER>
      <div ​>
	<form method="post" action="process.php"required>
		First name:<br>
		<input type="text" name="first_name"required>
		<br>
		Last name:<br>
		<input type="text" name="last_name"required>
		<br>
		City name:<br>
		<input type="text" name="city_name"required>
		<br>
		Email Id:<br>
		<input type="email" name="email">
		<br><br>
		<input type="submit" name="save" value="submit">
        <button><a href="retrieve.php">books</a></button>
    </form>
</div>
</CENTER>
  </body>
</html>