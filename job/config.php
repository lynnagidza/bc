
<?php
date_default_timezone_set('Africa/Nairobi');
$username="root";
$password="";
$server="localhost";
$db="blue";

// $username="epiz_28127031";
// $password="Uqq96DzRokO";
// $server="	sql300.epizy.com";
// $db="epiz_28127031_blue";

$con=new mysqli($server,$username,$password,$db);

if(!$con){
  die("Connection failed: ".mysqli_connect_error());
}
?>
