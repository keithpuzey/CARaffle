<?php

class PageRunner {

    public $page;

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

    function buildVersion() {
        echo "4566373546";
    }

    function siteName() {
        echo "Raffle";
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
