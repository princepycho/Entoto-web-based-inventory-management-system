<?php   
 session_start();
 include("config/config.php");
     $userid= $_SESSION['txt_userid'];

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

 <?php
 $emp_id=$_SESSION['emp_id'];
 $result=mysqli_query($conn,"select * from users where emp_id='$emp_id'")or die(mysqli_error);
 $row=mysqli_fetch_array($result);
 $emp_id=$row['emp_id'];
 $fname=$row['firstname'];
 $lname=$row['lastname'];
 $email=$row['email'];
 $phone=$row['Phonenumber'];
  ?>


<HTML><head>
<html lang="en-US" xml:lang="en-US" xmlns=""/>

<title>Gondar College of Teacher Education Inventory </title>
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


<script type='text/javascript'>
function formValidator(){
/*
var firstname = document.getElementById('fName');
var fathername = document.getElementById('lName');
var email = document.getElementById('mail');
*/
var comments=document.getElementById('comments');

// Check each input in the order that it appears in the form!
if(notEmpty(comments, "Please comment us")){
 		 					return true;
					
	
}

	
	
	
	
	
return false;
	
}
function notEmpty(elem, helperMsg){
	if(elem.value.length >0){
	return true;
		
	}
	alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
}
/*function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}*/
function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
</script>
<!--
<script>
  function islogout()
  {
   var d = confirm('Are you sure you want to Logout !!');
   if(!d)
   {
    alert(window.location='comments.php');
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
<td width="229px" valign="middle" style="height:90px;text-align:left">
<img align="left" border="0" src="img/uog.png" width="215" height="90" alt="college INV" title="Gondar College Of Teacher Education Inventory Management System" />
&nbsp;
<font color="#33ddaa"size="+1"><p align="left"valign="bottom"><img src="IMG/alex.png"  height="79%" width="77%"/></p></font>

</td>

<table width="950px" border="0px">
<tr>
<td width="950" height="29" background-color="606060" margin-top="-15">
	<div id="topnav" >
	
			
			<li><a href="comments.php">Comment</a></li>
			<li><a href="viewitemstaff.php">View Item</a></li>
			<li><a href="itemrequest.php"> Take Request </a></li>
		<li><a href="returnrequest.php">Return Request</a></li>
		
 
						
   
<li><a href="logout.php">Logout</a>  </li>     		 
    
    
	  </div>
	  </td>

</tr>
</table>
</table>





<table style="margin-top:-12px" width="950px" border="0"color:#606060 cellpadding="0" cellspacing="0"background-color:#606060 "  ><!--content table -->
<tr >
     <td class="left_container"  height="100" width="100px" valign="top" style="background-color:#C0C0C0 " bgcolor="#C0C0C0 ">
<br>   <br><br><br><br><br> 
	<!--<p align="center"> <a href="#"aboutus.php">About Us</a><br>
	 <p align="center"> <a href="#"contactus.php">Contact Us</a><br>
	 -->
     </td>



<td  bgcolor="	#ffffff "valign="top"height="150px" width="325px" margin-top="0px" border="0px" align-top="0px"><!--center -->


	
	  <div id="pagetitle"><!-- InstanceBeginEditable name="pagetitle" --><b>If you want to comment us fill your comment Below:</b>
 </b><!-- InstanceEndEditable --></div>
     	</br><div id="contentarea1">

<form method="post" action="comments.php"onsubmit='return formValidator()'>
 <table border="0" cellpadding="0" cellspacing="5" width="450">

<!--<tr><td align="left" valign="top">
<font face="arial" size="-1"><b>first Name:</b></font>
&nbsp;&nbsp;&nbsp;&nbsp;<input name="fName" size="25" type="text" id="fName">
</td></tr>

<tr><td align="left" valign="top">
<font face="arial" size="-1"><b>Last Name:</b></font>
&nbsp;&nbsp;<input name="lName" size="25" type="text"id="lName">
</td></tr>-->
     <tr>

<tr>
<td colspan="2" align="top" valign="top"><br/>
<font face="arial" size="-1">
<tr>
<input name="txtid" value="<?php echo $userid ?>" type="hidden" size"20" ></input>
</tr>

<font face="arial" size="2"><font face="arial" size="2">

</font></font>
<textarea cols="40" rows="6" name="Comments"id="comments"></textarea>
<p>

<input type="submit"  value="Submit" name="submitMain"/>

<input value="Clear text" type="reset">
</p></td>
</tr>
</table>

  <font face="arial" size="2"></font>
</form>
<?php
if(isset($_POST['submitMain'])){
$co=$_POST['Comments'];
 $emp_id=$_POST['txtid'];
$query="INSERT INTO comments(comment,emp_id) VALUES ('{$co}','{$userid}');";

$result=mysqli_query($conn,$query);
  if(!$result){
    print "<h3><img src='IMG/error.png' width='20px' height='20px'>&nbsp;<font face='arial' color='red' size='2'>not succed!!</font></h3>";
}
else{	
    print "<img src='IMG/tick.png' width='25px' height='25px'><font face='arial' color='green' size='2'>your comment has sent Successfully </font>";
    echo' <meta content="5;comments.php" http-equiv="refresh" />'; 
 }
mysqli_close($conn);
}
?>

</td><!--center end-->
		
		
		
   
    </div>


	 
	 
	 
	








<td class="right_container" valign="top" height="100px" width="100px">

<table class="right"  style="margin-top:0px;color:#FFFF00;background-color:#c0c0c0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#c0c0c0">

<tr>
<td class="right" height="100px" width="100px" border="1px" valign="top" align="center"bgcolor="#c0c0c0 "border="1px" >
<br><br><br><br><br><br><br><br><br><br><br><br>
<!--<marquee direction="down">


<img src="IMG/laptop.jpg"  height="60px" width="80px" border="1px"/><br>
<img src="IMG/dell1.jpg" align="center" height="60px" width="80px" alt="college Inventory" bgcolor="#606060  "border="1px">
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

<font color="#fef943" face="arial">&copy; 2017 @ Gondar College Of Teacher Education Online Inventory Management System.</font>
</td></tr></table>






</td></tr></table>
</center>
</body>
</html>
