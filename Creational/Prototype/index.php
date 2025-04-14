<?php
    require_once __DIR__.DIRECTORY_SEPARATOR."autoloader.php";

    # create prototype object
    $rust_proto = new Rust();
    $sql_proto = new Sql();

    #copy object
    $first_rust_book = clone $rust_proto;
    $secound_rust_book = clone $rust_proto;
    $first_sql_book = clone $sql_proto;

    #set new name
    $first_rust_book->set_name("Network in Rust");
    $secound_rust_book->set_name("Learning Rust (Basic)");
    $first_sql_book->set_name("SQL QuickStart Guide");

    # result
    echo "topic :{$first_rust_book->get_topic()} ,book name :{$first_rust_book->get_name()} <br>";
    echo "topic :{$secound_rust_book->get_topic()} ,book name :{$secound_rust_book->get_name()} <br>";
    echo "topic :{$first_sql_book->get_topic()} ,book name :{$first_sql_book->get_name()} <br>";