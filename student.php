<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <link rel="stylesheet" href="student.css">
</head>

<body>
    <div class="Bookdetails">
        <form action="student.php" class="form" method="post">
          <img src="./book_icon.jpeg" alt="image">
          <h2>Student Access</h2>

          <div class="inputbook">
            <label for="bookname">Enter book name</label>
            <br>
            <input type="text" size="50"  name="book_name" id="book_name" >
            
          </div>
          <br>
          <div class="inputauthor">
            <label for="Authorname">Enter the name of Subject</label>
            <br>
            <input type="text" size="50" name="Authorname" id="Authorname" >
          </div>
          <br>
          <button class="btn" name="submit">Submit</button>
          
        </form>
</body>
</html>

<?php

include("db_conn.php");

if(isset($_POST['submit'])){
$book_name=$_POST['book_name'];

$sql="SELECT * FROM maths_book WHERE book_name='$book_name'";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$count=mysqli_num_rows($result);

if($count>0){
    echo '<script>
            alert("Found the book");
            window.location.href="student.php";
        </script>';

    header("Location:topview0.php");
}
else{
    echo '<script>
            alert("Invalid Book Name");
            window.location.href="student.php";
        </script>';
}

}

?>