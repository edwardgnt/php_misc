<?php

// Sends a get request to the api
// $data = file_get_contents("https://jsonplaceholder.typicode.com/albums/1");

// var_dump($data);



////////////////////////////////////////////////////
// Patch request

$payload = json_encode([
    "title" => "Updated title"
]);

// Stream options
$options = [
    "http" => [
        "method" => "PATCH",
        "header" => "Content-type: application/json; charset=UTF-8",
        "content" => $payload
    ]
];

$context = stream_context_create($options);

$data = file_get_contents("https://jsonplaceholder.typicode.com/albums/1", false, $context);

var_dump($data);

print_r($http_response_header);


?>