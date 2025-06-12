
<?php
include('connection.php');

$id = $_GET['uid'];
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$vehicle = $_POST['vehicle'];
$number = $_POST['number'];

$sql = "UPDATE registration SET name='$name', age='$age', gender='$gender', address='$address', vehicle='$vehicle', number='$number' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: view.php");
    exit();
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

$conn->close();
?>
