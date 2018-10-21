<?php

namespace App\Events;

use App\Interfaces\Observer;

class EmailNotifier implements Observer {

	public function handle()
	{
		 var_dump('fire off an email.');
	}
}