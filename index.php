<?php
    require 'connect.php';
    require 'studentscreate.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group - 2, Assignment - 1</title>
</head>
<body>
    <h1>Student Registration Form</h1>
    <form action="" method="POST">
        <label for="name">Student Name:</label>
      
        <input type="text" id="name" name="name" placeholder="Name" ><br><br>

        <label for="mobile">Mobile no.: +95 - </label>
        <input type="text" id="mobile" name="mobile" ><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" ><br><br>


        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="Male"> Male
        <input type="radio" id="female" name="gender" value="Female"> Female <br><br>

        <label for="department">Department:</label><br>
        <input type="checkbox" id="english"  name="department" value="English"> English
        <input type="checkbox" id="computer" name="department" value="Computer"> Computer
        <input type="checkbox" id="business" name="department" value="Business"> Business<br><br>

        <label for="address">Address:</label><br>
        <textarea id="address" name="address" rows="4" cols="30" ></textarea><br><br>

        <button type="submit" value="Register" name="create_btn">Register</button>
        <br><br>
        <a href="index.html">View All Registered Students</a>
        </form>
</body>
</html>
