<?php
//session_start();
date_default_timezone_set('Asia/Manila'); //Default Timezone
$currentdate = date('m/d/Y H:i:s'); //Current Date
$currentdate2 = date('m/d/Y h:i A', strtotime($currentdate)); //Current Date With AM & PM

$host        = "host = ec2-107-21-120-104.compute-1.amazonaws.com";
$port        = "port = 5432";
$dbname      = "dbname = d4vee288cf3jl3";
$credentials = "user = wdozkgjmdetdgs password=ddc19d124275e9b2da1479282dbb893c15c90fe671ce65503a6592489a69e982";

$db = pg_connect( "$host $port $dbname $credentials"  );

if(!$db) {
     //echo "Error : Unable to open database\n";
} else {
    // echo "Opened database successfully\n";
}
?> 
