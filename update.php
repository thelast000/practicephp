<?php 
    include("conn.php");
    error_reporting(0);

     //$_GET['rn'];
     //$_GET['sn'];
     //$_GET['cl'];

?>
<html>
<head></head>
<body>
 
   
    <form action="" method="GET">
        Roll Num <input type="text" name="rno" value="<?php echo $_GET['rn'] ?>"/><br> <br>  
        Name <input type="text" name="name" value="<?php echo $_GET['sn'] ?>"/><br> <br>
        Class <input type="text" name="class" value="<?php echo $_GET['cl'] ?>"/> <br> <br>
        <input type="submit" name="update" value="Update"/>
    
    </form>
   
<?php

    if($_REQUEST['update']) 
    {
        $rollno = $_GET['rno'];
        $sname = $_GET['name'];
        $sclass = $_GET['class'];
       $query = "UPDATE MAIN SET name='$sname' , class='$sclass' WHERE rno='$rollno'";
      
       $data = mysqli_query($con,$query);
       if($data)
       {
           echo "<font color='green'>Record updated.  <a href='display.php'> Check Updated List Here </a>";
       }
       else
       {
           echo "<font color='red'>Record not updated. <a href='display.php'> Check List Here </a> ";
       }
    }
    else
    {
        echo "<font color='Blue'> Press the Update button.";  
    }
?>  
</body>
</html>





         
 