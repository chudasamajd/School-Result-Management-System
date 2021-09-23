<?php
    include("Menu.html");
?>
<html>
    <head>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            background-color: whitesmoke;
            
        }    
        #t1{
            margin-top: 450px;
        }
        #t2{
            margin-top: -125px;
        }
        .circle,.circle2{
            height: 95px;
            width: 140px;
            border: 3px solid #4a968d;
            border-radius: 50%;
            text-align: center;
            padding-top: 55px;
            padding-left: 5px;
            padding-right: 5px;
            font-family: arial;
            font-size: 14px;
            transition: all .2s;
        }
        .circle:hover,.circle2:hover{
            cursor: pointer;
            box-shadow: 0px 0px 0px 4px whitesmoke,0px 0px 0px 8px rgba(0,0,0,.1);
        }
        .circle2{
            height: 85px;
            padding-top: 65px;
        }
        #image1{
            position: absolute;
            top: 250;
            right:-155;
            transform: rotate(-90deg);
        }
        #image2{
            position: absolute;
            top:650;
            transform: rotate(180deg);
        }
        #info{
            width: 700px;
            height: 400px;
            //background-color: aqua;
            position: absolute;
            top:130px;
            left: 50%;
            transform: translate(-50%);            
        }
        #info ul li{
            list-style: circle;
            font-family: arial;
            font-size: 13px;
            text-align: justify;
        }
        #h1{
            position: relative;
            top: 500px;
        }
    </style>
    </head>
    <body>
        <div id="image1"><img src="Bottomimg2.png"/></div>
        
        <div id="info">
            <hr size="2px" width="10%" color="#4a968d" />
            <ul>
                <li>The main aim of our school is to promote all-round development of academic excellence, discipline.</li>
                <li>An institution in himself. He dominated the education scenario.</li>
                <li>We provide the unique approach to educating the child through freedom reaped rich rewards.</li>
                <li>Our teachers pay close attention to the social, emotional and academic needs of each individual, adapting curricula and lessons that fuel the fire more than fill the bucket.</li>
                <li>Put simply, a good school knows your child by name, a great school knows your child by heart.</li>
                <li>Our community works and plays together, sharing a love for the active mountain lifestyle that defines us and that has converted countless visitors into lifelong residents.</li>
                <li>
                We pride ourselves on celebrating individual achievements and supporting each other's struggles.
                </li>
                <li>
                    The result is a caring community of engaged learners that supports the greatness in one through the strength of many.
                </li>
                <li>Our mission : Develop Character, Seek Knowledge and Build Community.</li>
           </ul>
            
        </div>
        <hr size="2px" width="6%" color="#4a968d" id="h1"/>
        <table id="t1" border="0" align="center" cellspacing="100px">
            
            <tr>
                <td>
                    <div class="circle">
                        Real time push based notice board
                    </div>
                </td>
                 <td>
                    <div class="circle">
                        Messaging center for communicating with parents
                    </div>
                </td>
                 <td>
                    <div class="circle">
                        Send photos of events and activities at no cost
                    </div>
                </td>
            </tr>
        </table>
        <table id="t2" border="0" align="center" cellspacing="100px">
            <tr>
                <td>
                    <div class="circle2">
                        School branded mobile app
                    </div>
                </td>
                 <td>
                    <div class="circle2">
                        Post exam results and fee dues
                    </div>
                </td>
                 <td>
                    <div class="circle2">
                        Publish info to website and mobile
                    </div>
                </td>
            </tr>
        </table>
        <div id="image2"><img src="Bottomimg4.png"/></div>
    </body>
</html>