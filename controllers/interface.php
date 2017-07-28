<?php

include_once 'controllers/animals.php';
include_once 'controllers/cars.php';

function render(string $template, array $content = []) : string
{
    return include $template;
}