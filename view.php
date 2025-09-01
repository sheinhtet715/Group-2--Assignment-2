<?php
    require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
     <style>
        body{
            padding : 25px;

        }
    </style>
</head>
<body>
    <h1>Registered Students</h1><br>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Mobile No.</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Department</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
             <?php 
              $query ="SELECT * FROM registered_students";
              $students = mysqli_query($db,$query);
                foreach($students as $student){
            //  foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student['id']; ?></td>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['mobile_number']; ?></td>
            <td><?php echo $student['email']; ?></td>
            <td><?php echo $student['gender']; ?></td>
            <td><?php echo $student['department']; ?></td>
            <td><?php echo $student['address']; ?></td>
            <td><a href="edit.php?id=<?php echo $student['id']; ?>">Edit</a></td>
        </tr>
        <?php } ?>
            </tbody>
    </table>
    <a href="index.php">Register a New Student</a>

</body>
</html>