<?php

namespace App\Events;

use App\Interfaces\Observer;

class LoginReporter implements Observer {

	public function handle()
	{
		 var_dump('do some reporting');
	}
}