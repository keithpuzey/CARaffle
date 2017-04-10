

<html>

	<head>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
		<link rel="stylesheet" href="css/layouts/store.css">
		<title>CA Raffle</title>
		<meta http-equiv="refresh" content="5">
		<script src="raffle_validation.js">
		</script>
	</head>
	<body>
	<?php include('includes/header.php') ?>
		<div class="content pure-u-1 pure-u-md-3-4">
			<h1 class="brand-title">CA virtual raffle</h1>
        <br>
        <br>

						<div class="pure-controls">
             <form action="welcome.php" method="post">
        Name: <input name = Name type="text" name="Enter Your Name"><br>
    <br>
    <br>


   <button type="submit" class="pure-button pure-button-primary" >Enter Raffle</button>
</form>
							
	<IMG SRC="/images/raffle-tickets.png" ALT="Raffle" WIDTH=32 HEIGHT=32>
						</div>
					</fieldset>
				</form>
			</div>
		</div>

		<?php include('includes/footer.php') ?>
	</body>
</html>
