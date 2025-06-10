<html>
<head>
    <title>data view</title>
</head>
<style>
    
     body 
       {
            font-family: Arial;
            background-color: #f0f8ff;
            padding: 20px;
            text-align: center;
        }

        table
        {
            margin: 20px auto;
            width: 90%;
            background-color: #ffffff;
            
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
</style>
<body>

    <button><a href="index.php">Add Registration</a></button>

    <?php
    include('connection.php'); 

    $sql = "SELECT * FROM registration";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table >
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>AGE</th>
                    <th>GENDER</th>
                    <th>ADDRESS</th>
                    <th>VEHICLE TYPE</th>
                    <th>NUMBER</th>
                </tr>";
        while($row = $result->fetch_assoc()) 
        {
            echo "<tr>"; 
            echo "<td>"; 
            echo $row['id'];  
            echo "</td>";
            echo "<td>"; 
            echo $row['name'];  
            echo "</td>";  
            echo "<td>";   
            echo $row["age"];   
            echo "</td>";  
            echo "<td>";    
            echo $row["gender"];   
            echo "</td>";  
            echo "<td>";    
            echo $row["address"];   
            echo "</td>";  
            echo "<td>";    
            echo $row["vehicle"];   
            echo "</td>";  
            echo "<td>";    
            echo $row["number"];   
            echo "</td>"; 
            echo "</tr>";  
        }
        echo "</table>";
    } 
    
    $conn->close();
    ?>
</body>
</html>