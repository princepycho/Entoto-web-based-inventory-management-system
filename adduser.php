
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
<!--Form Validation-->
<script type='text/javascript'>
function formValidation(){
//assign the fields
    var user=document.getElementById('user');
	var pass= document.getElementById('pass');
    var first= document.getElementById('first');
	//var middle = document.getElementById('middle');
	var last = document.getElementById('last');
	var email = document.getElementById('email');
	var phone = document.getElementById('phone');
	var block = document.getElementById('block');
	var office = document.getElementById('office');
if(isAlphabet(first, "please enter Your First name in letters only")){
if(lengthRestriction(first, 3, 30,"for your First name")){
if(isAlphabet(middle, "please enter Your Middle name in letters only")){
//if(lengthRestriction(middle, 3, 30,"for your Middle name")){
if(isAlphabet(last, "please enter Your Last name in letters only")){
if(lengthRestriction(last, 3, 30,"for your Last name")){
//For user name and password
if(isAlphanumeric(user,"Please Enter the Correct ID No (!@#$%^&*()*+=~`) Not allowed")){
if(lengthRestriction(user, 3, 15,"for your ID No")){
if(isAlphanumeric(pass,"Please Enter the Correct Password (!@#$%^&*()*+=~`) Not allowed")){
if(lengthRestriction(pass, 3, 10,"for your Password")){
if(isAlphanumeric(block,"Please Enter the Correct Block Number (!@#$%^&*()*+=~`) Not allowed")){
if(lengthRestriction(block, 3, 10,"for your Block Number")){
if(isAlphanumeric(office,"Please Enter the Correct Office Number (!@#$%^&*()*+=~`) Not allowed")){
if(lengthRestriction(office, 3, 10,"for your Office Number")){
if(isAlphanumeric(username,"Please Enter the Correct Username(!@#$%^&*()*+=~`) Not allowed")){
if(lengthRestriction(username, 5, 10,"for your username")){
if(isNumeric(phone, "please enter Number only For Phone Number")){
if(lengthRestriction(phone, 10, 10,"for your Phone number")){
     if(emailValidator(email, "Please enter a valid email address")){
	return true;
	}}}}
	}
	}
	}}
	}}}}
	}}}}}}}
return false;
		
}	
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

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
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters" +helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z\/]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
	</script>-->
	<!--
	<script>
  function islogout()
  {
   var d = confirm('Are you sure you want to Logout !!');
   if(!d)
   {
    alert(window.location='adduser.php');
   }
   else
   {
   return false;
    
   }
  }
  </script>-->

<!--End of form validation-->

<HTML>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>Gondar College Of Teache Education Inventory </title>
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



<link rel="stylesheet" type="text/css" href="index's_file/globalcss.css" />



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
<img align="left" border="0" src="imag/uog.png" width="215" height="90" alt="College inventory INV" title="Gondar College Teacher Education Inventory Management System" />
&nbsp;
<font color="#33ddaa"size="+1"><p align="left"valign="bottom"><img src="IMaG/alex.png"  height="79%" width="77%"/></p></font>

</td>
<table width="950px" border="0px">
<tr>
<td width="950" height="29" background-color="606060" margin-top="-15">
	<div id="topnav" >
	
	 <li><a href="adduser.php">Add User</a></li>
            <li><a href="viewuser.php">Manage User </a></li>
        
			  <li><a href="viewitemadmin1.php">View To Request</a></li>
			  <li><a href="takerequestadmin.php"> Take Request</a></li>
		   <li><a href="returnrequestadmin.php">Return Request</a></li>
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


	
	  <div id="pagetitle"><!-- InstanceBeginEditable name="pagetitle" --><b>Fill User Detail In The User Form<br> </b><!-- InstanceEndEditable --></div>
     	</br><div id="contentarea1">

    <FORM ACTION="adduser.php" METHOD=POST target="" onsubmit='return formValidation()'>
<font face="timesnewroman" size="+1">
<fieldset><legend>All fields are  required:</legend>
 <center>
<table  align="center" bgcolor="white" style="border:0px solid black;width:400px;border-radius:15px">
 <tr><td>Account_type</td><td><select id='acc_type' name="acc_type" required x-moz-errormessage="Please select one" style="width:135px;" "height:20px;" margin-left="20px">
	                    
						<option></option>
						<option>Admin</option>
	                    <option>Manager</option>
	                    <option>Clerk</option>
	                    <option>Staff</option>
	                    
                     </select>
                    </td>
</tr>
<tr>
<td>User ID :</td><td><input name="regusername" type="text" id="user" size"20" pattern="\w{4,15}" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter User Name" ></input></td>
</tr>
<tr>
<td>Password :</td><td><input name="regpassword" type="password" id="pass" size"20" pattern="\w{4,15}" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter Password"></input></td>
</tr>

<tr>
<td>First Name :</td><td><input name="regfirstname" type="text" id="first" size"20" pattern="\D{2,10}" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter FName"></input></td>
</tr>
<!--<tr>
<td>Middle Name :</td><td><input name="regmiddlename" type="text" id="middle" size"20" required="required" placeholder="Enter MName"></input></td>
</tr>-->
<tr>
<td>Last Name :</td><td><input name="reglastname" type="text" id="last" size"20" pattern="\D{2,10}" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter LName"></input></td>
</tr>
<tr>
<td>Email :</td><td><input name="mail" type="text" id="email" size"30" pattern="(\w[-._\w]*\w@\w[-._\w]*\w\.\w{2,3})" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter Email"></input></td>
</tr>
<tr>
<td>Phone Number :</td><td><input name="regphonenumber" id="phone" type="text" size"20" pattern="\d{10}" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" required="required"placeholder="Enter Phone-No"></input></td>
</tr>
<tr>
<td>Block Number :</td><td><input name="regblocknumber" id="block" type="text" size"20" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" pattern="\w{2,10}"required="required" placeholder="Enter Block-No"></input></td>
</tr>
<tr>
<td>Office Number :</td><td><input name="regofficenumber" id="office" type="text" size"20" pattern="\w{2,10}" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" placeholder="Enter Office-No"></input></td>
</tr>
<!--<tr>
<td>Photo :</td><td><input name="image" type="file" id="photo" input required="required"></td>
</tr>-->
<td colspan="2" align="center"><input type="submit" value="Add User" name="add"></input> <input type="reset" value="Reset"/></td></center>
</table></center> </form> <br><center>
 </fieldset>
</FORM>
<?php
 if(isset($_POST['add']))
 {
	//image script
 /* $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
                                $location = "upload/" . $_FILES["image"]["name"];*/
								$rdate=date("d/m/Y");
    $sql="insert into users (account_type,emp_id,password,firstname,lastname,email,Phonenumber,blocknumber,officenumber,status	)
	values('$_POST[acc_type]','$_POST[regusername]','$_POST[regpassword]','$_POST[regfirstname]','$_POST[reglastname]','$_POST[mail]','$_POST[regphonenumber]','$_POST[regblocknumber]','$_POST[regofficenumber]','1')";
    $result=mysqli_query($conn,$sql) or die(mysqli_error());		
  if(!$result){
    print "<h3><img src='IMG/error.png' width='20px' height='20px'>&nbsp;<font face='arial' color='red' size='2'>Already Exist!</font></h3>";
}
else{	
    print "<img src='IMG/tick.png' width='25px' height='25px'><font face='arial' color='green' size='2'> Successfully registered</font>";
   echo' <meta content="8;adduser.php" http-equiv="refresh" />';  

 }
}
mysqli_close($conn);
?>
    
    
    </div>
    


</td><!--center end-->

<td class="right_container" valign="top" width="100px" height="100px">

<table class="right"  style="margin-top:0px;color:#FFFF00;background-color:#c0c0c0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#c0c0c0">

<tr>
<td class="right" height="100px" width="100px" border="1px" valign="top" align="center"bgcolor="#c0c0c0 "border="1px" >
<br><br><br><br><br><br><br><br><br><br><br><br><br/>
<!--<marquee direction="down">


<img src="IMG/laptop.jpg"  height="60px" width="80px" border="1px"/><br>
<img src="IMG/dell1.jpg" align="center" height="60px" width="80px" alt=" college Inventory" bgcolor="#606060  "border="1px">
</marquee>--><br/><br>


<br/><br/><br/><br/><br/><br/><br/><br/>
</td>
</tr>
</table>
</td>
</tr></table><!--content table end-->


<table width="953px" height="42px" border="1" background-color="#282828">
<tr width="953"style="margin-bottom:1px;margin-top:1px;background-color:#606060  ;border:0px solid #ffffff" border="0px" cellpadding="10" cellspacing="0">
<td valign="top" align="center">

<font color="#fef943" face="arial">&copy; 2017 @ Gondar College OF Teacher Education Online Inventory Management System.</font>
</td></tr></table>





</td></tr></table>
</center>
</body>
</html>
