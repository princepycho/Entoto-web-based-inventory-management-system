
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
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>
 <?php
 $emp_id=$_SESSION['emp_id'];
 $result=mysqli_query("select * from users where emp_id='$emp_id'")or die(mysqli_error);
while( $row=mysqli_fetch_array($result)){
 $emp_id=$row['emp_id'];
 $fname=$row['firstname'];
 $lname=$row['lastname'];
 $email=$row['email'];
 $phone=$row['Phonenumber'];
 }
  ?>

  
<HTML>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>Gondar College Of Teacher Education Inventory Management System </title>
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





</head>
<body>
<center>
<table  width="950" height="100" border="0px" id="table1"bgcolor=""#000000"" borde-color="000000">
<tr>
<td align="center">


<table width="950px" border="0" cellpadding="0" cellspacing="0" 
style="margin-bottom:-10px;margin-top:-10px;background-color:#787878;border-bottom:0px color="#606060 ">
<tr border="0px">
<td width="529px" valign="middle" style="height:90px;text-align:left">
<img align="left" border="0" src="img/uog.png" width="215" height="120" alt="college INV" title="Gondar College Of Teacher Education Inventory Management System" />
&nbsp;
<font color="#33ddaa"size="+2"><p align="left"valign="bottom"><img src="IMG/alex.png"  height="79%" width="77%"/></p></font>

</td>

<table width="950px" border="0px">
<tr>
<td width="950" height="29" background-color="606060" margin-top="-15">
	<div id="topnav" >
	<!--<li><a href="index2.php">Home</a></li>
	<li><a href="#"".php">Manage Item</a>-->
 <li><a href="#"approval.php">Approval</a>
 <ul>
 <li><a href="take.php">Take</a></li>
 <li><a href="returned.php">Return</a></li>
 </ul>
 </li> 
            <li><a href="additem.php">Add Item</a></li>
			<li><a href="viewitem.php">Manage Item</a></li>
      
          
	  
		        
	<li><a href="logout.php">Logout</a></li>
    
	  </div>
	  </td>

</tr>
</table>
</table>





<table style="margin-top:-12px" width="950px" border="0"color:#606060 cellpadding="0" cellspacing="0"background-color:#606060 "  ><!--content table -->
<tr >
     <td class="right_container"  height="100" width="100px" valign="top" style="background-color:#C0C0C0 " bgcolor="#C0C0C0 ">
<br>   <br><br><br><br><br>
     </td>
	 
	 
	 
<td  border="1" bgcolor="	#ffffff "valign="top"height="150px" width="325px" margin-top="0px" border="0px" align-top="0px"><!--center -->


	
	  <div id="pagetitle"><!-- InstanceBeginEditable name="pagetitle" --><b><br> </b><!-- InstanceEndEditable --></div>
     	</br><div id="contentarea1">

		
		
		 <form  action="approval.php" method="POST">
	   <br><fieldset>
	       <legend>Check Approval</legend>
		   
			Enter Item Code<label>:</label>
		    <input type="text" name="item_code" id="course" style="border:1px #480000 solid;width:144px;height:20px;background:#FFFFFF;border-radius:5px;"/>
		     <br><br>
		    <input type="submit" id="button" class="button" name="button" value="View" style="width:30%;height:23px;color:#2E8B57;text-transform:capitalize;Font-weight:bolder;font-size:15px" />
	        &nbsp;&nbsp;&nbsp;
			 <input type="submit" id="button" class="button" name="taken" value="Taken" style="width:30%;height:23px;color:#2E8B57;text-transform:capitalize;Font-weight:bolder;font-size:12px" />
			 <!--<input type="submit" id="button" class="button" name="returned" value="returned" style="width:30%;height:23px;color:#2E8B57;text-transform:capitalize;Font-weight:bolder;font-size:12px" />
			-->
                   <input type="hidden" name="fname"  value="<?php echo $fname ;?>" >
		 <input type="hidden" value="<?php echo $lname ;?>" name="lname" id="lname"/>
		 <input type="hidden" value="<?php echo $emp_id ;?>" name="emp_id" id="emp_id"/>
		 		 <input type="hidden" value="<?php echo $email ;?>" name="email" id="email"/>
				 		 <input type="hidden" value="<?php echo $phone ;?>" name="code1"id="code1"/>
						 
						 
			 </fieldset>
		     
			 </div>
 <?php
   if(isset($_POST['button']))
   {
   
    $code=$_POST['item_code'];
	if($_POST['item_code']=="")
	{
	echo "<img src='IMG/error.png' height='8%' align='bottom'><font type='Verdana' size='4' color='red'>Please enter item code!!</font>";
	}
	else
	{
    $get= @mysql_query("SELECT * FROM request WHERE item_code='$code' ")or die(mysql_error());
    $num =@mysql_num_rows($get);
	if($num>=1)
     {
    for($i=0;$i<$num;$i++)                                        
    {
     $Did= @mysql_result($get,$i,'item_type');
     $Dsname= @mysql_result($get,$i,'item_name');
     $Ddosage= @mysql_result($get,$i,'item_code');
     $Dquantity= @mysql_result($get,$i,'item_brand');
     $Dprice= @mysql_result($get,$i,'item_model');
     $Dunit= @mysql_result($get,$i,'item_seril');
     $Dexpire= @mysql_result($get,$i,'status');
    }
	echo "<table width='47%' border='1' align='center' cellspacing='0'>";
	echo "<tr>";
	echo "<th colspan='2'>"."Item Detail"."</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<td height='17' style='height:17px;width:30%;border-radius:5px;float:right'>"."<div align='right'></font>Item Type:</div></td>";
	echo "<td height='17' style='height:17px;width:35%;border-radius:5px;float:right'>"."<input type='text' name='txt_type' id='txt_type' value='$Did' style='width:145px;height:23px;background:#FFFFFF;border-radius:2px;'readonly>"."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td height='17' style='height:17px;width:30%;border-radius:0px;float:right'>"."<div align='right'></font>Item Name:</div></td>";
	echo "<td height='17' style='height:17px;width:35%;border-radius:5px;float:right'>"."<input type='text' name='txt_name' id='txt_name' value='$Dsname' style='width:145px;height:23px;background:#FFFFFF;border-radius:2px;'readonly>"."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td height='17' style='height:17px;width:30%;border-radius:5px;float:right'>"."<div align='right'></font>Item code:</div></td>";
	echo "<td height='17' style='height:17px;width:35%;border-radius:5px;float:right'>"."<input type='text' name='txt_code' id='txt_code' value='$Ddosage' style='width:145px;height:23px;background:#FFFFFF;border-radius:2px;'readonly>"."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td height='17' style='height:17px;width:30%;border-radius:5px;float:right'>"."<div align='right'></font>Item Brand:</div></td>";
	echo "<td height='17' style='height:17px;width:35%;border-radius:5px;float:right'>"."<input type='text' name='txt_brand' id='txt_brand' value='$Dquantity' style='width:145px;height:23px;background:#FFFFFF;border-radius:2px;'>"."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td height='17' style='height:17px;width:30%;border-radius:5px;float:right'>"."<div align='right'></font>Item Model:</div></td>";
	echo "<td height='17' style='height:17px;width:35%;border-radius:5px;float:right'>"."<input type='text' name='txt_model' id='txt_model' value='$Dprice' style='width:145px;height:23px;background:#FFFFFF;border-radius:2px;'>"."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td height='17' style='height:17px;width:30%;border-radius:5px;float:right'>"."<div align='right'></font>Item Serial:</div></td>";
	echo "<td height='17' style='height:17px;width:35%;border-radius:5px;float:right'>"."<input type='text' name='txt_serial' id='txt_serial' value='$Dunit' style='width:145px;height:23px;background:#FFFFFF;border-radius:2px;'readonly>"."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td height='17' style='height:17px;width:30%;border-radius:5px;float:right'>"."<div align='right'></font>Status:</div></td>";
	echo "<td height='17' style='height:17px;width:35%;border-radius:5px;float:right'>"."<input type='text' name='txt_status' id='txt_status' value='$Dexpire' style='width:145px;height:23px;background:#FFFFFF;border-radius:2px;'readonly>"."</td>";
	echo "</tr>";
echo' <meta content="20;approval.php" http-equiv="refresh" />'; 
	echo "</table>";
	}
	else
	{
print "<h3><img src='IMG/error.png'  width='20px' height='20px'>&nbsp;<font face='arial' color='red' size='2'>Not Exist!</font></h3>";
	}
   }}

 ?>	


<?php
   if(isset($_POST['taken']))
   {
   
   
   /* $fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$emp_id=$_POST['emp_id'];
	$phon=$_POST['email'];*/
	$reqdate=date("d/m/Y");
	$item_code=$_POST['item_code'];
	$sql="select * from request where item_code='$item_code'";
	$re=mysql_query($sql);
	while($row=mysql_fetch_array($re)){
	$fname=$row['firstname'];
	$lname=$row['lastname'];
	$emp_id=$row['emp_id'];
	$email=$row['email'];
	$item_code=$row['item_code'];
	
	}
	
	$sql="insert into  takenitem (firstname,lastname,emp_id,email,item_code,takendate)
	values('$fname','$lname','$emp_id','$email','$item_code','$reqdate')";
    $result=mysql_query($sql);
$result = mysql_query("DELETE  from request") or die(mysql_error());
	 echo' <meta content="20;approval.php" http-equiv="refresh" />'; 	
if(!$result){
die("error".mysql_error());
    print "<h3>Try Again</h3>";
}

else{	
    print "<img src='IMG/tick.png' align='center' width='25px' height='25px'><font face='arial' color='green' size='2'> Successfully Approved</font>";
   echo' <meta content="5;approval.php" http-equiv="refresh" />'; 
 }
}
mysql_close($conn);
?>	
 </form>
 <form  action="approval.php" method="POST">
<?php
   if(isset($_POST['returned']))
   {
   
   
   /* $fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$emp_id=$_POST['emp_id'];
	$phon=$_POST['email'];*/
	$redate=date("d/m/Y");
	$item_code=$_POST['item_code'];
	$sql="select * from takenitem where item_code='$item_code'";
	$re=mysql_query($sql);
	while($row=mysql_fetch_array($re)){
	$fname=$row['firstname'];
	$lname=$row['lastname'];
	$emp_id=$row['emp_id'];
	$email=$row['email'];
	$item_code=$row['item_code'];
	
	}
	
	$sql="insert into  returneditem (firstname,lastname,emp_id,email,item_code,retundate)
	values('$fname','$lname','$emp_id','$email','$item_code','$redate')";
    $result=mysql_query($sql);
$result = mysql_query("DELETE  from takenitem") or die(mysql_error());
	 echo' <meta content="20;approval.php" http-equiv="refresh" />'; 	
if(!$result){
die("error".mysql_error());
    print "<h3>Try Again</h3>";
}

else{	
    print "<img src='IMG/tick.png' align='center' width='25px' height='25px'><font face='arial' color='green' size='2'> Successfully Approved</font>";
   echo' <meta content="5;approval.php" http-equiv="refresh" />'; 
 }
}

?>		
 
</form>	
</td><!--center end-->
<td class="right_container" valign="top" height="100" width="100px">

<table class="right"  style="margin-top:0px;color:#FFFF00;background-color:#c0c0c0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#c0c0c0">

<tr>
<td class="right" height="100px" width="100px" border="1px" valign="top" align="center"bgcolor="#c0c0c0 "border="1px" >
<br><br><br><br><br><br><br><br><br><br><br><br>
<!--<marquee direction="down">


<img src="IMG/laptop.jpg"  height="60px" width="80px" border="1px"/><br>
<img src="IMG/dell1.jpg" align="center" height="60px" width="80px" alt="college Inventory" bgcolor="#606060  "border="1px">
</marquee>--><br/><br>


<br/><br/><br/><br/><br/><br/><br/><br><br/><br/>
</td>
</tr>
</table>
</td>
</tr></table><!--content table end-->


<table width="953px" height="42px" border="1" background-color="#282828">
<tr width="953"style="margin-bottom:1px;margin-top:1px;background-color:#606060  ;border:0px solid #ffffff" border="0px" cellpadding="10" cellspacing="0">
<td valign="top" align="center">

<font color="#fef943" face="arial">&copy; 2017 @ Gondar College Of Teacher Education Online Inventory Management System.</font>
</td></tr></table>





</td></tr></table>
</center>
</body>
</html>
