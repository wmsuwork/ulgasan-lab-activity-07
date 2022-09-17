<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body>
    <?php

        $data = array(
          'user1' => array(
            'username' => 'jaydee',
            'password' => 'jaydee'
          ),
          'user2' => array(
            'username' => 'jerimie',
            'password' => 'jerimie'
          ),
          'user3' => array(
            'username' => 'ulgasan',
            'password' => 'ulgasan'
          )
        );

  session_start();

  if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    $loginStatus = false;
  
    foreach($data as $i) {
      if($i['username'] == $_POST['username'] && $i['password'] == $_POST['password']){
        $loginStatus = true;
      }
    }
  
    if($loginStatus){
      $error = '';
      $_SESSION['logged-in'] = $username;    
      header('location: ../admin/dashboard.php');
    }  else  {
      $error = 'Invalid username/password. Try again.';
    }
  }
    
    ?>
    <div class="login-container">
        <form class="login-form" action="login.php" method="post">
            <h3 class="title">Admission System</h3>
            <hr class="divider">
            <br>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter username" required tabindex="1">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter password" required tabindex="2">
            <input class="button" type="submit" value="Login" name="login" tabindex="3">
            <?php
            
                if(isset($error)){
                    echo '<div><p class="error">'.$error.'</p></div>';
                }
                
            ?>
        </form>
    </div>
</body>
</html>
