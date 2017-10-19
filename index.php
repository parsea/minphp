<?php
ini_set('display_errors','On');
require_once(__DIR__.'/MinPHP/Min.php');
$d = getInstance('Demo\Controller\DemoController');
$d->index();
