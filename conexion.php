<?php
function conexion(){
$con = mysql_connect("localhost","root","aeaf930814");
if (!$con){
die('Could not connect: ' . mysql_error());
}
mysql_select_db("acisum", $con);
return($con);
}
?>