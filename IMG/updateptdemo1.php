
<?php   
 session_start();
 include("config/config.php");
 include("db.php");
 //echo "User".$_SESSION['user'];
 if(isset($_SESSION['validuser']))
 {
  $username=$_SESSION['validuser'];
 } else {
 ?>
 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>
 
<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>AYU referal hospital </title>
<!--<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="Keywords" content="XML,tutorial,HTML,DHTML,CSS,XSL,XHTML,JavaScript,ASP,ADO,VBScript,DOM,W3C,authoring,programming,learning,beginner's guide,primer,lessons,school,howto,reference,free,examples,samples,source code,demos,tips,links,FAQ,tag list,forms,frames,color tables,Cascading Style Sheets,Active Server Pages,Dynamic HTML,Internet database development,Webbuilder,Sitebuilder,Webmaster,HTMLGuide,SiteExpert" />
<meta name="Description" content="HTML XHTML CSS JavaScript XML XSL ASP SQL ADO VBScript Tutorials References Examples" />-->
<link rel="stylesheet" type="text/css" href="index's_file/globalcss.css" />
<!--
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "../https@ssl.\default.htm" : "../www./default.htm");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3855518-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>-->


<link rel="stylesheet" type="text/css" href="index's_file/globalcss.css" />
<script type="text/javascript" src="js/ptregistrationvalidation.js"></script>
<script type="text/javascript" src="js/functions.js"></script>

<!--Date -->
<link type="text/css" href="API_files/examples-offline.css" rel="stylesheet"/>
 <link type="text/css" href="API_files/kendo.common.min.css" rel="stylesheet"/>
<link type="text/css" href="API_files/kendo.default.min.css" rel="stylesheet"/>

<script src="API_files/jquery.min.js"></script>
<script src="API_files/kendo.web.min.js"></script>
<script src="API_files/console.js"></script>
<link rel="stylesheet" href="css/site_styles.css" />
<!--CSS/Style Sheet Part Ending-->

<!-- Javascript Part Starting-->
<script language="javascript" src="js/datetimepicker.js"></script>

<script language="javascript" src="js/check.js"></script>
<!--
<script type="text/javascript">F
var gaJsHost = (("https:" == document.location.protocol) ? "../https@ssl.\default.htm" : "../www./default.htm");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3855518-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>-->
<script type='text/javascript'>

function formValidator(){
// Make quick references to our fields
    var account_type = document.getElementById('txtcardno');
	var username = document.getElementById('txtusername');
	var password = document.getElementById('txtpassword');
	var firstname = document.getElementById('txtfname');
	var middlename = document.getElementById('txtmname');
	var lastname = document.getElementById('txtgname');
	var Phonenumber = document.getElementById('txtPhonenumber');
	var blocknumber = document.getElementById('txtblocknumber');
	var officenumber = document.getElementById('txtofficenumber');
	var status = document.getElementById('status');
	var photo = document.getElementById('txtphoto');
	
	
	
	// validating patient card for non empty !!
	



  if(document.getElementById("txtcardno").value == ""){
    alert("Enter patient card number !!");
    document.getElementById('txtcardno').focus();
    return false;
  }
  
// validating patient first name for non empty !!
  if(document.getElementById("txtfname").value=="")
  {
   alert("Enter patient first name !!");
   document.getElementById("txtfname").focus();
   return false;
  }
  // validating patient second name for non empty !!
  if(document.getElementById("txtmname").value == "")
  {
   alert("Enter father name of the patient !!");
   document.getElementById("txtmname").focus();
   return false;
  }
  // validating last name for non empty !!
  if(document.getElementById("txtgname").value=="")
  {
   alert("Enter patient grand father name!!");
   document.getElementById("txtgname").focus();
   return false;
  } 
  //alidation - Selection Made
  if(document.getElementById("sex").value == "Please Choose"){
		alert("select sex");
		document.getElementById("sex").focus();
		return false;
	}
  // validating age for non empty & isNum();!!
  if(document.getElementById("txtage").value=="")
  {
   alert("Enter age !!");
   document.getElementById("txtage").focus();
   return false;
  }
  
  // validating region for non empty !!
  if(document.getElementById("txtregion").value == "")
  {
   alert("Enter region of the patient !!");
   document.getElementById("txtregion").focus();
   return false;
  }
  // validating wereda for non empty !!
  if(document.getElementById("txtwereda").value == "")
  {
   alert("Enter wereda of the patient !!");
   document.getElementById("txtwereda").focus();
   return false;
  }
  // validating kebele for non empty !!
  if(document.getElementById("txtkebele").value == "")
  {
   alert("Enter kebele the patient !!");
   document.getElementById("txtkebele").focus();
   return false;
  }
  
  // validating house number for non empty & isNum(); !!
  if(document.getElementById("txthouseno").value=="")
  {
   alert("Enter house number of the patient!!");
   document.getElementById("txthouseno").focus();
   return false;
  }
  
 if(isAlphabet(firstname, "Please enter only letters for  name")){
	if(isAlphabet(middlename, "Please enter only letters for middle name")){
		if(isAlphabet(lastname, "Please enter only letters for last name")){
			if(madeSelection(sex, "Please Choose a sex")){
				if(isAlphanumeric(age, "Please enter a valid age")){
					if(madeSelection(region, "Please Choose region")){
						if(isAlphanumeric(wereda, "Numbers and Letters Only for wereda")){
							if(isAlphanumeric(kebele, "Numbers and Letters Only for kebele")){
								if(isAlphanumeric(houseno, "Please enter a valid house no")){
									if(isAlphanumeric(ward, "Numbers and Letters Only for ward")){
									if(lengthRestriction(firstname, 3, 20,"for first name")){
									if(lengthRestriction(middlename, 3, 20,"for middle name")){
									if(lengthRestriction(lastname, 3, 20,"for last name")){
									if(lengthRestriction(age, 1, 3,"for age")){
									if(ageRestriction(age)){
									if(lengthRestriction(wereda, 4, 20,"for wereda")){
									if(lengthRestriction(kebele, 2, 20,"for kebele")){
									if(lengthRestriction(houseno, 2, 20,"for houseno")){
 return true;}}}}}}}}
									}
								}
							}
						}
					}
				}
			}
		}
	}
 }
	
	return false;
	

  
}

</script>








</head>
<body>
<center>
<table table width="929" height="100" border=1px id="table1"bgcolor=""#576698"">
<tr>
<td align="center">


<table width="950px" border="0" cellpadding="0" cellspacing="0"
style="margin-top:4px;background-color:#606060;border-bottom:1px solid black">
<tr>
<td width="13px">&nbsp;</td>
<td width="520px" valign="middle" style="height:90px;text-align:left">
<img border="0" src="index's_file/eps_logo.jpg" width="213" height="80" alt="Ayu" title="AYUn hospital" />
&nbsp;&nbsp;
<img border="0" src="index's_file/h_logo2.gif" width="214" height="20" alt="EPCS" title="EPCS" />
</td>
<td align="right" valign="bottom" style="color:white;font-size:10px;font-weight:bold" >
<form style="margin:0px;padding:0px;" method="get" name="searchform" action="http://www.google.com/search"
target="_blank">
Search: <input type="hidden" name="sitesearch" value="www.w3schools.com" />
<input alt="search" type="text" style="width:128px;" name="as_q" size="20" value="" />
<input style="margin-bottom:10px" type="image" align="middle" src="index's_file/search.gif" />
</form>
</td>
<td>&nbsp;&nbsp;&nbsp;</td>
</tr>
</table>

        <table border="0" cellpadding="0" cellspacing="0" style="background-color:#606060">
<tr>
<td class="blacknav" style="border-left:none" width="50px"><a class="upper_nav" href="index.html">HOME</a></td>
<td class="blacknav" width="50px"><a class="upper_nav" href="login.php">login</a></td>
<td class="blacknav" width="100px"><a class="upper_nav" href="registerpt.php">Register Patient</a></td>
<td class="blacknav" width="100px"><a class="upper_nav" href="searchpt.php">Search Patient</a></td>
<td class="blacknav" width="150px"><a class="upper_nav" href="editeptdemo.php">Edit pt demography</a></td>


<td class="blacknav">&nbsp;</td>



<td class="blacknav" width="80px" align="right"><a class="upper_nav" href="logout.php">[Log out]</a></td>

</tr>
      </table>


<table width="950" border="1" cellpadding="0" cellspacing="0"background-color:#606060>
<tr bgcolor="#576698">
          <td class="greenlink" align="center"><font color="#ffffff">
       <marquee scrolldelay="1" scrollamount="2" direction="left" behavior="alternate" width="220">&nbsp;&nbsp;&nbsp;<b>Welcome to our website</b></marquee>
            </font><b><font color="#fef943">Date- 2013/05/06</font></b></td></tr>

</table>



<table style="margin-top:0px" width="950" border="0" cellpadding="0" cellspacing="0"style="background-color:#606060" ><!--content table -->
<tr>
    <td class="left_container" width="150px" valign="top" style="background-color:#606060" bgcolor="#576698">
       <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#576698">
	  <tr>
<td  valign="top" height="19" width="260" id="menu-bar"bgcolor="#576698"> <a href="vacancy.php">Vacancy</a></td>
</tr>

<tr>
<td  valign="top" height="29" width="260" id="menu-bar"bgcolor="#576698"> <a href="photo.php">photo gallary</a></td>
</tr>

<tr>
<td  valign="top" height="18" width="260" id="menu-bar"bgcolor="#576698"> <a href="message.php">Message from manager</a></td>
</tr>
<tr>
<td  valign="top" height="18" width="260" id="menu-bar"bgcolor="#576698"> <a href="free.php">Free Service</a></td>
</tr>
<tr><td bgcolor="#576698">
<br/><br/>
<img src="IMG\hosp.jpg.bmp" name="mb" height="210" align="middle" width="205"bgcolor="#576698">
<br/><br/>
<table>
		<tbody><tr>
			<td colspan="2" align="center"><font color="black"><b>LOGIN</b></font></td>
		</tr>	<tr>
	<td><font color="black"><b>Username: </b></font></td> <td><input name="username" size="15" type="text"></td>

		</tr>
		<tr>
			<td><font color="black"><b>Password: </b></font></td> <td><input name="password" value="" size="15" type="password"></td>
		</tr>

<tr>
<td colspan="2" align="center"><input value="1	" name="attempt" type="hidden"> 	
</td></tr>
<tr><td colspan="2" align="center">
			<input value="Submit" name="action" type="submit"> 
			<input value="Clear" type="reset">
			</td>
		</tr>
	</tbody></table>

</td></tr>


	    </table>
     </td>

	 
	 
	 
<td valign="top" align="left"><!--center -->
 <div id="middletxtheadermain">
      <div id="middletxtheader">patient Demography </div>
      <div id="middletxt1">
        <p>Please Edit the demography of the patient here.</p>
      </div>
      </div>
 <?php
 $sql="SELECT * FROM patientreg where username= '$username' AND cardno='$card_no' ;";
   $result_set=mysql_query($sql,$conn);
 if(!$result_set)
   {
   die("Query faill".mysql_error());
   }
if(mysql_num_rows($result_set)>0)
{

//$num=mysql_num_rows($result_set);
while($row=mysql_fetch_array($result_set))
{


$account_type=$row[1];
$username=$row[2];
$password=$row[3];
$firstname=$row[4];
$middlename=$row[5];
$lastname=$row[6];
$Phonenumber=$row[7];
$blocknumber=$row[8];
$officenumber=$row[9];
$wereda=$row[10];
$photo=$row[11];

  }
?>
      <div id="middletxt">
        <form action="" method="post" name="frm_prd_edit" id="frm_prd_edit" enctype="multipart/form-data">
          <table width="100%" border=0>
            <tr>
              <td height="22"><table width="100%" border=0>
                  <tr>
                    <th colspan="5" id="formhedear">Patient Demographies.</th>
                  </tr>
                  <tr>
                    <td height="34" colspan="2"></td>
                    <td colspan="3"><div align="right"><font color="#FF0000">*</font><span class="style3"> Mandatory	Fields &nbsp; </span></div></td>
                  </tr>
                  <input type="hidden" name="username" id="username" value="" />
                  <tr>
                    <td width="245" height="37"><div align="right"><strong><font color="#FF0000">*</font>account_type : </strong></div></td>
                    <td width="128"><input type="textbox" name="txtaccount_type" id="txtaccount_type" maxlength="10"  value="<?php echo $cardno?>" style="width:176px;" READONLY></td>
                  </tr>
				  <tr>
                    <td width="245" height="37"><div align="right"><strong><font color="#FF0000">*</font>first name : </strong></div></td>
                    <td width="128"><input type="textbox" name="txtfname" id="txtfname" maxlength="10"  value="<?php echo $firstname?>" style="width:176px;" ></td>
                  </tr>
				  <tr>
                    <td width="245" height="37"><div align="right"><strong><font color="#FF0000">*</font>middle Name : </strong></div></td>
                    <td width="128"><input type="textbox" name="txtmname" id="txtmname" maxlength="10"  value="<?php echo $middlename?>" style="width:176px;" ></td>
                  </tr>
				  <tr>
                    <td width="245" height="37"><div align="right"><strong><font color="#FF0000">*</font>Last Name : </strong></div></td>
                    <td width="128"><input type="textbox" name="txtgname" id="txtgname" maxlength="10"  value="<?php echo $lastname?>" style="width:176px;" ></td>
                  </tr>
				  
				  <tr>
                    <td width="245" height="37"><div align="right"><strong><font color="#FF0000">*</font>Sex : </strong></div></td>
					<td> <select name="sex" id="sex" style="width:180px;" value="<?php echo $sex?>">
                    
					<option><?php echo $sex?></option>
			        <option>Male</option>
			        <option>Female</option>
			       
			
                      </select>  </td>
					 
                    
                  </tr>
				  <tr>
                    <td><div align="right"><span class="req"><strong></strong></span><strong>D.O.B: </strong></div></td>
                    <td width="132" colspan="2" align="left" valign="top"><table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tbody>
                                  <tr>
                                    <td width="150"><input class="mine_text_field_7" name="txtdofb" id="txtdofb" size="25" value="<?php echo $dob?>" readonly="readonly" type="text" /></td>
                                    <td align="left"><a href="javascript:NewCssCal('txtdofb','yyyymmdd')"><img src="images/Calendarsmall.png" width="20" height="21" border="0" /></a></td>
                                  </tr>
                                </tbody>
								
                            </table></td>
                                         
                  </tr>
				  
				  <tr>
                    <td><div align="right"><span class="req"><strong></strong></span><strong>Region: </strong></div></td>
                    <td><select name="txtregion" id="txtregion" value="<?php echo $region?>" style="width:180px;">

					<option><?php echo $region?></option>
			<option>Tigray</option>
			<option>Amahara</option>
			<option>Afar</option>
			<option>Oromiya</option>
			<option>Addis Abeba</option>
			<option>Harar</option>
			<option>Dredawa</option>
			<option>Somalia</option>
			<option>SNN</option>
			<option>Benshangul Gumuz</option>
			<option>Gambela</option>
                      </select> </td>
                                        
                  </tr>
				  <tr>
                    <td width="245" height="37"><div align="right"><strong><font color="#FF0000">*</font>Wereda : </strong></div></td>
                    <td width="128"><input type="textbox" name="txtwereda" id="txtwereda" maxlength="10"  value="<?php echo $wereda?>" style="width:176px;" ></td>
                  </tr>
				  <tr>
                    <td width="245" height="37"><div align="right"><strong><font color="#FF0000">*</font>Kebele : </strong></div></td>
                    <td width="128"><input type="textbox" name="txtkebele" id="txtkebele" maxlength="10"  value="<?php echo $kebele?>" style="width:176px;" ></td>
                  </tr>
				  <tr>
                    <td width="245" height="37"><div align="right"><strong><font color="#FF0000">*</font>House Number : </strong></div></td>
                    <td width="128"><input type="textbox" name="txthouseno" id="txthouseno" maxlength="10"  value="<?php echo $houseno?>" style="width:176px;" ></td>
                  </tr>
				  <tr>
                    <td width="245" height="37"><div align="right"><strong><font color="#FF0000">*</font>Ward : </strong></div></td>
                    <td width="128"><input type="textbox" name="txtward" id="txtward" maxlength="10"  value="<?php echo $ward?>" style="width:176px;" ></td>
                  </tr>
				 
				  <tr>
                    <td class="teach_text"><div align="right"><span class="req"><strong></strong></span><strong>Date of Registration: </strong></div></td>
					
					
					
					                            <td width="132" colspan="2" align="left" valign="top"><table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tbody>
                                  <tr>
                                    <td width="150"><input class="mine_text_field_7" name="txtdoreg" id="txtdoreg" value="<?php echo $dofreg?>" size="25" readonly="readonly" type="text" /></td>
                                    <td align="left"><a href="javascript:NewCssCal('txtdoreg','yyyymmdd')"><img src="images/Calendarsmall.png" width="20" height="21" border="0" /></a></td>
                                  </tr>
                                </tbody>
								
                            </table></td>
                                         
                  </tr>
				  
				  
				  
				  
				  
				 
		   <tr><td><input type="submit" id="update" name="update" value="update" Onclick="return formValidator(this.form);"  />
		<input type="reset" id="subintr" name="subintr" value="Reset"  /></td></tr>

</table>
</td></tr>
          </table>
		  
        </form>
<?php
if(isset($_POST['update']))
 {
 
$porter=$_SESSION['validuser'];
 
$cardno=$_POST['txtcardno'];
$firstname=$_POST['txtfname'];
$middlename=$_POST['txtmname'];
$lastname=$_POST['txtgname'];
$sex=$_POST['sex'];
$dob=$_POST['txtdofb'];
$region=$_POST['txtregion'];
$wereda=$_POST['txtwereda'];
$kebele=$_POST['txtkebele'];
$houseno=$_POST['txthouseno'];
$ward=$_POST['txtward'];
$dofreg=$_POST['txtdoreg'];
$sql="UPDATE patientreg
			SET firstname='{$firstname}',middlename='{$middlename}',lastname='{$lastname}',sex='{$sex}',dob='{$dob}',region='{$region}',
			wereda='{$wereda}',kebele='{$kebele}',houseno='{$houseno}',ward='{$ward}',date_of_reg='{$dofreg}' WHERE username='{$porter}' AND cardno='${cardno}' ;";
$result_set=mysql_query($sql);
if(!$result_set){
die("query is failed".mysql_error());
}
else
{
echo "<script>alert('Patient Demography Updated sucessfully !!');</script>";
   echo "<script>window.location='editeptdemo.php'</script>";
}


		


}
}
?>
</div>
</td><!--center end-->


	 
	 
	 
	

	
<center>
<td width="6px">&nbsp;</td>
<td class="right_container" valign="top" width="150px">

<table class="right"  style="margin-top:0px;color:#FFFF00;background-color:#606060" width="100%" cellpadding="0" cellspacing="0" bgcolor="#606060">

<tr>
<td class="right" valign="top" align="center"bgcolor="#576698">

<marquee direction="up">

<img src="IMG\hosp.jpg.bmp" width="200" height="50">
<img src="IMG\a3.gif" width="200" height="150">
<img src="IMG\a4.jpg.jpg" width="200" height="50">
<img src="IMG\25.jpg" width="200" height="50">
</marquee>
<h1>WEL Come To  Ayu Hospital</h1>
<font color="white" face="arial size="+2"><b>
<p style="margin:10px"> WEL Come To  Ayu Hospital
Services The site with its unique features will be functional with in the coming few days. Visit us</p></b> </font>
<br/><br/><br/>
</td>
</tr>
</table>
</td>
</tr></table><!--content table end-->


<tr width="950"style="margin-bottom:5px;margin-top:6px;background-color:#606060 ;border:1px solid #c3c3c3" border="0" cellpadding="10" cellspacing="0">
<td valign="top" align="center">

<font color="#fef943" face="arial">Copyright © 2013-2014 Ayu General Hospital PLC. All rights reserved.</font>
</td></tr>

</td></tr></table>
</center>
</body>
</html>