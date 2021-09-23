<?php
    $id=$_GET['sid'];
    $con=mysqli_connect('localhost','root','','paathshaala');
    $query="delete from student_detail where id=$id";
    mysqli_query($con,$query);
    header('location:Student Report.php');
?>