<?php
use Wandu\Festival\Application;

require dirname(__DIR__) .'/vendor/autoload.php';

date_default_timezone_set('UTC');

$application = new Application();
$application->boot();
$application->execute();
