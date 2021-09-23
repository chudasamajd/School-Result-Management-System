<?php
    $id=$_GET['sid'];
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $fathername=$_POST['fathername'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $contact=$_POST['contactno'];
    
    $connect=mysqli_connect('localhost','root','','paathshaala');
    $query="update student_detail set fname='$fname',lname='$lname',fathername='$fathername',address='$address',city='$city',contact='$contact' where id=$id";
    
    mysqli_query($connect,$query);

    header('location:Student Report.php');
?>