<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK FINDER</title>
</head>

<body>
    <header>
        <a href="/index.php" class="logo">Logo</a>
        <ul class="navigation">
        
            <li onclick=""><a href="/index.php" class="active">Home</a></li>
            <li onclick="/pages/aboutus/about.html"><a href="./aboutus.php">About us</a></li>
            <li onclick="/pages/explore/explore.html"><a href="./explore.php">Explore</a></li>
    
        </ul>
    </header>
    <div class="container">
        <div class="quotes">
            <h1>A GOOD LIBRARY CAN PROVIDE FURNITURE OF MINDS AND THREADS FROM WHICH WE WEAVE OUR DREAMS</h1>
        </div>
        <div class="loginbuttons">
            <div class="buttons">
                <!-- <a href="./pages/student/stud.html" class="s"> -->
                <a href="./student_login.php" class="s">
                    <!-- <button class="demo" >student login</button> -->

                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="student.png" alt="student" style="width:300px;height:300px;">
                            </div>
                            <div class="flip-card-back">
                                <h1>Student login</h1>
                                <!-- <p>Lorem, ipsum dolor.</p>
                                <p>Lorem ipsum dolor sit amet.</p> -->
                            </div>
                        </div>
                    </div>
                </a>
                <a href="./librarian_login.php" class="p">
                    <!-- <button >librarian login</button> -->

                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="./librarain-benzin-preview-benzin-preview.png" alt="librarian" style="width:300px;height:300px;">
                            </div>
                            <div class="flip-card-back">
                                <h1>LIBRARIAN LOGIN</h1>
                                <!-- <p>Lorem, ipsum dolor.</p>
                                <p>Lorem ipsum dolor sit amet.</p> -->
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
</body>

</html>