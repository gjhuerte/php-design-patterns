<?php

require_once 'vendor/autoload.php';

use App\Events\Login;
use App\Events\LogHandler;
use App\Events\EmailNotifier;
use App\Events\LoginReporter;

$login = new Login;
$login->attach([
	new LogHandler,
	new EmailNotifier,
	new LoginReporter
]);

$login->fire();