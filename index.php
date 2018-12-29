<?php
$connect =mysqli_connect('127.0.0.1','mohammad','m1234','mba');
$query ="SELECT * FROM mohammad";
$result =mysqli_query($connect,$query);
$row =mysqli_fetch_array($result);

echo '
<html>
<head>
    <title>آزمایشگاه نرم افزار </title>
    <script type="text/javascript"></script>
    <style>
      body{
            background-color: 	#FFA07A	;
          }
       .header{
            background-color: 	#7FFF00;
            width: 100%; height: 100px;
            box-shadow: 3px 10px #008fFF;
           text-align: center;
            font-size: 35px;
            padding-top: 5%;
           border-radius:10px; 
           
        }
        .menu{
            width: 600;
            height:400;
            background-color: #00FFFF;
            margin-top:50px;
            margin-left: 25%;
            border-radius: 100px;
            text-align: center;
            font-size: 20px;
            box-shadow: 0px 0px 80px 5px #00FFFF;
            border-style:Groove;
            border-color: #ffffff;
         
           
        }
         .menu:hover{
            width: 600;
            height:400;
            
            margin-top:50px;
            margin-left: 25%;
            box-shadow: 0px 0px 80px 15px #ffffff;
            background-color: #00FFFF;
            text-align: center;
            font-size: 20px;
            border-style:Groove;
            border-color: #ffffff;
             
           
        }
        

    </style>
</head>
<body>

    
  <form class="header"> آزمایشگاه مهندسی نرم افزار</form>
    <form class="menu" > 
    
    ';
    

    echo '<br><br>';
    echo "Name:       " , $row[0] ,'<br><br>';
    echo "family:     " , $row[1] ,'<br><br>';
    echo "phone:      " , $row[2] ,'<br><br>';
    echo "madrak:     " , $row[3] ,'<br><br>';
    echo "student id: " , $row[4] ,'<br><br>';
    echo "address :   " , $row[5] ,'<br><br>';   
    
    
      
echo '  
    </form>

    
    
       




</body>
</html>

';
?>
