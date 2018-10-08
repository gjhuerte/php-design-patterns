<?php

require 'vendor/autoload.php';

use App\TurkeySub;
use App\VeggiesSub;

echo "Turkey Procedure: " . PHP_EOL;
(new TurkeySub)->make();

echo "Veggies Procedure: " . PHP_EOL;
(new VeggiesSub)->make();