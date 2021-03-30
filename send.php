<?php
include 'vendor/autoload.php';

use Parrot\Client\Publisher;

$parameters = [
    'scheme' => 'tcp',
    'host'   => '127.0.0.1',
    'port'   => 6379,
];

$publisher = new Publisher($parameters);
$date = ' - <mark>'.date('d/m/Y H:i:s').'</mark>';
$message = json_encode([
    'name' => isset($_POST['name']) ? $_POST['name'] : 'No name',
    'message' => isset($_POST['message']) ? $_POST['message'].$date : 'Test message'.$date,
]);

$publisher->set('publicChat', $message);

echo 'ok';