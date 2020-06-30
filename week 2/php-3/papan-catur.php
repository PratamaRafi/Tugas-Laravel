<!DOCTYPE html>
     <html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
  <h2>Papan Catur</h2>
  
   <table>
   
      <?php
    
      function papan_catur($angka){
          for($row=1;$row<=$angka;$row++)
          { 
              
              echo "<tr>";
              for($col=1;$col<=$angka*2;$col++)
              {
              $total=$row+$col;
              if($total%2==0)
              {
              echo "<td>#</td>";
              }
              else
              {
              echo "<td></td>";
              }
              }
              echo "</tr>";
              
        }
      
      }
      
       $angka = 4;
       papan_catur($angka);
       
       $angka = 8;
       papan_catur($angka);
      
       $angka = 5;
       papan_catur($angka);
?>
  </table>
  </body>
  </html>
