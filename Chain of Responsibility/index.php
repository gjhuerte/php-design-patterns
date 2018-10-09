<?php

// makes sure the three classes adhere to the same contract
// which is check
abstract class HomeChecker {

    protected $successor;

    public abstract function check(HomeStatus $home);

    public function succeedWith(HomeChecker $successor)
    {
        $this->successor = $successor;
    }

    public function next(HomeStatus $home)
    {
        if($this->successor)
        {
            $this->successor->check($home);
        }
    }
}

// ensures that the door is locked
class Locks extends HomeChecker {

    public function check(HomeStatus $home)
    {

        if( ! $home->locked)
        {
            throw new Exception('The doors are not locked!!! Abort abort');
        }

        $this->next($home);

    }

}

// ensures the lights are off
class Lights extends HomeChecker {

    public function check(HomeStatus $home)
    {

        if( ! $home->lightsOff)
        {
            throw new Exception('The lights are still on!!! Abort abort');
        }

        $this->next($home);

    }
}

// ensurest the alarm is on
class Alarm extends HomeChecker {

    public function check(HomeStatus $home)
    {

        if( ! $home->alarmOn)
        {
            throw new Exception('The alarm has not been set!!! Abort abort');
        }

        $this->next($home);

    }
}


class HomeStatus {
    public $alarmOn = true;
    public $locked = false;
    public $lightsOff = true;
}

$locks = new Locks;
$lights = new Lights;
$alarm = new Alarm;

$locks->succeedWith($lights);
$lights->succeedWith($alarm);

$locks->check(new HomeStatus);

// ...
$locks = new Locks;
$status = new HomeStatus;

$locks->check($status);