<?php
 session_start();
 include("config/config.php");
 //echo "User".$_SESSION['user'];
 if(isset($_SESSION['emp_id']))
 {
  $emp_id=$_SESSION['emp_id'];
 }  else {
 ?>
 <?php
 }
 ?>
 <?php
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM comments WHERE comment = '$ctrl'";
mysqli_query($SQL);
mysqli_close($conn);

print "<script>location.href = 'viewcomment.php';
</script>";
?>
