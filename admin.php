<html>
        <head>
                <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
                <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
                <link rel="stylesheet" href="css/layouts/store.css">
                <script type="text/javascript" id="ca_eum_ba" agent=browser src="https://axa.saas.ca.com/mdo/v1/sdks/browser/BA.js" data-profileUrl="https://collector.axa.saas.ca.com/api/1/urn:ca:tenantId:48B428C9-C483-B954-105A-A612C70885A2/urn:ca:appId:Raffle%20Application/profile?agent=browser" data-tenantID="48B428C9-C483-B954-105A-A612C70885A2" data-appID="Raffle Application" data-appKey="fa732d70-269e-11e7-b5cd-994429ed59ce" ></script>
                <title>Winners</title>

        </head>
        <body>
        <?php include('includes/adminheader.php') ?>


<?php
$myFile = "mydata.txt";
$SecondaryFile = "Secondary.txt";              
clearstatcache();
                                
if(filesize($myFile) > 40 ) {   // your file is not empty
                
$lines = file($myFile,FILE_IGNORE_NEW_LINES);//file in to an array
}
                
  else   { $lines = file($SecondaryFile,FILE_IGNORE_NEW_LINES);//file in to an array          
 }
?>

                <div class="content pure-u-1 pure-u-md-3-4">
                    <center>    <h1 class="brand-title"><img src="chaching.png" /><br/>Congratulations to our Winners</h1></center>
        <br>

        <br>     
                        
    <center><font size="10" color="blue"><p class="blink"><?=$lines[5]?> </p></font> </center>
     
                          <center> <font size="10" color="blue"><p class="blink"><?=$lines[3]?> </p></font> </center>
                          <center> <font size="10" color="blue"><p class="blink"><?=$lines[2]?> </p></font> </center>
           


<?php include('includes/footer.php') ?>

</body>
</html>
