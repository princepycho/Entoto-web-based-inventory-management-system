
<?php 
define("db_server","localhost");
define("db_user","root");
define("db_name","inventory");
define("db_password","");
$conn= new mysqli('localhost','root','','inventory')or die("Could not connect to mysql".mysqli_error($con));
?>