<html>
    <head>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            background-color: whitesmoke;
        }    
        #bigimg{
            height:100vh;
            width:100%;
            background-color: rgba(0,0,0,.5);
            position: fixed;
            top:50%;
            left: 50%;
            transform: translate(-50%,-50%);
            display: none;
        }
        #bigimg img{
            position: absolute;
            top:50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        #line{
            height: 50px;
            width: 5px;
            background-color: white;
            border-radius: 10px;
            transform: rotate(45deg);
            margin-left: 20px;
            
        }
        #line:before{
            content: '';
            height: 50px;
            width: 5px;
            background-color: white;
            border-radius: 10px;
            transform: rotate(-90deg);
            position: absolute;
        }
        #close{
            height: 50px;
            width: 45px;
            position: absolute;
            top:30;
            right:40px;
        }
        #eventtable{
            margin-top: 100px;
        }
        #eventtable td{
            font-family: arial;
            font-size: 14px;
        }
        #eventtable img{
            transition: all .5s;
        }
        #eventtable img:hover{
            cursor: pointer;
            opacity: .7;
        }
    </style>
    <script src="jquery-1.10.2.min.js"></script>
    <script>
        $(document).ready(function(){
             $("#i1").click(function(){
                $("#bigimg").fadeIn();
                $("#bigimg img").attr('src','bg.png');
             });
            $("#i2").click(function(){
                $("#bigimg").fadeIn();
                $("#bigimg img").attr('src','bg.png');
             });
            $("#i3").click(function(){
                $("#bigimg").fadeIn();
                $("#bigimg img").attr('src','bg.png');
             });
            $("#i4").click(function(){
                $("#bigimg").fadeIn();
                $("#bigimg img").attr('src','bg.png');
             });
            $("#i5").click(function(){
                $("#bigimg").fadeIn();
                $("#bigimg img").attr('src','bg.png');
             });
            $("#i6").click(function(){
                $("#bigimg").fadeIn();
                $("#bigimg img").attr('src','bg.png');
             });
             $("#close").click(function(){
                $("#bigimg").fadeOut(); 
             });
        });
    </script>
    </head>
    <body>
        <?php
            include('Menu.html');
        ?>
        <table border="0" align="center" id="eventtable" cellspacing="25px">
            <tr align="center">
                <td>
                    <img src="bg.png" height="250px" width="350px" id="i1" />
                </td>
                <td>
                    <img src="bg.png" height="250px" width="350px" id="i2"/>
                </td>
                <td>
                    <img src="bg.png" height="250px" width="350px" id="i3"/>
                </td>
            </tr>
            <tr align="center">
                <td>EVENT NAME</td>
                <td>EVENT NAME</td>
                <td>EVENT NAME</td>
            </tr>
            <tr align="center">
                <td>
                    <img src="bg.png" height="250px" width="350px" id="i4"/>
                </td>
                <td>
                    <img src="bg.png" height="250px" width="350px" id="i5"/>
                </td>
                <td>
                    <img src="bg.png" height="250px" width="350px" id="i6"/>
                </td>
            </tr>
            <tr align="center">
                <td>EVENT NAME</td>
                <td>EVENT NAME</td>
                <td>EVENT NAME</td>
            </tr>
        </table>
        
        <div id="bigimg">
            <div id="close">
                <div id="line">
                </div>
            </div>
            <img src="School.jpg" height="400px" width="650px"/>
        </div>
    </body>
</html>