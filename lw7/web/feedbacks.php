<?php

require_once('..\src\common.inc.php');

if (getRequestMethod() === 'GET')
{
	renderTemplate('feedbacks.tpl.php');
}
elseif (getRequestMethod() === 'POST')
{
	feedbacksListPage();
}
