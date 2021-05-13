<?php

require_once('..\src\common.inc.php');

if (getRequestMethod() == 'GET')
{
    mainPage();
}
elseif (getRequestMethod() == 'POST')
{
    saveFeedbackPage();
}
