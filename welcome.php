<?php
if(isset($_POST['Name']) ) {
    $data = $_POST['Name'] . "\n";
    $ret = file_put_contents('/var/www/html/mydata.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error, please contact your administrator');
    }
    else {

        echo "Congratulations your entry for the raffle has been accepted";
    }
}
else {
   die('no post data to process');
}

