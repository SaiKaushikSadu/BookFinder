<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD BOOK</title>
    <link rel="stylesheet" href="./add_book.css">
</head>
<body>

    <div class="container">
        <div class="box">
            <h1>ADD A NEW BOOK</h1>
        </div>
        <section class="upper">
            <form action="add_book.php" method="post">
                <div class="form_control1">
                    <label for="newbook">Name of the Book</label>
                    <input id="newbook" name="book_name" placeholder="Enter the name of the new book"/>
                </div>
                <!-- <div class="form_control3">
                    <label for="new_author">Name of the Author</label>
                    <input id="new_author" name="author_name" placeholder="Enter the name of the author"/>
                </div> -->
                <div class="form_control2">
                    <label for="new_shelf">Name of the Shelf</label>
                    <input id="new_shelf" name="shelf" placeholder="Enter the shelf number"/>
                </div>
                <div class="but">
                    <button name="submit" type="submit">Submit</button>
                </div>
            </form>
        </section>
    </div>
    
</body>
</html>

<?php

include("db_conn.php");

if(isset($_POST['submit'])){
    
$book_name=$_POST['book_name'];
// $author_name=$_POST['author_name'];
$shelf=$_POST['shelf'];

$sql="INSERT INTO maths_book (book_name,shelf) VALUES('$book_name','$shelf')";

$result=mysqli_query($conn,$sql);

echo    '<script>
            alert("Successfully Added Into Database");
            window.location.href="add_book.php";
        </script>';
}

?>