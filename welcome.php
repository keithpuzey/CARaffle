<html>
        <head>
                <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
                <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
                <link rel="stylesheet" href="css/layouts/store.css">
                <title>Congratulations</title>
  <script type="text/javascript" id="ca_eum_ba" agent=browser src="https://axa.trials.ca.com/mdo/v1/sdks/browser/BA.js" data-profileUrl="https://collector.axa.trials.ca.com/profiles/PUZKE01%40CA.COM-C/CA%20Raffle?agent=browser" data-tenantID="PUZKE01@CA.COM-C" data-appID="CA Raffle" data-appKey="6d832950-238e-11e7-bee2-a9dcb512d6bd" ></script>
               
        </head>
        <body>
        <?php include('includes/header.php') ?>

<?php

if(isset($_POST['Name'])&&!empty($_POST['Name'])) {
    $data = $_POST['Name'] . "\n";
    $ret = file_put_contents('/var/www/html/mydata.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret == false) {
        $Success = 'There was an error, please contact your administrator';
    }
    else {

       $Success = 'Congratulations your entry for the raffle has been accepted';
    }
}
else {
   $Success = 'The field cannot be empty.  Please click the home button to return to the entry form and re-enter your name.';
   //die('no post data to process');
}
?>

     <div class="content pure-u-1 pure-u-md-3-4">
   
        <br>

<p>   <b> <?=$Success?> </b> </p>


<?php include('includes/footer.php') ?>

</body>
</html>

