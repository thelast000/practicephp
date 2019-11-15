<?php 
    include("conn.php");
    $rollno = $_GET['rn'];
    $query = "DELETE FROM MAIN WHERE rno='$rollno'";
    $data = mysqli_query($con,$query);
       if($data)
       {
          
           echo "<script> alert('Deleted'); </script>";
           header("Location: display.php");
  
        }
       else
       {
           echo "<script> alert('Record not Deleted')</script>";
       }
  
   
?> 