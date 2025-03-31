<?php
    require_once __DIR__.DIRECTORY_SEPARATOR.'product-factory.php';

    $product_factory = new ProductFactory();

    # $product=$product_factory->create_product("book","Shah Name",200_000,"it is a book");
    # $product=$product_factory->create_product("car","Praid 131",200_000_000,"it is a car");
    $product=$product_factory->create_product("phone"," Samsung A14",20_000_000,"it is a phone");

    echo $product->get_name().'<br>';
    echo $product->get_price().'<br>';
    echo $product->get_description().'<br>';