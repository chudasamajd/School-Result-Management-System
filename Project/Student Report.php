<?php
    $con=mysqli_connect('localhost','root','','paathshaala');
    $query="select * from student_detail";
    $res=mysqli_query($con,$query);
?>
<html>
    <head>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            background-color: whitesmoke;
        }
        table{
            position: absolute;
            left: 50%;
            top:10%;
            transform: translate(-50%);
        }
        #headerow{
            background-color: #4a968d;
            color: white;
            font-family: arial black;
            font-size: 12px;
        }
        #datarow{
            background-color: white;
            font-family: arial;
            font-size: 13px;
        }
        #home{
            height: 30px;
            width: 160px;
            position: absolute;
            top:5%;
            left: 40%;
            transform: translate(-50%,-50%);
            font-family: arial;
            border: 2px solid #4a968d;
        }
        #home div{
            height: 50px;
            width: 140px;
            background-color: whitesmoke;
            text-align: center;
            margin-top: -5px;
            margin-left: 10px;
            line-height: 40px;
        }
        #print{
            height: 30px;
            width: 160px;
            position: absolute;
            top:5%;
            left: 55%;
            transform: translate(-50%,-50%);
            font-family: arial;
            border: 2px solid #4a968d;
        }
        #print div{
            height: 50px;
            width: 140px;
            background-color: whitesmoke;
            text-align: center;
            margin-top: -5px;
            margin-left: 10px;
            line-height: 40px;
        }
        a{
            text-decoration: none;
            color: black;
        }
        </style>
        <script src="jquery-1.10.2.min.js"></script>  
    <script language="javascript" type="text/javascript">
function print_page()
{
	var DocumentContainer = document.getElementById("reciept_detail");
	var WindowObject = window.open('', "PrintWindow", "width=1024,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes");
	
	WindowObject.document.writeln(DocumentContainer.innerHTML);
	WindowObject.document.close();
	WindowObject.focus();
	WindowObject.print();
	WindowObject.close();
}
</script>
    </head>
    <body>
        <a href="Admin%20Home.php"><div id="home"><div>HOME</div></div></a>
        <div id="print" onClick="return print_page();"><div>PRINT</div></div>
        <div id="reciept_detail" class="reciept_detail" style="height:500px">
        <table border="0" cellspacing="2" align="center">
            <tr align="center" id="headerow">
                <td width="20px">
                    ID
                </td>
                <td>
                    PHOTO
                </td>
                <td width="100px">
                    NAME
                </td>
                <td width="100px">
                    FATHER NAME
                </td>
                <td width="150px">
                    ADDRESS
                </td>
                <td width="80px">
                    CITY
                </td>
                <td width="90px">
                    CONTACT NO
                </td>
                <td>
                    DOB
                </td>
                <td width="50px">
                    CLASS
                </td>
                <td width="120px">
                    REGISTRATION DATE
                </td>
                <td width="90px">
                    ACTION
                </td>
            </tr>
            <?php
                while($data=mysqli_fetch_array($res))
                {
            ?>
            <tr align="center" id="datarow">
                <td width="20px">
                    <?php echo $data['id'];?>
                </td>
                <td>
                    <img src="Student%20Photos/<?php echo $data['photo'];?>" height="180px" width="150px"/>
                </td>
                <td width="100px">
                    <?php echo $data['fname']." ".$data['lname'];?>
                </td>
                <td width="100px">
                    <?php echo $data['fathername'];?>
                </td>
                <td width="150px">
                    <?php echo $data['address'];?>
                </td>
                <td width="80px">
                    <?php echo $data['city'];?>
                </td>
                
                <td width="90px">
                    <?php echo $data['contact'];?>
                </td>
                <td>
                    <?php echo substr($data['dob'],8,2)."-".substr($data['dob'],5,2)."-".substr($data['dob'],0,4);?>
                </td>
                <td width="50px">
                    <?php echo $data['class'];?>
                </td>
                <td>
                    <?php echo $data['rdate'];?>
                </td>
                <td>
                    <a href="Student%20Update.php?sid=<?php echo $data['id'];?>"><img src="Update.png" height="25px" width="25px"/></a>&nbsp;&nbsp;&nbsp;
                    <a href="Student%20Delete.php?sid=<?php echo $data['id'];?>"><img src="Delete.png" height="25px" width="25px"/></a>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
        </div>
    </body>
</html>