<?php
require 'garden/func.php';

$garden = new Garden();
$garden->addTree('apple', 	10);
$garden->addTree('pear', 	15);
$garden->collectFruits();
$garden->countWeight();

echo 'В саду посажено ' . ($garden->appleTrees + $garden->pearTrees) . ' деревьев. Собрано яблок: ' . $garden->apples . ', груш: ' . $garden->pears . '. Общий вес яблок: ' . $garden->appleWeight . ', груш: ' . $garden->pearWeight;
