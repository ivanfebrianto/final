<?php
if(isset($_POST['submit']))
{

    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    require_once '../../assets/connect.php';
    require_once 'functions.inc.php';

    loginUser($conn, $username,$pwd);
}
else
{
    header("location: ../template.php?page=login");
    exit();
}
?>