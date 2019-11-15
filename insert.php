<?php 
    include("conn.php");
    error_reporting(0);
?>
<html>
<head></head>
<body>
 
   
    <form action="" method="GET">
        Roll Num <input type="text" name="rno" value=""/><br> <br>  
        Name <input type="text" name="name" value=""/><br> <br>
        Class <input type="text" name="class" value=""/> <br> <br>
        <input type="submit" name="submit" value="Submit"/>
       
    </form>
   
<?php

    if($_GET['submit']) 
    {
        $rn= $_GET['rno']; 
        $sn = $_GET['name'];
        $cl = $_GET['class'];

        if($rn!="" && $sn!="" && $cl!="") 
        {
            $query = "Insert into main values ('$rn','$sn','$cl')";
            $data = mysqli_query($con,$query); 

            if($data) 
            {
                
                echo "<font color='green'> Record inserted. <a href='display.php'> Check List Here </a>";
                
            }
        }
        else 

        {
            echo "All dields should be filled up"; 
        }
    }
?>  
</body>
</html>


