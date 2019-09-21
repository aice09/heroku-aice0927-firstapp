Hello World in Heroku with PHP, PosgreSQL, and Github
<?php
  include 'a.php';
   

   $sql ="SELECT * from employee";

   $ret = pg_query($db, $sql);
   $data='';
    $data.='<table class="table table-hover" border="1">
      <thead>
         <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>ADDRESS</th>
            <th>SALARY</th>
         </tr>
      </thead>
      <tbody>';
   if(!$ret) {
      echo pg_last_error($db);
      exit;
   } 
   while($row = pg_fetch_row($ret)) {
      
           $data.='<tr>
            <td>'. $row[0] .'</td>
            <td>'. $row[1] .'</td>
            <td>'. $row[2] .'</td>
            <td>'. $row[4] .'</td>
         </tr>';
     
      
   
   }
   //echo "Operation done successfully\n";
   
  
         
     $data.='</tbody>
   </table>';
   echo $data;
   pg_close($db);
?>
