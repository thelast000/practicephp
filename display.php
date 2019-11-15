<style>
   td{
         padding: 10px;
   }
</style>

<?php
      include("conn.php");
      $query = "select * from main";
      $data = mysqli_query($con,$query);
      $total = mysqli_num_rows($data);



     if($total=!0)
     {
?>
    <table>
        <tr>
            <th> Roll Number </th>
            <th> NAme </th>
            <th> Class </th>
            <th colspan="2"> Operations </th>

        </tr>

        <?php
           while($result = mysqli_fetch_assoc($data))
           {
            echo "<tr>
                  <td>".$result['rno']."</td>
                  <td>".$result['name']."</td>
                  <td>".$result['class']."</td>
                  <td><a href='update.php?rn=$result[rno]&sn=$result[name]&cl=$result[class]'>Edit </a></td>
                  <td><a href='delete.php?rn=$result[rno]' onclick=' return chechdelete()'>Delete</a></td>
                  </tr>";
            }
      }
      else
        {
              echo "No records found";
        }
        echo "<font color='green'> <a href='insert.php'> Click here to add more records </a>";
?>
    </table>
    
    <script>
        function chechdelete() {
            return confirm('are u sure?');
        }
    </script>

