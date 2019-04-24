<?php

require 'vendor/autoload.php';

$suchi = new Acme\Person('Thouhedul Islam');

$staff = new Acme\Staff;

$sclrship = new Acme\Business($staff);

$sclrship->hire($suchi);

var_dump($staff);