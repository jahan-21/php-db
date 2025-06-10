<?php
 include('connection.php');
 $name = $_POST['name'];
 $age= $_POST['age'];
 $gender=$_POST['gender'];
 $address=$_POST['address'];
 $vehicle = $_POST['vehicle'];
 $number=$_POST['number'];
 $vehicleowned = isset($_POST['vehicleowned']) ? implode(", ", $_POST['vehicleowned']) : '';

 
$sql = "INSERT INTO registration (name, age, gender, address, vehicle, number, vehicleowned)
        VALUES ('$name', '$age', '$gender', '$address', '$vehicle', '$number', '$vehicleowned')";


{
  echo "New record created successfully";
   header("Location:view.php");//this line is for viewing the inserted data
} 

else 

{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>