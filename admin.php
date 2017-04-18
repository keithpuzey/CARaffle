<html>
        <head>
                <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
                <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
                <link rel="stylesheet" href="css/layouts/store.css">
                <title></title>

        </head>
        <body>
        <?php include('includes/adminheader.php') ?>


<?php
$myFile = "mydata.txt";
$SecondaryFile = "Secondary.txt";              
clearstatcache();
                                
if(filesize($myFile) > 50 ) {   // your file is not empty
                
$lines = file($myFile,FILE_IGNORE_NEW_LINES);//file in to an array
}
                
  else   { $lines = file($SecondaryFile,FILE_IGNORE_NEW_LINES);//file in to an array          
 }
?>

                <div class="content pure-u-1 pure-u-md-3-4">
                        <h1 class="brand-title"><img src="chaching.png" /><br/>Congratulations to our Winners</h1>
        <br>

        <br>     
                        
   <font size="10" color="blue"><p class="blink"><?=$lines[5]?> </p></font>
     
                           <font size="20" color="blue"><p class="blink"><?=$lines[3]?> </p></font>
                           <font size="15" color="blue"><p class="blink"><?=$lines[2]?> </p></font>
           


<?php include('includes/footer.php') ?>

</body>
</html>
