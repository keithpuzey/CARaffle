<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php $page->pageTitle(); ?> | <?php $page->siteName(); ?></title>
    <style type="text/css">
        .wrap { max-width: 720px; margin: 50px auto; padding: 30px 40px; text-align: center; box-shadow: 0 4px 25px -4px #9da5ab; }
        article { text-align: left; padding: 40px; line-height: 150%; }
    </style>
</head>
<body>
<div class="wrap">

    <header>
        <h2><?php $page->siteName(); ?></h2>
<!--        <nav class="menu"></nav>-->
    </header>

    <article>
        <h3><?php $page->pageTitle(); ?></h3>
        <?php $page->pageContent(); ?>
    </article>

    <footer><small>&copy;<?php echo date('Y'); ?> <?php $page->siteName(); ?>.<br><?php $page->buildVersion(); ?></small></footer>

</div>
</body>
</html>