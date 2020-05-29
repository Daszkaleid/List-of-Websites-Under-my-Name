<?php
session_cache_expire( 20 );
session_start(); // NEVER FORGET TO START THE SESSION!!!
$inactive = 1200;//1200


if(isset($_SESSION['start']) ) {
	$session_life = time() - $_SESSION['start'];
	if($session_life > $inactive){
		session_destroy();
		echo "<script>
				alert('Sorry, your session got closed due to inactivity.');
				window.location.href='http://tnfsoftwaredev/sysadmin/SoftwareDev_Applications/iCOS_AutoSetup/';
		</script>";
	}
}
	$_SESSION['start'] = time();
	
	if(!empty($_SESSION["var_start_session"])) {
	//DO NOTHING
	} else {
		echo "<script>
				alert('Redirecting you to home.');
				window.location.href='http://tnfsoftwaredev/sysadmin/SoftwareDev_Applications/iCOS_AutoSetup/';
				
		</script>";
	}
	
?>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=11">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ICOS AUTOSETUP| Home</title>
    <link rel="stylesheet" type="text/css" href="css/demos.css" />
	<link rel="icon" href="css/icon.ico" type="image/x-icon">
    <script src="external/jquery/jquery-1.8.3.js"></script>

		<script src="js_lib/jquery.js" type="text/javascript"></script>
		<script src="js_lib/jquery.easing.js" type="text/javascript"></script>
		<script src="js_lib/jqueryFileTree.js" type="text/javascript"></script>
		<link href="js_lib/jqueryFileTree.css" rel="stylesheet" type="text/css" media="screen" />
	

<script type="text/javascript">
$(document).ready(function () {
    if(window.location.href.indexOf("index.php") > -1) {
	   window.location.href='http://tnfsoftwaredev/sysadmin/SoftwareDev_Applications/iCOS_AutoSetup/';
    }
});
</script>
<SCRIPT TYPE="text/javascript">

<!--
//Disable right click script
var message="Sorry, right-click has been disabled";
///////////////////////////////////
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers)
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
document.oncontextmenu=new Function("return false")
// -->
</SCRIPT>
<SCRIPT>
$(document).keydown(function (event) {
    if (event.keyCode == 123) { // Prevent F12
        return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
        return false;
    }
});
</SCRIPT>
<style>
input[type="text"]
{
    font-size:24px;
	font-family: Georgia, serif;
}
/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}
.custom-select select {
  display: none; /*hide original SELECT element:*/
}
.select-selected {
  background-color: DodgerBlue;
}
/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
  
}
/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}
/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
  }
/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
  width: 200px;
  height: 80px;
  overflow: auto;
}
/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}
.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
.button {
    background-color: DodgerBlue; /* Light Blue */
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button4 {border-radius: 12px;}

p.oblique {
    font-style: oblique;
}
table {
  border-collapse: collapse;
  border-radius: 1em;
  overflow: hidden;
}
</style>
<style>
.tableFixHead { overflow-y: auto; height: 600px; }

table { border-collapse: collapse; width: auto; }
th, td { padding: 8px 12px; }
th { background:#87CEEB; }
tr, td:nth-child(even) { 
background-color: #fff;
}
tr, td:nth-child(odd) { 
background-color: #e2f2ff;
}
</style>
<style>
h2 {
    color: DarkSlateGray;
    font-family: Georgia, serif;
    font-size: 30px;

}
input[type='text'] { 
font-size: 30px; 
font-family: Georgia, serif;
}
#myTable tr:nth-child(even) {
    background-color: #fff;
}
#myTable  tr:nth-child(odd) {
    background-color: #e2f2ff;
}
#myTable th {
    background-color: #1c99ff;
    color: white;
	height: 50px;
}
#myTable th, td {
    padding: 15px;
    text-align: center;
}
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
	text-align: center;
    width: 90%;
    padding: 12px 20px;
    margin: 8px 0;
	display: block;
	margin-right: auto;
	margin-left: auto;
    border: 1px solid #ccc;
    box-sizing: border-box;
	border: 1px solid DodgerBlue !important;
}

/* Set a style for all buttons */
button {
background-color: rgba(0,0,0,0.1);
color: #333333;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 55%;
  display: block;
  margin-right: auto;
  margin-left: auto;
}

button:hover {
    opacity: 0.5;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: 5%;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    margin: 8px 0;
    position: auto;
}

img.avatar {
    width: 60%;
    border-radius: 100%;
}


/* The Modal (background) */
.modal {
	position: fixed;
    bottom: 0;
    top: 0;
    right: 0;
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 0; /* Sit on top */
    overflow: auto; /* Enable scroll if needed */
	background-color: rgb(32,42,52); /* Fallback color */
    background-color: rgba(0,0,70,0); /* Black w/ opacity */
    padding-top: 15px;
}



/* The Close Button (x) */
.close {
    position: absolute;
    right: 0;
    top: 0;
    color: #333333;
    font-size: 30px;
    font-weight: bold;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
.button {
    background-color: DodgerBlue; /* Light Blue */
    border: none;
    color: white;
	border-radius: 30px;
	padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
	font-family: Georgia, serif;
	width: 100px;
}
.button4 {
	background-color: LightSeaGreen ;
	border-radius: 30px;
	font-size: 15px;
	padding: 10px;
    border: none;
    color: white;
	display: inline-block;
    text-align: center;
    text-decoration: none;
	font-family: Georgia, serif;
	cursor: pointer;
	width: 100px;
}

p.oblique {
    font-style: oblique;
}
.hidden {
	
	display:none;
	
	}
.img LOGO { 

width:5px; 

}
.img COMPANY { 

width:100px; 


}
</style>

<style type="text/css">
.example {
	float: left;
	margin: 15px;
}
			
.demo {
	width: 400px;
	height: 400px;
	border-top: solid 1px #BBB;
	border-left: solid 1px #BBB;
	border-bottom: solid 1px #FFF;
	border-right: solid 1px #FFF;
	background: #FFF;
	overflow: scroll;
	padding: 5px;
}
</style>

</head>

<body>

<div>
  <div class="header-right">
	<button id="myButton" class="button button4" >Sign Out ?</button>
  </div>
  <div class="header-left">
	<img src="css/comany_web_logo.png" alt="logo" />
  </div>
</div>

	<br>
	<h1 align="left">
		Directory listing	
	</h1>
	<br>

	<table>
		<tr>
			<td><p><a href="to-upload.php">Define Golden File</a></p></td>
			<td><p>Library of Golden Files.</p></td>
		</tr>
		<tr>
			<td><p><a href="createfile.php">Upload Golden File</a></p></td>
			<td><p>Upload your golden file to the server.</p></td>
		</tr>
		<tr>
			<td><p><a href="user-management.php">User management</a></p></td>
			<td><p>Users listing.</p></td>
		</tr>

	</table>


	

	
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "dir/CloseSessions.php";
    };
</script>

</body>

</html>