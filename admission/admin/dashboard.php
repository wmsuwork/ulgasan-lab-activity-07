<?php

    session_start();

    if (!isset($_SESSION['logged-in'])){
        header('location: ../login/login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/30ff5f2a0c.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
    <div class="container">
        <div class="side-bar">
            <a class="side-bar-item active" aria-disabled="true"><i class="fa fa-solid fa-house"></i>Home<i class="fa-solid fa-bars"></i></a>
            <a class="side-bar-item" href=""><i class="fa fa-solid fa-paper-plane"></i>Application</a>
            <a class="side-bar-item" href=""><i class="fa fa-solid fa-book-open-reader"></i>Programs</a>
            <a class="side-bar-item" href=""><i class="fa fa-solid fa-user-group"></i></i>Students</a>
            <a class="side-bar-item" href=""><i class="fa fa-solid fa-users"></i>Faculty</a>
            <a class="side-bar-item" href=""><i class="fa fa-solid fa-gear"></i>Settings</a>
            <a class="side-bar-item" href="../calculator/calculator.php"><i class="fa fa-solid fa-calculator"></i>Calculator</a>
            <a class="side-bar-item" href="../login/logout.php"><i class="fa fa-solid fa-right-from-bracket"></i>Logout</a>
        </div>
        <div class="main-content">
            <div class="nav">
                <a href="">Profile</a>
            </div>
        </div>
    </div>
</body>
</html>