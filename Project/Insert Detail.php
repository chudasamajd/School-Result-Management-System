<?php
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $fathername=$_POST['fathername'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $gender=$_POST['gender'];
    $dob=$_POST['DOB'];
    $contact=$_POST['contactno'];
    $class=$_POST['class'];
    $path=$_FILES['photo']['name'];
    $rdate=date('d/m/Y');
    
    $connect=mysqli_connect('localhost','root','','paathshaala');
    $query="insert into student_detail(fname,lname,fathername,address,city,gender,dob,contact,class,photo,rdate) values('$fname','$lname','$fathername','$address','$city','$gender','$dob','$contact',$class,'$path','$rdate')";
    
    mysqli_query($connect,$query);

    move_uploaded_file($_FILES['photo']['tmp_name'],"Student Photos/".$path);

    header('location:Student Insert.php');
?>