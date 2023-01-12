
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
</script>-->
<!--<script>
  function islogout()
  {
   var d = confirm('Are you sure you want to Logout !!');
   if(!d)
   {
    alert(window.location='manager.php');
   }
   else
   {
   return false;
    
   }
  }
  </script>
-->
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Lists</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<style>
#print_content{
width:434px;
margin:0 auto;
}
</style>
</head>
<body>
<center>
<table  width="950" height="100" border=0px id="table1"bgcolor=""#000000"">
<tr>
<td align="center">


<table width="950px" border="0" cellpadding="0" cellspacing="0" 
style="margin-bottom:-10px;margin-top:-18px;background-color:#787878;border-bottom:0px color="#606060 ">
<tr border="0px">
<td width="529px" valign="middle" style="height:90px;text-align:left">
<img align="left" border="0" src="img/uog.png" width="215" height="90" alt="Gondar INV" title="Gondar College Of Teacher Education Online Inventory Management System." />
&nbsp;
<font color="#33ddaa"size="+1"><p align="left"valign="bottom"><img src="IMG/alex.png"  height="79%" width="77%"/></p></font>

</td>

<table width="950px" border="0px">
<tr>
<td width="950" height="29" background-color="606060" margin-top="-15">
	<div id="topnav" >
	       <li><a href="#".php">View Report </a>
			<ul>
			<li><a href="userreport.php">Users Report</a></li><br/>
            <li><a href="#".php">Item Report</a>
			<ul>
				<li><a href="totalitem.php">Total Item</a></li><br/>
					<li><a href="freeitem.php">Free Item</a></li><br/>
				<li><a href="takenitem.php">Taken Item</a></li><br/>
					<li><a href="returneditem.php">Returned Item</a></li><br/>
			</ul>
			
			</li>
			
          </ul></li>
		  <li><a href="viewitemmanager.php">View Item</a>
		 </li> 
		 <li><a href="takerequestman.php">Take Request</a>
		    <li><a href="returnrequestman.php">Return Request</a></li>
		  
<li><a href="viewcomment.php">View Comment</a></li>
		 
<li><a href="logout.php">logout</a>  </li> 
          
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


	
	  <div id="pagetitle"><!-- InstanceBeginEditable name="pagetitle" --><b> Free Item<br> </b><!-- InstanceEndEditable --></div>
     	</br><div id="contentarea1">

		
		<a href="javascript:Clickheretoprint()"><img src="IMG/print.jpg" width="45px" /></a>
					<div id="print_content">
					<form action="viewreport.php" method="post" >					
					<center><h3>Free Available Items :</h3></center> 
					<form action="viewreport.php" method="post" >
					 <?php
 $sel=mysqli_query($conn,"SELECT * FROM item where status='free' ");
			echo '<table border=1 style="width:500px;border:1px solid #336699;border-radius:10px;"><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="2">Item Type.</th><th bgcolor="#336699" ><font color="white" size="2">Item Name.</th><th bgcolor="#336699"><font color="white" size="2">Item code.</th><th bgcolor="#336699"><font color="white" size="2">Item brand.</th><th bgcolor="#336699"><font color="white" size="2">Item model.</th><th bgcolor="#336699"><font color="white" size="2">Item serial.</th><th bgcolor="#336699"><font color="white" size="2">Category.</th><th bgcolor="#336699"><font color="white" size="2">Reg date.</th></tr>';
			$rowcolor=0;
			$intt=mysqli_num_rows($sel);
			echo"<br><br>";
			while($row=mysqli_fetch_array($sel)){
 print ("<tr>");
	 print ("<td border='1'><font size='2'>" . $row['item_type'] . "</td>");
	  print ("<td border='1'><font size='2'>" . $row['item_name'] . "</td>");	
	 print ("<td border='1'><font size='2'>" . $row['item_code'] . "</td>");
	  print ("<td border='1'><font size='2'>" . $row['item_brand'] . "</td>");	
	 print ("<td border='1'><font size='2'>" . $row['item_model'] . "</td>");
	  print ("<td border='1'><font size='2'>" . $row['item_seril'] . "</td>");
	//   print ("<td border='1'><font size='2'>" . $row['cat_name'] . "</td>");
  print ("<td border='1'><font size='2'>" . $row['date'] . "</td>");		  
		
	  
  print ("</tr>");
  }
print( "</table>");
			?>
					</form>
				</div>
				</div>	
						</div>
					</form>
    
    </div>
</td><!--center end-->
<td class="right_container" valign="top" width="100px" height="100px">
<table class="right"  style="margin-top:0px;color:#FFFF00;background-color:#c0c0c0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#c0c0c0">

<tr>
<td class="right" height="100px" width="100px" border="1px" valign="top" align="center"bgcolor="#c0c0c0 "border="1px" >
<br><br><br><br><br><br><br><br><br><br><br><br>
<!--<marquee direction="down">


<img src="IMG/laptop.jpg"  height="60px" width="80px" border="1px"/><br>
<img src="IMG/dell1.jpg" align="center" height="60px" width="80px" alt="DBU Inventory" bgcolor="#606060  "border="1px">
</marquee>--><br/><br>


<br/><br/><br/><br/><br/><br/><br/><br><br/>
</td>
</tr>
</table>
</td>
</tr></table><!--content table end-->


<table width="950px" height="42px" border="1" background-color="#282828">
<tr width="950"style="margin-bottom:1px;margin-top:1px;background-color:#606060  ;border:0px solid #000000" border="0px" cellpadding="10" cellspacing="0">
<td valign="top" align="center">

<font color="#fef943" face="arial">&copy; 2022 @ Entoto Technical & Vocational Training college Online Inventory Management System.</font>
</td></tr></table>






</td></tr></table>
</center>
</body>
</html>
