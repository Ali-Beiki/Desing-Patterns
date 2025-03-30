<?php
    // require_once __DIR__.DIRECTORY_SEPARATOR.'classes'.DIRECTORY_SEPARATOR.'persian-email-server.php';
    require_once __DIR__.DIRECTORY_SEPARATOR.'autoloader.php';

    $server_name = 'persian';

    $server_ip = '192.168.24.12';
    $recerver = 'test_user@gmail.com';
    $message = 'What are design patterns? ';

    $server_name =ucfirst($server_name); # convert firest character to Uppder

    $server =new $server_name;

    $server_connection=$server->intialize($server_ip);
    $server->send_email($server_connection,$recerver,$message);


    