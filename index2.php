

<html>
	<head>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
		<link rel="stylesheet" href="css/layouts/store.css">
		<title>CA Raffle Admin Screen</title>
		<meta http-equiv="refresh" content="5">
	</head>
	<body>
	<?php include('includes/adminheader.php') ?>
	
	
       <?php

$file = "mydata.txt";
$lines = COUNT(FILE($file));
?>

		<div class="content pure-u-1 pure-u-md-3-4">
			<h1 class="brand-title">Raffle Status</h1>
        <br>
		
        <br>


             <p>There are currently  <b><?=$lines?> </b>  entries in the Raffle </p>



        <br>

        <br>

						<div class="pure-controls">
             <form action="admin.php" method="post">
       
    <br>


   <button type="submit" class="pure-button pure-button-primary">Select Winners</button>
</form>
						</div>
					</fieldset>
				</form>
			</div>
		</div>

		<?php include('includes/footer.php') ?>
	</body>
</html>
