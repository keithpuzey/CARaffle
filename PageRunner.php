<?php

class PageRunner {
    private $TO_WIN = "ENTER OUR RAFFLE TO WIN!";
    private $WINNERS = "RAFFLE WINNERS";
    private $DEMO = "CDBU Modern Software Factory Demo";

    private $page;

    function __construct() {
        $path = trim(parse_url(urldecode($_SERVER["REQUEST_URI"]), PHP_URL_PATH), '/');
        // clear file name from path start (it optional in the URL)
        $path = ltrim($path, "index.php");
        $path = ltrim($path, "index");
        // clear last left slash(es)
        $path = ltrim($path, "/");
        // extract the first path chunk as a page
        list($this->page) = explode('/', $path);
        if (!$this->page) {
            $this->page = 'home';
        }
    }

    /** loads template */
    function run() {
        include 'template/template.php';
    }

    function buildVersion() {
        // todo: make it work
        // echo $BUILD$;
        echo "4566373546";
    }

    function siteName() {
        echo "Raffle";
    }

    function headerText() {
        // echo $this->WINNERS;
        echo $this->TO_WIN;
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
