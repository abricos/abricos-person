<?php

$config['phrase']['sys'] = array(
    "site_name" => "Abricos Person"
);

$config['Template'] = array(
    // по умолчанию использовать шаблон blog из стиля default
    "default" => array(
        "owner" => "person",
        "name" => "main"
    ),
    "ignore" => array(
        array(
            "pattern" => "/^\/bos\//i",
            "regexp" => true
        )
    ),
    "exp" => array(
        // использовать шаблон main из стиля default для главной страницы сайта
        array(
            "pattern" => "/",
            "regexp" => false,
            "owner" => "person",
            "name" => "home"
        )
    )
);

?>