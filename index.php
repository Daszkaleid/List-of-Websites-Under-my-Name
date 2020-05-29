<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=11">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<title>ICOS AUTOSETUP| Ops1 Web</title>
	<link rel="stylesheet" type="text/css" href="i.css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="i.css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="i.css/fixedHeader.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="i.css/responsive.bootstrap.min.css">
	<script type="text/javascript" language="javascript" src="i.js/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="i.js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="i.js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript" language="javascript" src="i.js/dataTables.fixedHeader.min.js"></script>
	<script type="text/javascript" language="javascript" src="i.js/dataTables.responsive.min.js"></script>
	<script type="text/javascript" language="javascript" src="i.js/responsive.bootstrap.min.js"></script>

	<link rel="icon" href="css/icon.ico" type="image/x-icon">

	<script type="text/javascript" class="init">
$(document).ready(function() {
	var table = $('#example').DataTable( {
		responsive: true
	} );

	new $.fn.dataTable.FixedHeader( table );
} );
	</script>

	<link rel="stylesheet" href="style/style.css"/>
	<script src="jquery/jquery-ui.js"></script>
	<script src="myscript/login.js"></script>
		
	</head>
<body class="wide comments example dt-example-bootstrap">
<div>
  <div class="header-right">
  
 		<div id="container">
 				  <div id="loginContainer">
 				  		<a id="loginButton"><span>Login</span><em></em></a>
                         <div id="loginBox" align="right">                
                       <form id="loginForm" method="post" action="dir/validate.php">
					   
                        <fieldset id="body">
						
                            <fieldset>
                                <label for="email">Employee ID</label>
                                <input type="text" name="uname" align="center" id="email" required/>
                            </fieldset>
                            <fieldset>
                                <label for="password">Password</label>
                                <input type="password" name="psw" align="center" id="password" required/>
                            </fieldset>

                            <input type="submit" id="login" value="Sign in here" />
                            <label for="checkbox"><input type="checkbox" id="checkbox" />Remember me</label>
							
                        </fieldset>
						
                        <span><a href="#">Forgot your password?</a></span>
                        </form>
                     </div>
 				  </div>
 		</div>	

  </div>
  <div class="header-left">
	<img src="css/comany_web_logo.png" alt="logo" />
  </div>
</div>
	
	<div>
		<h1>
			History viewer
		</h1>
	</div>
	
	<a name="top" id="top"></a>
	<div class="fw-background">
		<div></div>
	</div>
	
	
	<div class="fw-container">

		<div class="fw-body">
			<div class="content">

<?php					

	$servername = "//tnfsimserver:1521/tnfdb.cal.st.com";
    $username = "AUTO_SETUP_APP";
    $password = "Au2_S3TuP_AppS";
    $dbname = "ADMIN_AUTOSETUP_ICOS";	
	
	
	$objConnect = oci_connect($username, $password, $servername);
	if (!$objConnect) {
		$m = oci_error();
		echo $m['message'], "<br>";
		
		echo "<script>
				alert('CONNECTION - FAILED!');
		</script>";
		oci_close($objConnect);
	} else {;

	$stid = oci_parse($objConnect, 'SELECT LOG_DATE_TIME, OPERATOR_ID, MACHINE, LOT_ID, FG_CODE FROM AUTO_SETUP_ADMIN.OPERATOR_LOG ORDER BY LOT_ID DESC');
	oci_execute($stid,OCI_DEFAULT);
	
	echo "	<div id='demo_info' class='box'></div>
				<table id='example' class='table table-striped table-bordered nowrap'>
				<thead>
						<tr>
							<th>LOGS: </th>
							<th>OPERATOR: </th>
							<th>MACHINE: </th>
							<th>LOT ID:</th>
							<th>FG CODE:</th>
						</tr>
				</thead>
		<tbody>
					";
	
	while (($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) != false) {
		echo '<tr>';
			foreach ($row as $item) {
				echo '<td>'.($item?htmlentities($item):' ').'</td>';
			}
		echo '</tr>';		
		
	}

	echo "</tbody></table>";
	oci_free_statement($stid);
	oci_close($objConnect);
	
	}
?>	
</div>
</div>
</div>
	
	
	
	
	<div class="fw-footer">
		<div class="skew"></div>
		<div class="skew-bg"></div>
		<div class="copyright">
		© 2019 OPS1 - Mfg Home.TnF
		<br>
		STMicroelectronic - CAL property in Philippines. <br>Developed by: 249538</p>
		</div>
	</div>

	
</body>
</html>