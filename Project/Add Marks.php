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
            position: absolute;
            top:50%;
            left: 58%;
            transform: translate(-50%,-50%);
            background-color: white;
            border: 1px solid rgba(0,0,0,.2);
        }
        input[type=number]{
            height: 30px;
            width: 80px;
            font-size: 11px;
            outline: none;
            border: none;
            border:1px solid rgba(0,0,0,.2);
            padding-left: 3px;
        }
        input[type=text]{
            height: 30px;
            width: 250px;
            outline: none;
            border: none;
            border:1px solid rgba(0,0,0,.2);
            padding-left: 5px;
            text-align: center;
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
        #info{
            text-align: center;
            font-family: arial;
            font-size: 17px;
            background-color: #4a968d;
            color:white;
            height: 40px;
        }
        #exam{
            height: 30px;
            width: 300px;
            outline: none;
            border: none;
            border:1px solid rgba(0,0,0,.2);
            padding-left: 5px;
            text-align: center;
        }
        a{
            text-decoration: none;
            color:black;
        }
     </style>
    </head>
    <body>
        <form action="Insert Marks.php" method="post">
        <table border="0" cellspacing="10">
            <tr>
                <td colspan="10" id="info">
                    ENTER MARKS
                </td>
            </tr>
            <tr align="center">
                <td colspan="3">
                    <input type="text" placeholder="Enter Student ID" name="sid" />
                </td>
                <td colspan="3">
                    <input type="text" placeholder="Enter Class" name="sclass" />
                </td>
                <Td colspan="4">
                    <select name="exam" id="exam">
                        <option>Exam</option>
                        <option>Preliminary</option>
                        <option>Final</option>
                    </select>
                </Td>
            </tr>

            
            <tr>
                <td>
                    Maths : 
                </td>
                <td>
                    <input type="number" min="0" max="100" name="s1" placeholder="SUBJECT 1"/>
                </td>
                <td>
                    History : 
                </td>
                <td>
                    <input type="number" min="0" max="100" name="s2" placeholder="SUBJECT 2"/>
                </td>
                <td>
                    Science :
                </td>
                <td>
                    <input type="number" min="0" max="100" name="s3" placeholder="SUBJECT 3"/>
                </td>
                <td>
                    Computer : 
                </td>
                <td>
                    <input type="number" min="0" max="100" name="s4" placeholder="SUBJECT 4"/>
                </td>
                <td>
                    PT : 
                </td>
                <td>
                    <input type="number" min="0" max="100" name="s5" placeholder="SUBJECT 5"/>
                </td>
            </tr>
            <tr>
                <td>
                    Sub 6 : 
                </td>
                <td>
                    <input type="number" min="0" max="100" name="s6" placeholder="SUBJECT 6"/>
                </td>
                <td>
                    Sub 7 :
                </td>
                <td>
                    <input type="number" min="0" max="100" name="s7" placeholder="SUBJECT 7"/>
                </td>
                <td>
                    Sub 8 :
                </td>
                <td>
                    <input type="number" min="0" max="100" name="s8" placeholder="SUBJECT 8"/>
                </td>
                <td>
                    Sub 9 :
                </td>
                <td>
                    <input type="number" min="0" max="100" name="s9" placeholder="SUBJECT 9"/>
                </td>
                <td>
                    Sub 10 :
                </td>
                <td>
                    <input type="number" min="0" max="100" name="s10" placeholder="SUBJECT 10"/>
                </td>
            </tr>
            <tr align="center">
                <td colspan="10">
                    <input type="submit" value="SEND" id="btn"/>
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>