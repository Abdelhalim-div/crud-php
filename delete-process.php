<?php
include_once 'database.php';
$sql = "DELETE FROM oop WHERE userid='" . $_GET["userid"] . "'";
if (mysqli_query($conn, $sql)) {
   

    echo "Record deleted successfully ";
    $dir = dirname(($_GET['delete']));
    header ("Location:update.php ".'?dir='.$dir);
    die();
    // sleep(10);
    // header("Location: update.php");
    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

?>