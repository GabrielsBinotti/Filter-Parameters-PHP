<?php

require __DIR__ . "/filter.php";


$validate = filter([
    "name" => "s"
]);


var_dump($validate);
die();