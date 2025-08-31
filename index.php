<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group - 2, Assignment - 1</title>
</head>
<body>
    <h1>Student Registration Form</h1>
    <form action="process.php" method="POST">
        <label for="name">Student Name:</label>
        <input type="text" id="name" name="firstname" placeholder="First Name"> - 
        <input type="text" id="name" name="lastname" placeholder="Last Name" ><br><br>

        <label for="mobile">Mobile no.: +95 - </label>
        <input type="text" id="mobile" name="mobile" ><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" ><br><br>

        <label for="password">Password:</label>
        <input type="text" id="password" name="password"><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="Male"> Male
        <input type="radio" id="female" name="gender" value="Female"> Female <br><br>

        <label for="department">Department:</label><br>
        <input type="checkbox" id="english"  name="department" value="English"> English
        <input type="checkbox" id="computer" name="department" value="Computer"> Computer
        <input type="checkbox" id="business" name="department" value="Business"> Business<br><br>

        <label for="address">Address:</label><br>
        <textarea id="address" name="address" rows="4" cols="30" ></textarea><br><br>

        <input type="submit" value="Register" name="submit">
        <a href="index.html">View All Registered Students</a>
        </form>
</body>
</html>
