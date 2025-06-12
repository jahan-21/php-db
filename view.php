<!DOCTYPE html>
<html>
<head>
    <title>Data View</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f0f8ff;
            padding: 20px;
            text-align: center;
        }

        table {
            margin: 20px auto;
            width: 90%;
            background-color: #ffffff;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border: 1px solid #999;
            text-align: center;
            font-size: 16px;
        }

        th {
            background-color: #4CAF50;
            color: black;
        }

        button a {
            text-decoration: none;
            color: white;
            background-color: #4CAF50;
            padding: 10px 20px;
            border-radius: 5px;
        }

        button a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <button><a href="index.php">Add Registration</a></button>

    <?php
    include('connection.php');

    $sql = "SELECT * FROM registration";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>AGE</th>
                    <th>GENDER</th>
                    <th>ADDRESS</th>
                    <th>VEHICLE TYPE</th>
                    <th>NUMBER</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>"; 
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['vehicle'] . "</td>";
            echo "<td>" . $row['number'] . "</td>";
            echo "<td><a href='edit.php?editid=" . $row['id'] . "'>Edit</a></td>";
            echo '<td><a href="delete.php?deleteid=' . $row['id'] . '">Delete</a></td>';

           ?>
            
           <?php
 
            echo "</br>";
            echo "</tr>";
   }
  ?>
  </table>
  <?php
} 
else 
{
  echo "0 results";
}
?>
</body>
</html>