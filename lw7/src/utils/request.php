<?php

function getPOSTParameter(string $name): ?string
{
    return isset($_POST[$name]) ? $_POST[$name] : null;
}

function getRequestMethod(): string
{
    return $_SERVER['REQUEST_METHOD'];
}
