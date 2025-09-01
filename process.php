<?php
    session_start();
    require 'connect.php';
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
         <?php if(!isset($_SESSION['message'])): ?>
        <h1>New Record Created Successfully</h1>
        <a href="index.php">Back to Registration</a><br>
        <a href="view.php">View all Registration</a>
        <?php endif; ?>
        <?php if(isset($_SESSION['message'])): ?>
        <h1>Record Updated Successfully</h1>
        <a href="index.php">Back to Registration</a><br>
        <a href="view.php">View all Registration</a>
         <?php unset($_SESSION['message']); ?>
    <?php endif; ?>

</body>
</html>