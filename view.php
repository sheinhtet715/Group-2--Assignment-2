<?php
    require 'connect.php';

    if (isset($_GET['id'])) {
    $post_id_to_update = $_GET['id'];
        
    $post = mysqli_query($db,"SELECT * FROM registered_students WHERE id=$post_id_to_update");

    if(mysqli_num_rows($post) == 1){
        foreach($post as $row){
            $id = $row['id'];//table->name
            $name =$row['name'];
            $mobile = $row['mobile_number'];
            $email = $row['email'];
            $gender = $row['gender'];
            $department = $row['department'];
            $address = $row['address'];

        }
    }
}

    $nameError ='';
    $mobileError ='';
if(isset($_POST['update_button'])){
    $name = $_POST['name'];
    $mobile = $_POST['mobile_number'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $department = $_POST['department'];
    $address = $_POST['address'];


    if(empty($id)){
        $idError="The id field is required";
    }

    if(empty($name)){
        $nameError="The name field is required";
    }
    if(empty($mobile)){
        $mobileError="The mobile field is required";
    }
   if(!empty($name) && !empty($mobile) && !empty($email) && !empty($gender) && !empty($department) && !empty($address)){
        $sql = "UPDATE registered_students SET name='$name', mobile_number='$mobile', email='$email', gender = '$gender',  department='$department', address='$address'
        WHERE id=$post_id_to_update";
        $result = mysqli_query($db,$sql);
        if($result){
            header("Location: view.php?msg=Record updated successfully");
        }else{
            echo "Failed: " . mysqli_error($db);
        }
    }  
}  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Document</title>
     <style>
        *{
            margin: 0;
            padding: 0;
          
        }
        body{
            padding: 20px 10px;


        }

        table {
        width: 100%;
        border-collapse: collapse; 
        margin-bottom: 20px;
        }

        table, th, td {
          border: 1px solid #b4b2b2ff; 
        }

        th, td {
          padding: 8px;
          text-align: left;
        }
        th {
            background-color:  #d8dadcff;
        }

    </style>
</head>
<body>

    <?php if (!isset($post_id_to_update)): ?>
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
            <td><a href="view.php?id=<?php echo $student['id']; ?>">Edit</a></td>

        </tr>
        <?php } ?>
            </tbody>
    </table>
        <a href="index.php">Register a New Student</a>
    <?php endif; ?>




    <?php if (isset($post_id_to_update)): ?>

    <h1>Edit Student Record</h1>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="name">Student Name:</label>
      
        <input type="text" id="name" name="name" placeholder="Name" value="<?php echo $name ?>"><br><br>

        <label for="mobile">Mobile no.: +95 - </label>
        <input type="text" id="mobile" name="mobile_number" value="<?php echo $mobile ?>"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email?>"><br><br>

        <input type="radio" id="male" name="gender" value="Male" <?php if($gender=="Male"){echo "checked";} ?>> Male
        <input type="radio" id="female" name="gender" value="Female" <?php if($gender=="Female"){echo "checked";} ?>> Female
        <br><br>

        <label for="department">Department:</label><br>
        <input type="checkbox" id="english" name="department" value="English" <?php if($department=="English"){echo "checked";} ?>> English
        <input type="checkbox" id="computer" name="department" value="Computer" <?php if($department=="Computer"){echo "checked";} ?>> Computer
        <input type="checkbox" id="business" name="department" value="Business" <?php if($department=="Business"){echo "checked";} ?>> Business
        <br><br>
        
        <label for="address">Address:</label><br>
        <textarea id="address" name="address" rows="4" cols="30" ><?php echo $address; ?></textarea><br><br>

        <button type="submit" value="Update" name="update_button">Update Record</button>
        <br><br>
        <a href="view.php">Cancel and Go Back to List</a>
        </form>

        <?php endif; ?>

</body>
</html>