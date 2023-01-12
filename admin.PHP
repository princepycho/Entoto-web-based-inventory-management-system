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
<title> Entoto Technical & Vocational Training college Online Inventory Management System. </title>
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
<table  width="950" height="100" border=0px id="table1"bgcolor=""#000000"">
<tr>
<td align="center">

<table width="950px" border="0" cellpadding="0" cellspacing="0" 
style="margin-bottom:-10px;margin-top:-4px;background-color:#787878;border-bottom:0px color="#606060 ">
<tr border="0px">
<td width="529px" valign="middle" style="height:90px;text-align:left">
<img align="left" border="0" src="IMaG/uog.png" width="215" height="90" alt="College INV" title="Gondar College Of Teacher Education Inventory Management System" />
&nbsp;
<font color="#33ddaa"size="+1"><p align="left"valign="bottom"><img src="IMaG/alex.png"  height="79%" width="77%"/></p></font>

</td>
<table width="950px" border="0px">
<tr>
<td width="950" height="29" background-color="606060" margin-top="-15">
<div id="topnav" >

    <li><a href="adduser.php">Add User</a></li>
            <li><a href="viewuser.php">Manage User </a></li>
        
			  <!-- <li><a href="viewitemadmin1.php">View To Request</a></li>
			  <li><a href="takerequestadmin.php"> Take Request</a></li>
		   <li><a href="returnrequestadmin.php">Return Requesst</a></li> -->
<li><a href="logout.php" onclick="islogout()">Logout</a></li>          		 
	  </div>
	  </td>
</tr>
</table>
</table>

<table style="margin-top:-12px" width="950px" border="0"color:#606060 cellpadding="0" cellspacing="0"background-color:#c0c0c0 "  ><!--content table -->
<tr >
    <td class="left_container"  height="100" width="100px" valign="top" style="background-color:#C0C0C0 " bgcolor="#C0C0C0 ">
<br>   <br><br><br><br><br> 

     </td>



<td  bgcolor="	#ffffff "valign="top"height="150px" width="325px" margin-top="0px" border="0px" align-top="0px"><!--center -->


	
	  <div id="pagetitle"><!-- InstanceBeginEditable name="pagetitle" --><b> Well Come To Administrator Page </b><!-- InstanceEndEditable --></div>
     	</br><div id="contentarea1">
<p>
This web page helps us to do our operations effectively and efficiently.
read every link before you do any action. 
</p>
   
    
    <br><br><br><br><br><br><br><br><br><br><br><br/><br/><br/><br/><br/>

		<p><br><br><br><br></p>
    </div>
    


</td><!--center end-->

	 
	 
	 


<td class="right_container" valign="top" height="100px" width="100px"">

<table class="right"  style="margin-top:0px;color:#FFFF00;background-color:#c0c0c0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#c0c0c0">

<tr>
<td class="right" height="100px" width="100px" border="1px" valign="top" align="center"bgcolor="#c0c0c0 "border="1px" >
<br><br><br><br><br><br><br><br><br><br><br><br>
<!--<marquee direction="down">


<img src="IMG/laptop.jpg"  height="60px" width="80px" border="1px"/><br>
<img src="IMG/dell1.jpg" align="center" height="60px" width="80px" alt="College Inventory" bgcolor="#606060  "border="1px">
</marquee>--><br/><br>


<br/><br/><br/><br/><br/><br/><br/><br><br>
</td>
</tr>
</table>
</td>
</tr><!--content table end-->


<table width="953px" height="42px" border="1" background-color="#282828">
<tr width="953"style="margin-bottom:1px;margin-top:1px;background-color:#606060  ;border:0px solid #ffffff" border="0px" cellpadding="10" cellspacing="0">
<td valign="top" align="center">

<font color="#fef943" face="arial">&copy;  2022 @ Entoto Technical & Vocational Training college Online Inventory Management System.</font>
</td></tr></table>






</td></tr></table>
</center>
</body>
</html>
