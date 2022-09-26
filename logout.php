<?php
session_start();
if(isset($_SESSION['confirm'])){
    session_destroy();
    header('location:index.php');
}
?>