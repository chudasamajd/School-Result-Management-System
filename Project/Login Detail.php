<?php
    $uid=$_POST['userid'];
    $pass=$_POST['userpass'];

    if($uid=="admin" && $pass=="admin1")
    {
        header('location:Admin Home.php');
    }
    else
    {
        header('location:Login.php');
    }
?>