<?php
    include('Admin Menu.html');
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
        
        <form action="Insert Detail.php" method="post" enctype="multipart/form-data">
        <table border="0" width="350px" cellspacing="5">
            <tr align="center">
                <td id="info">
                    INSERT INFORMATION
                </td>
            </tr>
            <tr align="center">
                <td>
                    <input type="text" placeholder="First Name" name="firstname"/>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <input type="text" placeholder="Last Name" name="lastname"/>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <input type="text" placeholder="Father Name" name="fathername"/>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <textarea placeholder="Address" name="address"></textarea>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <select name="city" id="city">
                        <option>City</option>
                        <option>Ahemdabad</option>
                        <option>Bhavnagar</option>
                        <option>Rajkot</option>
                        <option>Surat</option>
                    </select>
                </td>
            </tr>
            <tr align="center">
                <td>
                    Gender : <input type="radio" value="male" name="gender" checked="checked"/>Male <input type="radio" value="female" name="gender"/>Female
                </td>
            </tr>
            <tr align="center">
                <td>
                    Date Of Birth : <input type="date" name="DOB" />
                </td>
            </tr>
            <tr align="center">
                <td>
                    <input type="text" placeholder="Contact No" name="contactno"/>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <input type="text" placeholder="Class" name="class"/>
                </td>
            </tr>
            <tr align="center">
                <td>
                    Photo : <input type="file" name="photo"/>
                </td>
            </tr>
            <tR align="center">
                <td>
                    <input type="submit" value="SEND" id="btn"/>
                </td>
            </tR>
        </table>
        </form>
    </body>
</html>