<?php

if (isset($_GET['url']) && ($url = trim($_GET['url']))) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'checker' . DIRECTORY_SEPARATOR . 'Checker.php';
    $checker = new Checker($url);
    $checker->check(true);
    ob_start();
    require_once __DIR__ . DIRECTORY_SEPARATOR.'checker_results.php';
    ob_end_flush();
}