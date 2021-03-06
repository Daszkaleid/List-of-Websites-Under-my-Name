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

<!doctype html>
<html>
<head>

	<meta http-equiv="X-UA-Compatible" content="IE=11">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Finish Webapp.| Upload interface</title>
    <link rel="stylesheet" type="text/css" href="css/demos.css" />
	<script type="text/javascript" src="external/lib/date_time.js"></script>
	<link rel="icon" href="css/icon.ico" type="image/x-icon">
    <script src="external/jquery/jquery-1.8.3.js"></script>
<SCRIPT TYPE="text/javascript">
	var message="Sorry, right-click has been disabled";
	function clickIE() {if (document.all) {(message);return false;}}
	function clickNS(e) {if
	(document.layers||(document.getElementById&&!document.all)) {
	if (e.which==2||e.which==3) {(message);return false;}}}
	if (document.layers)
	{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
	else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
	document.oncontextmenu=new Function("return false")
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
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    var n =  new Date();
	var y = n.getFullYear();
	var m = n.getMonth() + 1;
	var d = n.getDate();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    d +"-"+m+"-"+y+" " +h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
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
</head>

<body>

<div>
  <div class="header-right">
	<button id="myButton" class="button button4" >Go back ?</button>
  </div>
  <div class="header-left">
	<img src="css/comany_web_logo.png" alt="logo" />
  </div>
</div>

	<br>
	<h2 align="center">
		Finish Webapp.| Upload to server the Golden zip File.
	</h2>
	
	<br>
	<div align="center">	
		<table>
		<form action="dir/ftp_upload.php" method="post" enctype="multipart/form-data">
			Browse: <input type="file" name="fileToUpload" size="30" />
			<input type="submit" name="submit" value="Upload file" class="button button4" onclick="return confirm('Proceed with the upload? - Okay or Cancel')" />
		</form>
		</table>	
	</div>	 
	
	<br>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "dir/redir_home.php";
    };
</script>

</body>
</html>
