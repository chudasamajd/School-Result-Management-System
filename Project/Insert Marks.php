<?php
    $id=$_POST['sid'];
    $class=$_POST['sclass'];
    $exam=$_POST['exam'];
    $s1=$_POST['s1'];
    $s2=$_POST['s2'];
    $s3=$_POST['s3'];
    $s4=$_POST['s4'];
    $s5=$_POST['s5'];
    $s6=$_POST['s6'];
    $s7=$_POST['s7'];
    $s8=$_POST['s8'];
    $s9=$_POST['s9'];
    $s10=$_POST['s10'];

    $connect=mysqli_connect('localhost','root','','paathshaala');

    if($id=='' || $class=='' || $exam=='Exam')
    {
        echo "<font size='7' face='arial black'><center>Invalid Entry...</center></font>";
    }
    else
    {
        $total = $s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9+$s10;
        
        $per = $total/10;
        
        $query="insert into marks(id,class,exam,sub1,sub2,sub3,sub4,sub5,sub6,sub7,sub8,sub9,sub10,total,percentage) values($id,$class,'$exam',$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8,$s9,$s10,$total,'$per')";
        
        mysqli_query($connect,$query);
        
        header('location:Add Marks.php');
    }

        
?>