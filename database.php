<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "for books";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
$con=mysqli_connect($servername,$username,$password,"$dbname");
   if(!$conn){
      die('Could not Connect My Sql:' .mysql_error());
   }
?>