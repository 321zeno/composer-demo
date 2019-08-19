<?php

require __DIR__ . '/vendor/autoload.php';

use App\Animals\Animal;
use League\CLImate\CLImate;

$climate = new CLImate;
$animal = new Animal;

$climate->yellow($animal->eat());
