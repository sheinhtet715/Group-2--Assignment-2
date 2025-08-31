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
    $fathername  = $_POST['fathername'] ;
    
    $day         = $_POST['day']        ;
    $month       = $_POST['month']      ;
    $year        = $_POST['year']       ;
    $dob = ($day !== '' || $month || '' || $year !== '')
     ? "$day-$month-$year"
     : '--';

    $mobile      = $_POST['mobile']     ;
    $email       = $_POST['email']      ;
    $password    = $_POST['password']   ;
    $gender      = $_POST['gender']    ?? '';

    $course      = $_POST['course']     ?? 'select';
    $department  = $_POST['department'] ?? '';
    $city        = $_POST['city']       ;
    $address     = $_POST['address']    ;
    
    if ($firstname === '') {
        echo "<p style='color: red;'>fname is required.</p>";
    }
    if ($lastname === '') {
        echo "<p style='color: red;'>lname is required.</p>";
    }

    if ($fathername === '') {
        echo "<p style='color: red;'>Father's name is required.</p>";
    }
    if ($day === '') {
        echo "<p style='color: red;'>day is required.</p>";
    }
    if ($month === '') {
        echo "<p style='color: red;'>month is required.</p>";
    }
    if ($year === '') {
        echo "<p style='color: red;'>year is required.</p>";
    }

    if ($mobile === '') {
        echo "<p style='color: red;'>mobile is required.</p>";
    }

    if ($email === '') {
        echo "<p style='color: red;'>email is required.</p>";
    }

    if ($password === '') {
        echo "<p style='color: red;'>password is required.</p>";
    }

    if ($gender === '') {   
        echo "<p style='color: red;'>gender is required.</p>";
    } 

    if ($course === 'select') {
        echo "<p style='color: red;'>course is required.</p>";
    }

    if ($city === '') {
        echo "<p style='color: red;'>city is required.</p>";
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