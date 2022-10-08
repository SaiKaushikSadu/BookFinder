<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REMOVE STUDENT</title>
    <link rel="stylesheet" href="./remove_student.css">
</head>
<body>

    <div class="container">
        <div class="box">
            <h1>REMOVE A STUDENT</h1>
        </div>
        <section class="upper">
            <form action="remove_student.php" method="post">
                <div class="form_control1">
                    <label for="r_id">Library ID</label>
                    <input id="r_id" name="library_id" placeholder="Enter the ID of the Student"/>
                </div>
                <div class="form_control2">
                    <label for="r_pass">Password</label>
                    <input id="r_pass" name="password" placeholder="Enter the Password"/>
                </div>
                <div class="but">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </section>
        
    </div>
    
</body>
</html>

<?php

include("db_conn.php");

if(isset($_POST['submit'])){

$library_id=$_POST['library_id'];
$password=$_POST['password'];

$sql = "DELETE FROM student_login WHERE student_login.library_id = '.$library_id.' ";

$result=mysqli_query($conn,$sql);

echo    
        '<script>
            alert("Successfully removed from the database");
            window.location.href="remove_student.php";
        </script>';
}

?>