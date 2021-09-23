<?php
    include('Menu.html');
?>

<html>
    <head>
        <style>
            body{
                margin: 0px;
                padding: 0px;
                font-family: arial;
                background-color: #4a968d;
            }
            #box{
                position: absolute;
                top:57%;
                left: 50%;
                transform:translate(-50%,-50%);
                width: 700px;
                background-color:white;
                padding: 40px;
                box-sizing: border-box;
                background-image: url(Bottomimg3.png);
                background-repeat: no-repeat;
                background-position: bottom left;
                background-size: 45% 50%;
                box-shadow: 15px 15px 5px rgba(0,0,0,.1);
            }
            #box h2{
                margin: 0 0 40px;
                padding: 0px;
                text-transform: uppercase;
                text-align: center;
                margin-left: 50px;
            }
            #box input{
                padding: 10px 0;
                margin-bottom: 30px;
                font-size: 13px;
            }
            #box textarea{
                height: 80px;
                resize: none;
                padding: 10px 0;
                margin-bottom: 20px;
                font-size: 13px;
            }
            #box input,#box textarea{
                width: 100%;
                box-sizing: border-box;
                box-shadow: none;
                outline: none;
                border: none;
                border-bottom: 1px solid silver;
            }
            #box input[type=submit]{
                border-bottom: none;
                cursor: pointer;
                margin-bottom: 0px;
                border-radius: 20px;
                background-color: black;
                color: white;
                width: 200px;
            }
            #box form div{
                position: relative;
            }
            #box form div label{
                font-size: 12px;
                color:silver;
                position: absolute;
                top:10;
                left: 0;
                pointer-events: none;
                transition: all .3s;
            }
            #box input:focus ~ label,#box textarea:focus ~ label,#box input:valid ~ label,#box textarea:valid ~ label{
                top:-12;
                left: 0;
                color: black;
                font-weight: bold;
                font-size: 10px;
            }
        </style>
    </head>
    <body>
        <div id="box">
            <h2>Contact Us</h2>
            <form>
                <table border="0" width="60%" cellspacing="10" align="right">
                    <tr>
                        <Td width="50%">
                            <div>
                                <input type="text" name="username" required="">
                                <label>FIRST NAME</label>
                            </div>
                        </Td>
                        <Td width="50%">
                            <div>
                                <input type="text" name="username" required="">
                                <label>LAST NAME</label>
                            </div>
                        </Td>
                    </tr>
                    <tr>
                        <Td colspan="2">
                            <div>
                                <input type="text" name="usermail" required="">
                                <label>E-MAIL</label>
                            </div>
                        </Td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div>
                                <textarea required="" name="message"></textarea>
                                <label>MESSAGE</label>
                            </div>
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2">
                            <input type="submit" value="SEND">
                        </td>
                    </tr>
                </table>
            </form>
        </div>    
    </body>
</html>