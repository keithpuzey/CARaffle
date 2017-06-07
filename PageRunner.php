<?php

class PageRunner {
    private $TO_WIN = "ENTER OUR RAFFLE TO WIN!";
    private $WINNERS = "RAFFLE WINNERS";
    private $DEMO = "CDBU Modern Software Factory Demo";
    private $BUILD = "4566373546";

    private $page;

    public $refresh = false;

    function __construct() {
        $path = trim(parse_url(urldecode($_SERVER["REQUEST_URI"]), PHP_URL_PATH), '/');
        // clear file name from path start (it optional in the URL)
        $path = str_ireplace("index.php", "", $path);
        // clear last left slash(es)
        $path = ltrim($path, "/");
        // extract the first path chunk as a page
        list($this->page) = explode('/', $path);
        if (!$this->page) {
            $this->page = 'home';
        }

        if ($this->page === 'admin') {
            $this->refresh = true;
        }
    }

    /** loads template */
    function run() {
        include 'template/template.php';
    }

    function buildVersion() {
        // todo: bind it to Jenkins build id
        echo isset($GLOBALS["BUILD"]) ? $GLOBALS["BUILD"] : $this->BUILD;
    }

    function siteName() {
        echo "Raffle";
    }

    function headerText() {
        echo $this->page === 'winners' ? $this->WINNERS : $this->TO_WIN;
    }

    function subHeaderText() {
        echo $this->DEMO;
    }

    function pageTitle() {
        $title = $this->page;
        echo ucwords(str_replace('-', ' ', $title));
    }

    function pageContent() {
        $content_path = 'content';
        $path = $content_path . '/' . $this->page . '.php';

        if (!file_exists(filter_var($path, FILTER_SANITIZE_URL))) {
            $path = $content_path . '/404.php';
        }

        include $path;
    }
}
