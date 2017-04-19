

<?php session_start() ; 
            foreach ($_SESSION as $key => $value) 
            {
                //$line[$i] = $_SESSION[$key] = null;
                unset($_SESSION[$key]); // - will wipe out the refs totally.
            }
			
			$_SESSION['orderConfirmFinalised'] = false;
?>

<html><?php session_start() ; 
            foreach ($_SESSION as $key => $value) 
            {
                //$line[$i] = $_SESSION[$key] = null;
                unset($_SESSION[$key]); // - will wipe out the refs totally.
            }
			
			$_SESSION['orderConfirmFinalised'] = false;
?>
	
	<head>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
		<link rel="stylesheet" href="css/layouts/store.css">
		<title>CA Raffle Admin Screen</title>
		<meta http-equiv="refresh" content="10">
		<script type="text/javascript" id="ca_eum_ba" agent=browser src="https://axa.trials.ca.com/mdo/v1/sdks/browser/BA.js" data-profileUrl="https://collector.axa.trials.ca.com/profiles/PUZKE01%40CA.COM-C/CA%20Raffle?agent=browser" data-tenantID="PUZKE01@CA.COM-C" data-appID="CA Raffle" data-appKey="6d832950-238e-11e7-bee2-a9dcb512d6bd" ></script>
		
	</head>
	<body>
	<?php include('includes/adminheader.php') ?>
	
	
       <?php

$file = "mydata.txt";
$lines = COUNT(FILE($file)-1);
?>

		<div class="content pure-u-1 pure-u-md-3-4">
		<h1 class="brand-tagline">Enter the Raffle here  -  http://cdbu.io</h1>
		<br>
		<br>
        <br>
		
        <br>


             <p>There are currently  <b><?=$lines?> </b>  entries in the Raffle </p>



        <br>

        <br>

						<div class="pure-controls">
             <form action="admin.php" method="post">
       
    <br>


   <button type="submit" class="pure-button pure-button-primary">Show me the Winners</button>
</form>
							
	<br>
	
	<br>
	 </div
		
	<?php include('includes/footer.php') ?>
	</body>
</html>
