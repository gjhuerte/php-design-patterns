<?php

namespace App\Events;

use App\Interfaces\Subject;

class Login implements Subject {

	protected $observers = [];

	public function attach($observable)
	{
		if(is_array($observable)) {
			return $this->attachObservers($observable);
		}

		$this->observers[] = $observable;
	}

	public function attachObservers($observable)
	{
		foreach($observable as $observer) {

			if( ! $observer instanceof Observer) 
				return "Exception occurred";

			$this->attach($observer);
		}
	}

	public function detach($index)
	{
		unset($this->observers[$index]);
	}

	public function notify()
	{
		foreach($this->observers as $observer)
		{
			$observer->handle();
		}
	}

	public function fire()
	{
		$this->notify();
	}
}