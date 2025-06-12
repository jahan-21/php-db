<?php
include('connection.php');
 $id = $_GET['deleteid'];

 $sql = "DELETE FROM registration WHERE id='$id '";


if (mysqli_query($conn, $sql)) { 
  echo "Record deleted successfully";
  header("Location:view.php");

} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
$conn->close();	
?>