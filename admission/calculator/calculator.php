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
    <title>Calculator</title>
</head>
<body>
    <div class="container">
        <div class="side-bar">
            <a class="side-bar-item" href="../admin/dashboard.php"><i class="fa fa-solid fa-house"></i>Home<i class="fa-solid fa-bars"></i></a>
            <a class="side-bar-item" href=""><i class="fa fa-solid fa-paper-plane"></i>Application</a>
            <a class="side-bar-item" href=""><i class="fa fa-solid fa-book-open-reader"></i>Programs</a>
            <a class="side-bar-item" href=""><i class="fa fa-solid fa-user-group"></i></i>Students</a>
            <a class="side-bar-item" href=""><i class="fa fa-solid fa-users"></i>Faculty</a>
            <a class="side-bar-item" href=""><i class="fa fa-solid fa-gear"></i>Settings</a>
            <a class="side-bar-item active" href=""><i class="fa fa-solid fa-calculator"></i>Calculator</a>
            <a class="side-bar-item" href="../login/logout.php"><i class="fa fa-solid fa-right-from-bracket"></i>Logout</a>
        </div>
        <div class="main-content">
            <div class="nav">
                <a href="">Profile</a>
            </div>
            <div class="content">
                <form class="dashboard-form" action="calculator.php" method="post">
                    <br>
                    <br>
                    <?php
                        $fn = 0;
                        $sn = 0;
                                          if(isset($_POST['fn'])){ 
                            $fn = $_POST['fn'];
                            $sn = $_POST['sn'];              
if(isset($_REQUEST['addition'])){
                            $res =  $fn + $sn; }
if(isset($_REQUEST['subtraction'])){
                            $res =  $fn - $sn; }
if(isset($_REQUEST['multiplication'])){
                            $res =  $fn * $sn; }
if(isset($_REQUEST['division'])){
                            $res =  $fn / $sn; }                          
                            
                        }
                    ?>
                    <label for="result">Result</label>
                    <input type="number" name="result" value=<?php echo $res; ?> disabled>
                    <label for="first-number">First Number</label>
                    <input type="number" id="first-number" name="fn" value=<?php echo $fn; ?> min=0 required>
                    <label for="second-number">Second Number</label>
                    <input type="number" id="second-number" name="sn" value=<?php echo $sn; ?> min=0 required>
                    <input name="addition" class="button" type="submit" value="Add the Two Numbers">
                    <input name="subtraction" class="button" type="submit" value="Subtract the Two Numbers">
                    <input name="multiplication" class="button" type="submit" value="Multiply the Two Numbers">
                    <input name="division" class="button" type="submit" value="Divide the Two Numbers">
                    <input class="button" type="submit" name="reset" value="Clear">
<br>
<hr>
<br>
<div class="gigacalculator" data-tool="/converters/convert-decimal-to-fraction.php" data-width="">
  <div class="gigacalctitle">Decimal to Fraction Converter</div>
  <div class="gigacalcfooter">
    <a href="https://www.gigacalculator.com/converters/convert-decimal-to-fraction.php">Decimal to Fraction Converter</a> by <a class="gigacalclink" href="https://www.gigacalculator.com/">GIGAcalculator.com</a>
  </div>
</div>
<script defer src="https://cdn.gigacalculator.com/embed.min.js"></script>


                </form>
            </div>
        </div>
    </div>
</body>
</html>