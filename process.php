<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
			background-color: #ffd8d8ff; 
		}
    </style>
</head>
<body>
<?php
    echo "<h1>Form Submission Result</h1>";
    if (!isset($_POST['submit'])) {
        echo "No data submitted.";
        exit;
    }

    $firstname   = $_POST['firstname']  ;
    $lastname    = $_POST['lastname']   ;

    $mobile      = $_POST['mobile']     ;
    $email       = $_POST['email']      ;
    $gender      = $_POST['gender']    ?? '';
    $department  = $_POST['department'] ?? '';
    $address     = $_POST['address']    ;
    
    if ($firstname === '') {
        echo "<p style='color: red;'>fname is required.</p>";
    }
    if ($lastname === '') {
        echo "<p style='color: red;'>lname is required.</p>";
    }

    if ($mobile === '') {
        echo "<p style='color: red;'>mobile is required.</p>";
    }

    if ($email === '') {
        echo "<p style='color: red;'>email is required.</p>";
    }

    if ($gender === '') {   
        echo "<p style='color: red;'>gender is required.</p>";
    } 


    if ($address === '') {
        echo "<p style='color: red;'>address is required.</p>";
    }

    echo "Name: $firstname $lastname<br>";
    echo "Father's Name: $fathername<br>";
    echo "DOB: $dob<br>";
    echo "Mobile: +91- $mobile<br>";
    echo "Email: $email<br>";

    if ($gender === '') {
        echo 'Gender: ' . $_POST['gender'] . '<br>';
    }else {
        echo "Gender: $gender<br>";
    }

    echo "Course: $course<br>";
    echo "City: $city<br>";
    echo "Address: $address<br>";
    echo "Department: $department<br>";
    if ($department === '') {
        echo "<p style='color: red;'>No department selected.</p>";
    }

?>

</body>
</html>