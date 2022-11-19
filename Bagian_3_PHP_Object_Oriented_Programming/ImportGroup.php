<?php 

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\{Conflict, Sample, Dummy};
use function Helper\{helpMe as help};
use const Helper\{APPLICATION as APP};
$conflict = new Conflict();
$sample = new Sample();
$dummy = new Dummy();
help();
echo APP;
