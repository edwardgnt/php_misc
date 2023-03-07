<?php

require_once __DIR__ . "../../../vendor/autoload.php";

$client = new GuzzleHttp\Client();

$response = $client->request("GET", "https://jsonplaceholder.typicode.com/albums/1");

var_dump((string)$response->getBody());


?>