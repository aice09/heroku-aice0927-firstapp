
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
Hello World with Heroku
<?php/*


$host = "host= ec2-107-21-120-104.compute-1.amazonaws.com"; 
$port = "port = 5432";
$database = "dbname =d4vee288cf3jl3";
$user = "user =wdozkgjmdetdgs"; 
$password = "password=ddc19d124275e9b2da1479282dbb893c15c90fe671ce65503a6592489a69e982"; 


$db = pg_connect($host, $port, $database,$user,$password) or die("Could not connect to database");*/

$host        = "host = ec2-107-21-120-104.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d4vee288cf3jl3";
   $credentials = "user = wdozkgjmdetdgs password=ddc19d124275e9b2da1479282dbb893c15c90fe671ce65503a6592489a69e982";

   $db = pg_connect( "$host $port $dbname $credentials"  );

if (!$db) {
	echo "Not Connect";
} else {

echo "Success";
echo "Success";
}

date_default_timezone_set('Asia/Manila'); //Default Timezone
$currentdate = date('m/d/Y H:i:s'); //Current Date
$currentdate2 = date('m/d/Y h:i A', strtotime($currentdate)); //Current Date With AM & PM


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
	
</body>
</html>
