<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">
    <title>Sign In</title>
</head>
<body>
<?php
session_start();
$loginerror = $fillall = "";
if(isset($_POST['login'])){
  $username = trim($_POST['username']);
  $pass1 = trim($_POST['pass1']);
  if(!empty($username) && !empty($pass1)){
    if($username == $_SESSION['username'] && $pass1 == $_SESSION['pass1']){
      $_SESSION['confirm'] = $username;
      header('location:home.php');
    }
    else{
      $loginerror = "Your Username and Password is incorrect";
    }
  }
  else{
    $fillall = "Please fill all field to login";
  }
}
?>
<div class="div">
  <div class="seconddiv">
  </div>
<form action="" method="post">
<?php
if(isset($loginerror)){
    echo "<p style='color:red;'>$loginerror</p>";
}
?>
<?php
if(isset($fillall)){
    echo "<p style='color:red;'>$fillall</p>";
}
?>
        <div class="h1">
          <h1>SIGN INTO YOUR ACCOUNT</h1>
        </div>
        <label>Enter your username</label><br> <br>
        <input type="text" name="username"> <br>
         <br> <br>
         <label>Enter your password</label><br> <br>
        <input type="password" name="pass1"> <br>
         <br> <br>
        <input type="submit" value="Login" name="login"><br> <br>
        <a href="#">Forgot Password?</a> <br> <br>
        <label>Don't have an account?
        <a href="signup.php">Register here</a>  <br> <br>
        <a href="#"><p>Terms of use. Privacy</p></a>
</form>
</div>
</body>
</html>