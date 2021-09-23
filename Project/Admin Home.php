<?php
    include('Admin Menu.html');
?>
<html>
    <head>
    <style>
        body{
            overflow: hidden;
            background-color: whitesmoke;
        }
        table{
            position: absolute;
            top:30%;
            left: 50%;
            transform: translate(-50%,-50%);
        }    
        #box1{
            height: 90px;
            width: 120px;
            border: 7px solid #4a968d;
            border-radius: 50%;
            text-align: center;
            font-family: arial;
            font-size: 18px;
            padding-top: 30px;
            position: absolute;
            top:50%;
            left: 35%;
            transform: translate(-50%,-50%);
        }
        #box2{
            height: 90px;
            width: 120px;
            border: 7px solid #4a968d;
            border-radius: 50%;
            text-align: center;
            font-family: arial;
            font-size: 18px;
            padding-top: 30px;
            position: absolute;
            top:50%;
            left: 75%;
            transform: translate(-50%,-50%);
        }
        #chart{
            position: absolute;
            top:35%;
            left: 41%;
            transform: translate(-50%,-50%);
        }
    </style>
    </head>
    <body>
       
                    <div id="box1">0<br>QUERY</div>
                
                    <div id="box2">0<br>FEEDBACK</div>
               
        <div id="chart" style="margin-left:-10px; margin-top:-20px;"><?php include("chart.php"); ?></div>
    </body>
</html>