<?php
use Wandu\Festival\Application;

require dirname(__DIR__) .'/vendor/autoload.php';

$application = new Application();
$application->boot();
$application->execute();
