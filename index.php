<?php session_start() ; 
            foreach ($_SESSION as $key => $value) 
            {
                //$line[$i] = $_SESSION[$key] = null;
                unset($_SESSION[$key]); // - will wipe out the refs totally.
            }
			
			$_SESSION['orderConfirmFinalised'] = false;
?>

<html>

	<head>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
		<link rel="stylesheet" href="css/layouts/store.css">
		<title>CA Raffle</title>
		<script type="text/javascript" id="ca_eum_ba" agent=browser src="https://axa.trials.ca.com/mdo/v1/sdks/browser/BA.js" data-profileUrl="https://collector.axa.trials.ca.com/profiles/2A0E7CE2-BB3E-CF30-CF52-38212C9A7861/CA%20Raffle?agent=browser" data-tenantID="2A0E7CE2-BB3E-CF30-CF52-38212C9A7861" data-appID="CA Raffle" data-appKey="46546a30-23f0-11e7-9174-bddc75280658" ></script>
	</head>
	<body>
	<?php include('includes/header.php') ?>
	<br>
	<br>
<center><h1 class="brand-tagline">Enter the Raffle here  -  http://cdbu.io</h1></center>
		<center><font size="10" color="blue">Enter the Raffle here  -  http://cdbu.io</font> </center>
	<div class="content pure-u-1 pure-u-md-3-4">
	
	<img src="/images/enter-to-win.gif" alt="Enter to Win" style="width:304px;height:228px;">			
	<br>
        <br>

	<div class="pure-controls">
		
        <form action="welcome.php" method="post">
        Enter Name: <input name = Name type="text" name="Enter Your Name"><br>
    <br>
    <br>

   <button type="submit" class="pure-button pure-button-primary" >Submit</button>
	     
		</form>
	<br>
	<br>
	 </div
	<?php include('includes/footer.php') ?>
	</body>
</html>
