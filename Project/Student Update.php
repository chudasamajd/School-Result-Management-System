<?php
    include('Admin Menu.html');

    $id=$_GET['sid'];
    $con=mysqli_connect('localhost','root','','paathshaala');
    $query="select * from student_detail where id=$id";
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
            background-color: white;
            position: absolute;
            top:50%;
            left: 55%;
            transform: translate(-50%,-50%);
            border: 1px solid rgba(0,0,0,.2);
        }
        input[type=text]{
            height: 30px;
            width: 250px;
            outline: none;
            border: none;
            border:1px solid rgba(0,0,0,.2);
            padding-left: 5px;
        }
        input[type=date]{
            height: 30px;
            width: 160px;
            outline: none;
            border: none;
            border:1px solid rgba(0,0,0,.2);
            padding-left: 5px;
        }
        select{
            height: 30px;
            width: 250px;
            outline: none;
            border: none;
            border:1px solid rgba(0,0,0,.2);
            padding-left: 5px;
        }
        textarea{
            height: 60px;
            width: 250px;
            outline: none;
            border: none;
            border:1px solid rgba(0,0,0,.2);
            padding-left: 5px;
        }
        input[type=file]{
            height: 30px;
            width: 200px;
            outline: none;
        }
        #info{
            height: 40px;
            background-color: #4a968d;
            font-family: arial;
            font-size: 17px;
            color: white;
        }
        #btn{
            height: 30px;
            width: 90px;
            background-color: #4a968d;
            font-family: arial;
            font-size: 14px;
            color: white;
            border: none;
            border-radius: 20px;
            outline: none;
        }
        a{
            text-decoration: none;
            color:black;
        }
    </style>
    </head>
    <body>
        
        <form action="Update Detail.php?sid=<?php echo $id;?>" method="post" enctype="multipart/form-data">
        <table border="0" width="350px" cellspacing="5">
            <tr align="center">
                <td id="info">
                    UPDATE INFORMATION
                </td>
            </tr>
            <?php
                while($data=mysqli_fetch_array($res))
                {
            ?>
            <tr align="center">
                <td>
                    <input type="text" placeholder="First Name" name="firstname" value="<?php echo $data['fname'];?>"/>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <input type="text" placeholder="Last Name" name="lastname" value="<?php echo $data['lname'];?>"/>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <input type="text" placeholder="Father Name" name="fathername" value="<?php echo $data['fathername'];?>"/>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <textarea placeholder="Address" name="address"><?php echo $data['address'];?></textarea>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <select name="city" id="city">
                        <option>City</option>
                        <?php
                            if($data['city']=="Ahemdabad")
                            {
                        ?>
                        <option selected>Ahemdabad</option>
                        <option>Bhavnagar</option>
                        <option>Rajkot</option>
                        <option>Surat</option>
                        <?php
                            }
                            else if($data['city']=="Bhavnagar")
                            {
                        ?>
                        <option>Ahemdabad</option>
                        <option selected>Bhavnagar</option>
                        <option>Rajkot</option>
                        <option>Surat</option>
                        <?php
                            }
                            else if($data['city']=="Rajkot")
                            {
                        ?>
                        <option>Ahemdabad</option>
                        <option>Bhavnagar</option>
                        <option selected>Rajkot</option>
                        <option>Surat</option>
                        <?php
                            }
                            else if($data['city']=="Surat")
                            {
                        ?>
                        <option>Ahemdabad</option>
                        <option>Bhavnagar</option>
                        <option>Rajkot</option>
                        <option selected>Surat</option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>

            <tr align="center">
                <td>
                    <input type="text" placeholder="Contact No" name="contactno" value="<?php echo $data['contact'];?>"/>
                </td>
            </tr>
            <tR align="center">
                <td>
                    <input type="submit" value="SEND" id="btn"/>
                </td>
            </tR>
            <?php
                }
            ?>
        </table>
        </form>
    </body>
</html>