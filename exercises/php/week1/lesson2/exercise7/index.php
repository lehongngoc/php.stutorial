<html>
   <head>
      <title>Vẽ bàn cờ bằng PHP</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   </head>
   <body>
   
      <table width="270px" border="1px">  
      <?php  
      for($row=1; $row <= 8; $row++)  
      {  
          echo "<tr>";  
          for($col=1; $col <=8; $col++)  
          {  
            $total = $row + $col;  
            if($total %2 == 0)  
            {  
              echo "<td height=30px width=30px class='bg-light'></td>";  
            }  
            else  
            {  
              echo "<td height=30px width=30px class='bg-dark'></td>";  
            }  
          }  
          echo "</tr>";  
      }  
      ?>  
     </table>
       
   </body>
</html>