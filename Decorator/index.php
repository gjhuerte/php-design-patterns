<?php

interface CarService {
    public function getCost();

    public function getDescription();
}

class BasicInspection implements CarService {
    
    public function getCost()
    {
        return 25;
    }

    public function getDescription()
    {
        return 'Basic Inspection';
    }
}

class OilChange implements CarService {
    protected $carService;

    public function __construct(CarService $carService) 
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 40 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ', and oil change';
    }
}

class TireChange implements CarService {
    protected $carService;

    public function __construct(CarService $carService) 
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 70 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ', and and tire rotation';
    }
}

$service = new TireChange(new OilChange(new BasicInspection()));

echo $service->getDescription() . ': ' . $service->getCost();