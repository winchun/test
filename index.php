<?php 

require 'class.php';
require 'class2.php';

use App\Papa\ClassName as Mem;
use App\Papa2\ClassName2;


$a = new Mem();
$b = new ClassName2($a);
$b->test();
 