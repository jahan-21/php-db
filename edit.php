<?php
include('connection.php');

$id = $_GET['editid'];
$sql = "SELECT * FROM registration WHERE id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Record not found!";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vehicle Registration Form</title>
    <style>
        form {
            background-color: rgb(182, 246, 245);
            padding: 30px;
            padding-left: 180px;
            border-radius: 100px;
            font-size: 25px;
            margin-left: 300px;
            margin-right: 300px;
        }

        td {
            color: black;
            padding: 12px;
            text-align: left;
            text-transform: capitalize;
        }

        input[type="submit"] {
            width: 300px;
            padding: 12px;
            background-color: rgb(246, 246, 246);
            border-radius: 25px;
        }
    </style>
</head>
<body>
    <h1 style="color: black; font-size: 50px; text-align: center;">EDIT VEHICLE REGISTRATION</h1>
    <form method="post" action="update.php?uid=<?php echo $row['id']; ?>">
        <table>
            <tr>
                <td>ENTER YOUR NAME:</td>
                <td><input required type="text" name="name" value="<?php echo $row['name']; ?>"></td>
            </tr>
            <tr>
                <td>ENTER YOUR AGE:</td>
                <td><input required type="number" name="age" value="<?php echo $row['age']; ?>"></td>
            </tr>
            <tr>
                <td>GENDER:</td>
                <td>
                    <input name="gender" type="radio" value="male" <?php if ($row['gender'] == 'male') echo 'checked'; ?>> Male
                    <input name="gender" type="radio" value="female" <?php if ($row['gender'] == 'female') echo 'checked'; ?>> Female
                </td>
            </tr>
            <tr>
                <td>ADDRESS:</td>
                <td><textarea rows="10" cols="20" required name="address"><?php echo $row['address']; ?></textarea></td>
            </tr>
            <tr>
                <td>ENTER VEHICLE TYPE:</td>
                <td>
                    <select required name="vehicle" style="padding:5px;width:170px;">
                        <option value="two_wheeler" <?php if ($row['vehicle'] == 'two_wheeler') echo 'selected'; ?>>Two Wheeler</option>
                        <option value="four_wheeler" <?php if ($row['vehicle'] == 'four_wheeler') echo 'selected'; ?>>Four Wheeler</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ENTER YOUR MOBILE NUMBER:</td>
                <td><input required type="number" name="number" value="<?php echo $row['number']; ?>"></td>
            </tr>
        
        </table>
        <input type="submit" value="Update" name="submit">
    </form>
</body>
</html>
