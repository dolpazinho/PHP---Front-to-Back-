<?php
// Create server Array

$server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Host Header' => $_SERVER['HTTP_HOST'],
    //'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Server Protocol' => $_SERVER['SERVER_PROTOCOL'],
    'Document Root' => $_SERVER['DOCUMENT_ROOT'],
    'Current Page' => $_SERVER['PHP_SELF'],
    'Script Name' => $_SERVER['SCRIPT_NAME'],
    'Absolute Path' => $_SERVER['SCRIPT_FILENAME'],
];

// echo $server['Server Software'];
// print_r($server);

// Create client Array

$client = [
    'Client System info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP' => $_SERVER['REMOTE_ADDR'],
    'Remote Port' => $_SERVER['REMOTE_PORT'],
    'Request Time' => $_SERVER['REQUEST_TIME'],
    'Request Method' => $_SERVER['REQUEST_METHOD']
];
//print_r($client);