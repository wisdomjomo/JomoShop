<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
</head>

<body>
    <?php
    session_start();
    $flag = false;
    $error_username = "";
    if (isset($_POST['verify'])) {
        $click = $_POST['click'] ?? 'empty';
        if ($click === 'empty') {
            $error_gender = "Please Select a  gender";
            $flag = true;
        }
        else{
            $error_gender = "";
            $flag = false;
        }
        $name = trim($_POST['name']);
        $username = trim($_POST['username']);
        if (strlen($username) < 6) {
            $error_username = "Your username should not be less than six characters";
            $flag = true;
        } else {
            $error_username = "";
            $flag = false;
        }
        $dateofbirth = $_POST['dateofbirth'];
        $email = trim($_POST['email']);
        if (!filter_var($email)) {
            $emailErr = "Invalid email format";
        }
        $pass1 = trim($_POST['pass1']);
        $pass2 = trim($_POST['pass2']);
        if ($pass1 !== $pass2) {
            $error_password = "Your password does not match";
            $flag = true;
        } else {
            $error_password = "";
            $flag = false;
        }
        // check if all fields is checked
        if ($flag == false) {
            if (!empty($click) && !empty($name) && !empty($username) && !empty($dateofbirth) && !empty($email) && !empty($pass1)) {
                $_SESSION['username'] = $username;
                $_SESSION['pass1'] = $pass1;
                header("location:index.php");
            } else {
                echo "<p class='fields'>Please fill all fields</p>";
            }
        }
    }
    ?>
    <div class="index">
        <div class="p1">
        </div>
        <form class="form" action="" method="Post">
            <div class="form-body">
                <label for="">I am a:</label> 
                <input type="radio" name="click" value="man">
                <label class="label">Man</label>
                <input type="radio" name="click" value="woman">
                <label class="label">Woman</label> <br> 
                <span><?php if (isset($error_gender)) echo $error_gender; ?></span>
            </div>
            <div class="form-body">
                <label for="">Full Name:</label> <br> 
                <input type="text" name="name" id="" placeholder="Indicate your name" value="<?php if(isset($name)) echo $name;?>">
            </div>
            <div class="form-body">
                <label for="">User Name:</label> <br>
                <input type="text" name="username" id="" placeholder="choose a username" value="<?php if(isset($username)) echo $username;?>"> <br>
                <span><?php if (isset($error_username)) echo $error_username; ?></span>
            </div>
            <div class="form-body">
                <label for="">Date of birth:</label> <br>
                <input type="date" name="dateofbirth" value="<?php if(isset($dateofbirth)) echo $dateofbirth;?>">
            </div>
            <div class="form-body">
                <label for="">E-mail:</label> <br>
                <input type="email" name="email" placeholder="Write your email" value="<?php if(isset($email)) echo $email;?>">
            </div>
            <div class="form-body">
                <label for="">Password:</label> <br>
                <input type="password" name="pass1" id="" placeholder="Set Password">
            </div>
            <div class="form-body">
                <label for="">Confirm Password:</label> <br>
                <input type="password" name="pass2" placeholder="Confirm Password"><br>
                <span><?php if (isset($error_password)) echo $error_password; ?></span>
            </div>
            <div class="form-body-1">
                <input type="submit" name="verify" value="CREATE PROFILE" id="search">
            </div>
            <div class="form-body-2">
                <label>Already have an account?</label>
                <a href="index.php">Login</a>
            </div>
        </form>
    </div>
    <?php
    if (isset($flag) && $flag === false) {
        if (isset($click)) $click;
        if (isset($name)) $name;
        if (isset($username)) $username;
        if (isset($dateofbirth)) $dateofbirth;
        if (isset($pass1)) $pass1;
    }
    ?>
</body>
</html>