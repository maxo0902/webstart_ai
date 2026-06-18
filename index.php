<?php
/**
 * Laravel Root Bootstrap
 */
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
}

if (file_exists(__DIR__ . '/bootstrap/app.php')) {
    $app = require_once __DIR__ . '/bootstrap/app.php';
    $app->handleRequest(Request::capture());
}
