<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client();
$response = $client->request('GET','https://www.torfs.be/nl/dames/schoenen');

echo $response ->getBody();