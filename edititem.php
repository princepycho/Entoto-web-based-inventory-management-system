
<?php   
 session_start();
 include("config/config.php");
 //echo "User".$_SESSION['user'];
 if(isset($_SESSION['emp_id']))
 {
  $username=$_SESSION['emp_id'];
 } else {
 ?>
 <script>
  //alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='log2.php');
 </script>
 <?php
 }
 ?>


<HTML>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>Entoto Technical & Vocational Training college Online Inventory Management System. </title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="Keywords" content="XML,tutorial,HTML,DHTML,CSS,XSL,XHTML,JavaScript,ASP,ADO,VBScript,DOM,W3C,authoring,programming,learning,beginner's guide,primer,lessons,school,howto,reference,free,examples,samples,source code,demos,tips,links,FAQ,tag list,forms,frames,color tables,Cascading Style Sheets,Active Server Pages,Dynamic HTML,Internet database development,Webbuilder,Sitebuilder,Webmaster,HTMLGuide,SiteExpert" />
<meta name="Description" content="HTML XHTML CSS JavaScript XML XSL ASP SQL ADO VBScript Tutorials References Examples" />
<link rel="stylesheet" type="text/css" href="index's_file/globalcss.css" />
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "../https@ssl.\default.htm" : "../www./default.htm");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3855518-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
<!--
<script>
  function islogout()
  {
   var d = confirm('Are you sure you want to Logout !!');
   if(!d)
   {
    alert(window.location='viewitem.php');
   }
   else
   {
   return false;
    
   }
  }
  </script>
<li><a href="logout.php" onclick="islogout()">logout</a></li>    

-->


</head>
<body>
<center>
<table  width="950" height="100" border=0px id="table1"bgcolor=""#000000"">
<tr>
<td align="center">


<table width="950px" border="0" cellpadding="0" cellspacing="0" 
style="margin-bottom:-10px;margin-top:-4px;background-color:#787878;border-bottom:0px color="#606060 ">
<tr border="0px">
<td width="529px" valign="middle" style="height:90px;text-align:left">
<img align="left" border="0" src="img/uog.png" width="215" height="90" alt="college INV" title="Gondar College Teacher Education Inventory Management System" />
&nbsp;
<font color="#33ddaa"size="+1"><p align="left"valign="bottom"><img src="IMG/alex.png"  height="79%" width="77%"/></p></font>

</td>

<table width="950px" border="0px">
<tr>
<td width="950" height="29" background-color="606060" margin-top="-15">
	<div id="topnav" >
 <li><a href="#"approval.php">Approval</a>
 <ul>
 <li><a href="take.php">Take</a></li>
 <li><a href="returned.php">Return</a></li>
 </ul>
 </li> 
            <li><a href="additem.php">Add Item</a></li>
			<li><a href="viewitem.php">Manage Item</a></li>
            
		   <li><a href="takerequestclerk.php"> Take Request</a></li>
		   <li><a href="returnrequestclerk.php">Return Request</a></li>
	
<li><a href="logout.php" onclick="islogout()">Logout</a></li>          		 
	  </div>
	  </td>

</tr>
</table>
</table>





<table style="margin-top:-12px" width="950px" border="0"color:#606060 cellpadding="0" cellspacing="0"background-color:#606060 "  ><!--content table -->
<tr >
     <td class="left_container"  height="100" width="100px" valign="top" style="background-color:#C0C0C0 " bgcolor="#C0C0C0 ">
<br>   <br><br><br><br><br> 
	
     </td>

<td  bgcolor="	#ffffff "valign="top"height="150px" width="325px" margin-top="0px" border="0px" align-top="0px"><!--center -->


	
	  <div id="pagetitle"><!-- InstanceBeginEditable name="pagetitle" --><b><br> </b><!-- InstanceEndEditable --></div>
     	</br><div id="contentarea1">

  
  <?php
$ctrl = $_REQUEST['key'];
$query="SELECT * FROM item where item_code='{$ctrl}'";
$result=mysqli_query($query);
$count=mysqli_num_rows($result);
if($count==1){
while($row=mysqli_fetch_array($result)){
$row0=$row[0];
$row1=$row[1];
$row2=$row[2];
$row3=$row[3];
$row4=$row[4];
$row5=$row[5];
$row6=$row[6];
$row7=$row[7];
}
?>
  <form method="POST" action="edititem.php">
  <br><br>
 <table valign='top' align="center" style="width:250px; height:150px;border-radius:10px;border:1px solid #686868">
<tr>
<td></td>
<td align="right"><a href="viewitem.php"><img src="IMG/close.jpg" title="Close"></a></td></tr>
 <tr>
<td><font face="times new roman" color="#336699" size="3"><b>Item Type:</b></font></td><td><input type="text" name="item_type" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" value="<?php echo $row0?>"/></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Item Name:</b></td><td><input type="text" name="item_name" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" value="<?php echo $row1?>"/></td>
</tr>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Item Code:</b></td><td><input  type="text" name="item_code" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" readonly="readonly" value="<?php echo $row2?>"/></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Item Brand:</b></td><td><input type="text" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" name="item_brand" value="<?php echo $row3?>"/></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Model:</b></td><td><input type="text" name="model" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" value="<?php echo $row4?>"/></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Serial:</b></td><td><input type="text" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" name="serial" value="<?php echo $row5?>"/></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Status:</b></td><td><input type="text" name="status" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" value="<?php echo $row6?>"/></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Category:</b></td><td><input type="text" name="cat_name" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" value="<?php echo $row7?>"/></td>
</tr>
<tr><td colspan=2 align='center'><input type='submit' name='update' value='Update'></tr></td>
</table>
 </form>
 <?php
}
	  

?>
<?php
  if(isset($_POST['update']))
  {
  
	            $type=$_POST['item_type'];
				$name=$_POST['item_name'];
				$code=$_POST['item_code'];
				$brand=$_POST['item_brand'];
				$model=$_POST['model'];
				$serial=$_POST['serial'];
				$status=$_POST['status'];
				$cat_name=$_POST['cat_name'];
  $update = mysqli_query("update item set item_type='$type',item_name='$name',item_code='$code',item_brand='$brand',
	item_model='$model', item_seril='$serial',status='$status',cat_name='$cat_name'
  WHERE item_code='{$code}'") or die(mysqli_error());
 echo "<script>window.location='viewitem.php';</script>";
  }
  
  ?>

</div>
    


</td><!--center end-->

	 
	 
	 
	








<td class="right_container" valign="top" height="100" width="100px">

<table class="right"  style="margin-top:0px;color:#FFFF00;background-color:#c0c0c0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#c0c0c0">

<tr>
<td class="right" height="100px" width="100px" border="1px" valign="top" align="center"bgcolor="#c0c0c0 "border="1px" >
<br><br><br><br><br><br><br><br><br><br><br><br>
<!--<marquee direction="down">


<img src="IMG/laptop.jpg"  height="60px" width="80px" border="1px"/><br>
<img src="IMG/dell1.jpg" align="center" height="60px" width="80px" alt="gondar college Inventory" bgcolor="#606060  "border="1px">
</marquee>--><br/><br>


<br/><br/><br/><br/><br/><br/><br/><br><br/>
</td>
</tr>
</table>
</td>
</tr></table><!--content table end-->


<table width="953px" height="42px" border="1" background-color="#282828">
<tr width="953"style="margin-bottom:1px;margin-top:1px;background-color:#606060  ;border:0px solid #ffffff" border="0px" cellpadding="10" cellspacing="0">
<td valign="top" align="center">

<font color="#fef943" face="arial">&copy; 2022 @ Entoto Technical & Vocational Training college Online Inventory Management System.</font>
</td></tr></table>
</td></tr></table>





</td></tr></table>
</center>
</body>
</html>
