<?php

require 'vendor/autoload.php';

use \Test as t;
use \Test\Sub1 as sub1;

$sub1 = new sub1\Sub1();
$sub2 = new sub1\Sub2\Sub2();
$sub2_1 = new sub1\Sub2\Sub2_1();
$test = new t\Test();
