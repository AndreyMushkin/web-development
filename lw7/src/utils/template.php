<?php

function renderTemplate(string $tplName, array $args = [], string $status): void
{
    include __DIR__ . "/../templates/{$tplName}";
}
