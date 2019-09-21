Hello World in Heroku with PHP, PosgreSQL, and Github
<?php
  include 'config/database.php';
   

   $sql ="SELECT * from employee";

   $ret = pg_query($db, $sql);
   $data='';
    $data.='<table class="table table-hover" border="1">
      <thead>
         <tr>
            <th>ID</th>
            <th>EMPLOYEE ID</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
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
            <td>'. sha1(md5($row[5])) .'</td>
         </tr>';
     
      
   
   }
   //echo "Operation done successfully\n";
   
  
         
     $data.='</tbody>
   </table>';
   echo $data;
   pg_close($db);
?>
