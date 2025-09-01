<?php
    require 'connect.php';

    if(isset($_GET['id'])){
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


        if(empty($name)){
            $nameError="The name field is required";
        }
        if(empty($mobile)){
            $mobileError="The mobile field is required";
        }
        if(empty($email)){
            $emailError="The email field is required";
        }
        if(empty($gender)){
            $genderError="The gender filed is required";
        }
        if(empty($department)){
            $departmentError="The department field is required";
        }
        if(empty($address)){
            $addressError="The address field is required";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group - 2, Assignment - 1</title>
</head>
<body>
    <h1>Edit Student Record</h1>
    <form action="" method="POST">
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
</body>
</html>
