<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vehicle Registration Form</title>
    <style>
        form {
            background-color:rgb(182, 246, 245);
            padding: 30px;
            padding-left: 180px;
            border-radius: 100px;
            font-size: 25px;
            margin-left: 300px;
            margin-right: 300px;

            
        }

        td {
            color:black;
            padding: 12px;
            text-align: left;
            text-transform: capitalize;
        }

        input[type="submit"] {
            width:300px;
            padding: 12px;
            background-color:rgb(246, 246, 246);
            border-radius: 25px;
        }
    </style>
</head>
<body>
    <h1 style="color: black; font-size: 50px; text-align: center;">VEHICLE REGISTRATION FORM</h1>
    <form method="post" action="action.php">
        <table>
            <tr>
                <td>ENTER YOUR NAME:</td>
                <td><input required type="text" name="name"></td>
            </tr>
            <tr>
                <td>ENTER YOUR AGE:</td>
                <td><input required type="number" name="age"></td>
            </tr>
            <tr>
                <td>GENDER:</td>
                <td required>
                    <input name="gender" type="radio" value="male"> Male
                    <input name="gender" type="radio" value="female"> Female
                </td>
            </tr>
            <tr>
                <td>ADDRESS:</td>
                <td><textarea rows="10" cols="20"  required  name="address"></textarea></td>
            </tr>
            <tr>
                <td>ENTER VEHICLE TYPE:</td>
                <td>
                    <select required style="padding:5px;width:170px;" name="vehicle">
                        <option value="two_wheeler">Two Wheeler</option>
                        <option value="four_wheeler">Four Wheeler</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ENTER YOUR MOBILE NUMBER:</td>
                <td><input required type="number" name="number"></td>
            </tr>
            <tr>
                <td>ENTER VEHICLE TYPE:</td>
                <td>
                    <input type="checkbox" name="vehicleowned[]" value="bike"> Bike
                    <input type="checkbox" name="vehicleowned[]" value="car"> Car
                </td>
            </tr>
  
        </table>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
