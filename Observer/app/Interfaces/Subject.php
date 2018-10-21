<?php

namespace App\Interfaces;

interface Subject {
	public function attach($observer);
	public function detach($observer);
	public function notify();
}