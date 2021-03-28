<?php
include 'vendor/autoload.php';

use Parrot\Server\Worker;

$parameters = [
    'scheme' => 'tcp',
    'host'   => '127.0.0.1',
    'port'   => 6379,
];

$parrotWorker = new Worker($parameters);
$messages = $parrotWorker->subscribe('publicChat');
header('Content-Type: application/json');
echo json_encode($messages);
