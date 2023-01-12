
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
 // alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>

<HTML>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title> Entoto Technical & Vocational Training college Online Inventory Management System.</title>
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
    alert(window.location='additem.php');
   }
   else
   {
   return false;
    
   }
  }
  </script>

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
<td width="429px" valign="middle" style="height:90px;text-align:left">
<img align="left" border="0" src="imag/uog.png" width="215" height="90" alt="gondar college inv" title="Gondar College Of Teacher Education  Inventory Management System" />
&nbsp;
<font color="#33ddaa"size="+1"><p align="left"valign="bottom"><img src="IMaG/alex.png"  height="79%" width="77%"/></p></font>

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
           <!-- <li><a href="viewitemclerk1.php">View Item</a></li>-->
		   <li><a href="takerequestclerk.php"> Take Request </a></li>
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


	
	  <div id="pagetitle"><!-- InstanceBeginEditable name="pagetitle" --><b> Item Registration Form<br> </b><!-- InstanceEndEditable --></div>
     	</br><div id="contentarea1">

  
    
    <FORM ACTION="additem.php" METHOD="POST" enctype="multipart/form-data">
<font face="timesnewroman">

<fieldset><legend>All fields are  required:</legend>
<center>
<table  bgcolor="#ffffff" style="border:0px solid black;width:400px;border-radius:15px">
<!--
<tr >
<td width="150px" border="1px">Item Type :</td><td><input name="txttype" type="text" size"20" required="required" placeholder="Enter Item Type"></input></td>
</tr>
<tr>
<td>Item Name :</td><td><input name="txtname" type="text" size"20" required="required" placeholder="Enter Item Name" ></input></td>
</tr>
-->
<tr><center><td>Item Type:</td>
		   <td><select name="txttype" style="width:148px;" required x-moz-errormessage="Please select one" style="width:135px;" "height:20px;" margin-left="20px">
                  <option ></option>
                  <option value='electronics'>Electronics</option>
                  <option value='Computer'>Computer</option>
                  <option value='office material'>Office Material</option>
				  <option value='Construction Material'>Construction Material</option>
				  <option value='Laboratory Material '>Laboratory Material </option>
				  <option value='other'>Others</option>
                </select></td></center></tr>
<!--<tr >
<td width="150px" border="1px">Item Type :</td><td><input name="txttype" type="text" size"20" required="required" placeholder="Enter Item Type"></input></td>
</tr>
<tr>
<td>Item Name :</td><td><input name="txtname" type="text" size"20" required="required" placeholder="Enter Item Name" ></input></td>
</tr>-->

<tr><center><td>Item Name:</td>
		   <td><select name="txtname" style="width:148px;" required x-moz-errormessage="Please select one" style="width:135px;" "height:20px;" margin-left="20px">
                  <option ></option>
                  <option value='desktop'>Desktop</option>
                  <option value='laptop'>Laptop</option>
                  <option value='switch'>Switch</option>
				  <option value='divider'>Divider</option>
				  <option value='chair'>Chair</option>
				  <option value='flash'>Flash</option>
				  <option value='Reading Table'>Reading Table</option>
				  <option value='stapler'>Stapler</option>
				  <option value='Pc Table'>Pc Table</option>
				   <option value='Crimper'>Crimper</option>
				  <option value='Power Breaker'>Power Breaker</option>
				  <option value='hand GPS'> Hand GPS</option>
				    <option value='other'> Other</option>
                </select></td></center></tr>
<tr><center><td>Item Category:</td>
		   <td><select name="txtcategory" required="required" style="width:148px;" required x-moz-errormessage="Please select one"  "height:20px;" margin-left="112px">
                  <option ></option>
                  <option value='Returnable'>Returnable</option>
                  <option value='Disposable'>Disposable</option>
                  <option value='Consumable'>Consumable</option>
				  <option value='other'>Others</option>
				  
                </select></td></center></tr>


<tr>
<td>Item Code:</td><td><input name="txtcode" type="text" size"20" pattern="\w{2,15}" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter Item Code"></input></td>
</tr>
<tr>
<td>Item Brand:</td><td><input name="txtbrand" type="text" size"20" pattern="\w{3,15}" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;"  pattern="\D{4,10}" required="required" placeholder="Enter Item Brand"></input></td>
</tr>

<tr>
<td>Item Model :</td><td><input name="txtmodel" type="text" size"20" pattern="\w{3,15}" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" pattern="\w{4,10}" required="required" placeholder="Enter Item Model"></input></td>
</tr>
<tr>
<td>Serial Number :</td><td><input name="txtseril" type="text" size"20" pattern="\w{3,15}" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" pattern="\w{4,10}" required="required" placeholder="Enter serial No"></input></td>
</tr>

<!--
<tr>
<td>Status :</td><td><input name="txtstatus" type="text" size"20" required="required" placeholder="Enter serial No"></input></td>
</tr>
<tr>
<td>Photo :</td><td><input name="image" type="file" input required="required" ></td>
</tr>
-->
<!--<td>Status : 1 - Active 0 - Non Active</td><td><input name="status" type="text" size"1"></input></td>-->
</tr>
<tr><td colspan=2 align="center">
<input type="submit" value="Add Item" name="add"/> <input type="reset" value="Reset"/>
</td></tr>
</table> 

 



</center></fieldset></form>
<?php
 if(isset($_POST['add']))
 {
 //image script
 /*$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
                                $location = "upload/" . $_FILES["image"]["name"];
								*/
								
								
								
								
								$rdate=date("d/m/Y");
$sql="insert into item (item_type,item_name,item_code,item_brand,item_model,item_seril,status,cat_name,date)
	values('$_POST[txttype]','$_POST[txtname]','$_POST[txtcode]','$_POST[txtbrand]','$_POST[txtmodel]','$_POST[txtseril]','free','$_POST[txtcategory]','$rdate')";
    $result=mysqli_query($sql);	
if(!$result){
die("error".mysqli_error());
    print "<h3>Try Again</h3>";
}

else{	
    print "<img src='IMG/tick.png' align='center' width='25px' height='25px'><font face='arial' color='green' size='2'> Successfully registered</font>";
      echo' <meta content="6;additem.php" http-equiv="refresh" />'; 
 }
}
mysqli_close($conn);
?>
-



</div>
    


</td><!--center end-->

	 
	 
	 
	








<td class="right_container" valign="top" height="100" width="100px">

<table class="right"  style="margin-top:0px;color:#FFFF00;background-color:#c0c0c0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#c0c0c0">

<tr>
<td class="right" height="100px" width="100px" border="1px" valign="top" align="center"bgcolor="#c0c0c0 "border="1px" >
<br><br><br><br><br><br><br><br><br><br><br><br>
<!--<marquee direction="down">


<img src="IMG/laptop.jpg"  height="60px" width="80px" border="1px"/><br>
<img src="IMG/dell1.jpg" align="center" height="60px" width="80px" alt=" college Inventory" bgcolor="#606060  "border="1px">
</marquee>--><br/><br>


<br/><br/><br/><br/><br/><br/><br/><br><br>
</td>
</tr>
</table>
</td>
</tr></table><!--content table end-->


<table width="953px" height="42px" border="1" background-color="#282828">
<tr width="953"style="margin-bottom:1px;margin-top:1px;background-color:#606060  ;border:0px solid #ffffff" border="0px" cellpadding="10" cellspacing="0">
<td valign="top" align="center">

<font color="#fef943" face="arial">&copy; 2022 @ Entoto Technical & Vocational Training college Online Inventory Management System./font>
</td></tr></table>





</td></tr></table>
</center>
</body>
</html>
