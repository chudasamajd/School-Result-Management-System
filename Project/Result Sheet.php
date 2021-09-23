<?php
    $con=mysqli_connect('localhost','root','','paathshaala');
    $query="select * from marks";
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
        <table border="0" align="center" cellspacing="2px" cellpadding="5px">
            <tr id="headerow" align="center">
                <td width="20px">
                    ID
                </td>
                <td width="100px">
                    CLASS
                </td>
                <td width="100px">
                    EXAM
                </td>
                <td width="50px">
                    SUB 1
                </td>
                <td width="50px">
                    SUB 2
                </td>
                <td width="50px">
                    SUB 3
                </td>
                <td width="50px">
                    SUB 4
                </td>
                <td width="50px">
                    SUB 5
                </td>
                <td width="50px">
                    SUB 6
                </td>
                <td width="50px">
                    SUB 7
                </td>
                <td width="50px">
                    SUB 8
                </td>
                <td width="50px">
                    SUB 9
                </td>
                <td width="50px">
                    SUB 10
                </td>
                <td width="80px">
                    TOTAL
                </td>
                <td width="80px">
                    PERCENTAGE
                </td>
            </tr>
            <?php
                while($data=mysqli_fetch_array($res))
                {
            ?>
            <tr id="datarow" align="center">
                <td>
                    <?php echo $data['id'];?>
                </td>
                <td>
                    <?php echo $data['class'];?>
                </td>
                <td>
                    <?php echo $data['exam'];?>
                </td>
                <td>
                    <?php echo $data['sub1'];?>
                </td>
                <td>
                    <?php echo $data['sub2'];?>
                </td>
                <td>
                    <?php echo $data['sub3'];?>
                </td>
                <td>
                    <?php echo $data['sub4'];?>
                </td>
                <td>
                    <?php echo $data['sub5'];?>
                </td>
                <td>
                    <?php echo $data['sub6'];?>
                </td>
                <td>
                    <?php echo $data['sub7'];?>
                </td>
                <td>
                    <?php echo $data['sub8'];?>
                </td>
                <td>
                    <?php echo $data['sub9'];?>
                </td>
                <td>
                    <?php echo $data['sub10'];?>
                </td>
                <td>
                    <?php echo $data['total'];?>
                </td>
                <td>
                    <?php echo $data['percentage'];?>%
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
        </div>
    </body>
</html>