<?php

include ('../src/TestClass01.php');
include ('../src/TestClass02.php');


$a = new \Cost02\TestClass01("Cezar","Caia");
$b = $a->getDetails();

echo $b. "\n";

$a = new \Cost02\TestClass02("Cezar","Caia");
$b = $a->getDetails();

echo $b;

?>