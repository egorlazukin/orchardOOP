<?php

class Garden
{
	public $appleTrees = 10;
	public $pearTrees = 15;
    public $apples = 0;
    public $pears = 0;
    public $appleWeight = 0;
    public $pearWeight = 0;

    public function addTree($type, $amount)
    {
        if ($type == 'apple') {
            $this->appleTrees += $amount;
        } elseif ($type == 'pear') {
            $this->pearTrees += $amount;
        }
    }

    public function collectFruits()
    {
        $this->apples = $this->appleTrees * rand(40, 50);
        $this->pears = $this->pearTrees * rand(0, 20);
    }

    public function countWeight()
    {
        $this->appleWeight = $this->сalculatorWeight($this->apples * rand(150, 180));
        $this->pearWeight = $this->сalculatorWeight($this->pears * rand(130, 170));
    }

    public function сalculatorWeight($weight)
    {
    	switch ($weight) 
    	{
    		case $weight > 1000 && $weight < 1000000:
    			return ($weight/1000)." кг.";
    			break;
    		case $weight > 1000000:
    			return ($weight/1000000)." т.";
    			break;
    		default:
    			return $weight." гр.";
    			break;
    	}
    }

}

$garden = new Garden();
$garden->addTree('apple', 0);
$garden->collectFruits();
$garden->countWeight();

echo 'В саду посажено ' . ($garden->appleTrees + $garden->pearTrees) . ' деревьев. Собрано яблок: ' . $garden->apples . ', груш: ' . $garden->pears . '. Общий вес яблок: ' . $garden->appleWeight . ', груш: ' . $garden->pearWeight;
