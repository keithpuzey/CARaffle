<?php
$dataFileName = getcwd() . DIRECTORY_SEPARATOR . 'mydata.txt';
$count = file_exists($dataFileName) ? COUNT(FILE($dataFileName)) : 0;
?>

<style scoped>
    h1, h2, h3 {
        text-align: center;
        font-size: 1em;
    }
    h1 {
        font-size: 2em;
    }
    @media screen and (min-width: 64em) {
        h1 { font-size: 4em; }
        h3 { font-size: 2em; }
    }

</style>

<div class="pure-u-1">
    <h3>1. GO TO <a href="http://raffle.cdbu.io">http://raffle.cdbu.io</a></h3>
    <h3>2. SUBMIT YOUR FULL NAME</h3>
    <h3>3. SHABANG! YOU'RE IN THE GAME!</h3>

    <br/><br/>

    <h1><?=$count?> Entries in the raffle</h1>

    <form action="winners" method="post">
        <button type="submit" class="horizontal-center pure-button pure-button-primary pure-u-1-2 pure-u-md-1-2" <?=$count ? "" : "disabled"?>>And the winners are...</button>
    </form>
</div>
