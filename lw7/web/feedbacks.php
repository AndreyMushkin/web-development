<?php

require_once('..\src\common.inc.php');

if (getRequestMethod() === 'GET')
{
    feedbacksPage();
}
elseif (getRequestMethod() === 'POST')
{
    feedbacksListPage();
}
