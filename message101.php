<?php

use Acme\Person;
use Acme\staff;
use Acme\Business;

$suchi = new Person('Thouhedul Islam');

$staff = new Staff;

$sclrship = new Business($staff);

$sclrship->hire($suchi);

var_dump($staff);