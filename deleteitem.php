<?php
session_start();
include("config/config.php");
if($log != "log"){
	header ("Location: viewitem.php");
	
}
$ctrl = $_REQUEST['key'];

$SQL = "DELETE FROM item WHERE item_code = '$ctrl'";
mysqli_query($SQL);
mysqli_close($db_handle);

print "<script>location.href = 'viewitem.php'</script>";
?>